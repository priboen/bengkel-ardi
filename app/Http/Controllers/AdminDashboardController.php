<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\IncomingItem;
use App\Models\OutgoingItem;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalProduct = Product::count();
        $totalCategory = Category::count();
        $totalIncoming = IncomingItem::count();
        $totalOutgoing = OutgoingItem::count();

        return view('pages.admin.dashboard', compact(['totalProduct', 'totalCategory', 'totalIncoming', 'totalOutgoing']));
    }
}
