<?php

namespace App\Http\Controllers;

use App\Models\OutgoingItem;
use App\Models\Product;
use Illuminate\Http\Request;

class OutgoingItemController extends Controller
{
    public function index()
    {
        $search = request('name');

        $outgoing = OutgoingItem::with(['product.category'])
            ->where('outgoing_date', 'like', '%' . $search . '%')
            ->orWhereHas('product', function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })
            ->orWhereHas('product.category', function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })
            ->orderBy('id', 'asc')
            ->paginate(10);

        return view('pages.admin.outgoing.index', compact('outgoing'));
    }

    public function show(OutgoingItem $outgoing)
    {
        return view('pages.admin.outgoing.show', compact('outgoing'));
    }

    public function create()
    {
        $products = Product::all();
        return view('pages.admin.outgoing.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'outgoing_date' => 'required',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'reason' => 'required',
        ]);

        $data = $request->all();
        $data['total'] = $request->price * $request->quantity;

        OutgoingItem::create($data);

        return redirect()->route('outgoing.index')->with('success', 'Data Barang Keluar berhasil ditambahkan!');
    }

    public function destroy(OutgoingItem $outgoing)
    {
        $outgoing->delete();
        return redirect()->route('outgoing.index')->with('success', 'Data Barang Keluar berhasil dihapus!');
    }
}
