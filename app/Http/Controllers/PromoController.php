<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

    public function promosForFrontend()
{
    $promos = Promo::all();
    $categories = Category::with('products')->get();
    return view('product', compact(['promos', 'categories']));
}

public function filterProducts(Request $request)
{
    // Ambil daftar kategori yang dipilih
    $categoryIds = $request->input('category_ids', []);

    // Jika tidak ada kategori yang dipilih, ambil semua kategori beserta produknya
    if (empty($categoryIds)) {
        $categories = Category::with('products')->get();
    } else {
        // Jika ada kategori yang dipilih, filter berdasarkan kategori tersebut
        $categories = Category::with('products')
            ->whereIn('id', $categoryIds)
            ->get();
    }

    // Kembalikan kategori beserta produk dalam format JSON
    return response()->json($categories);
}

}
