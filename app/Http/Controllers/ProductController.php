<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('name', 'like', '%' . request('name') . '%')
            ->orderBy('name', 'asc')
            ->paginate(10);
        return view('pages.admin.products.index', compact('products'));
    }
    public function create()
    {
        $category = Category::all();
        return view('pages.admin.products.create', compact('category'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'barcode' => 'required|unique:products,barcode',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'name' => 'required',
                'description' => 'nullable',
                'price' => 'required|integer',
                'category_id' => 'required|exists:categories,id'
            ]);

            $data = $request->all();

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('product_images');
                $data['image'] = basename($imagePath);
            }

            Product::create($data);

            return redirect()->route('product.index')->with('success', 'Produk berhasil ditambahkan!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput()
                ->with('error', 'Validasi gagal! Periksa kembali input Anda.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }


    public function edit(Product $product)
    {
        $category = Category::all();
        return view('pages.admin.products.edit', compact('product', 'category'));
    }

    public function update(Request $request, Product $product)
    {
        try {
            $barcodeRule = $request->filled('barcode')
                ? 'unique:products,barcode,' . $product->id
                : 'nullable';
            $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'name' => 'required',
                'description' => 'nullable',
                'price' => 'required|integer',
                'category_id' => 'required|exists:categories,id',
                'barcode' => $barcodeRule,
            ]);

            $data = $request->only(['name', 'description', 'price', 'stock', 'category_id']);

            if ($request->hasFile('image')) {
                if ($product->image && Storage::exists('product_images/' . $product->image)) {
                    Storage::delete('product_images/' . $product->image);
                }
                $imagePath = $request->file('image')->store('product_images');
                $data['image'] = basename($imagePath);
            }

            if ($request->filled('barcode')) {
                $data['barcode'] = $request->barcode;
            }

            $product->update($data);

            return redirect()->route('product.index')->with('success', 'Produk berhasil diubah!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput()
                ->with('error', 'Validasi gagal! Periksa kembali input Anda.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Produk berhasil dihapus!');
    }
}
