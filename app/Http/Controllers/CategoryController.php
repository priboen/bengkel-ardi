<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('name', 'like', '%' . request('name') . '%')->orderBy('id', 'desc')->paginate(10);
        return view('pages.admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('pages.admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        Category::create($request->all());
        return redirect()->route('categories.index')->with('success', 'Kategori Produk berhasil ditambah!');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Kategori Produk berhasil dihapus!');
    }
}
