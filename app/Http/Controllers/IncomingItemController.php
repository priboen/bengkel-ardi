<?php

namespace App\Http\Controllers;

use App\Models\IncomingItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IncomingItemController extends Controller
{
    public function index()
    {
        $search = request('name');

        $incoming = IncomingItem::with(['product.category'])
            ->where('incoming_date', 'like', '%' . $search . '%')
            ->orWhereHas('product', function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })
            ->orWhereHas('product.category', function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })
            ->orderBy('incoming_date', 'asc')
            ->paginate(10);

        return view('pages.admin.incoming.index', compact('incoming'));
    }

    public function show(IncomingItem $incoming)
    {
        return view('pages.admin.incoming.show', compact('incoming'));
    }

    public function create()
    {
        $products = Product::all();
        return view('pages.admin.incoming.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'incoming_date' => 'required',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'condition' => 'required',
        ]);

        $data = $request->all();
        $data['total'] = $request->price * $request->quantity;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('incoming_images');
            $data['image'] = basename($imagePath);
        }

        IncomingItem::create($data);

        return redirect()->route('incoming.index')->with('success', 'Data Barang Masuk berhasil ditambahkan!');
    }

    public function destroy(IncomingItem $incoming)
    {
        $incoming->delete();
        return redirect()->route('incoming.index')->with('success', 'Data Barang Masuk berhasil dihapus!');
    }
}
