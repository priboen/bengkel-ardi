<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function index()
    {
        $promos = Promo::all();
        return view('pages.admin.promo.index', compact('promos'));
    }

    public function create()
    {
        return view('pages.admin.promo.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();
        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('promo_images', 'public');
            $data['image_path'] = $imagePath;
        }

        Promo::create(
            $data
        );

        return redirect()->route('promos.index');
    }

    public function show(Promo $promo)
    {

        return view('pages.admin.promo.show', compact('promo'));
    }

    public function destroy($id)
    {
        $promo = Promo::find($id);
        $promo->delete();

        return redirect()->route('promos.index');
    }

    public function promosForFrontend(Request $request)
    {
        $search = $request->input('search'); // Ambil parameter pencarian dari request

        // Ambil semua promo
        $promos = Promo::all();

        // Query kategori dan produk dengan filter pencarian
        $categories = Category::with(['products' => function ($query) use ($search) {
            if ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            }
        }])->get();

        // Jika ingin mengambil semua produk tanpa kategori
        $filteredProducts = Product::query();
        if ($search) {
            $filteredProducts->where('name', 'like', '%' . $search . '%');
        }
        $filteredProducts = $filteredProducts->get();

        return view('product', compact('promos', 'categories', 'filteredProducts', 'search'));
    }


    public function filterProducts(Request $request)
    {

        $categoryIds = $request->input('category_ids', []);


        if (empty($categoryIds)) {
            $categories = Category::with('products')->get();
        } else {

            $categories = Category::with('products')
                ->whereIn('id', $categoryIds)
                ->get();
        }


        return response()->json($categories);
    }
}
