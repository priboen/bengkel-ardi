<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(){
        $company = Company::find(1);
        return view('welcome', compact('company'));
    }
}
