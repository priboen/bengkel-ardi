<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProductByBarcode($barcode)
{
    $product = Product::with('category')->where('barcode', $barcode)->first();

    if (!$product) {
        return response()->json(['message' => 'Produk tidak ditemukan!'], 404);
    }

    return response()->json([
        'id' => $product->id,
        'name' => $product->name,
        'category_name' => $product->category->name,
    ]);
}

}
