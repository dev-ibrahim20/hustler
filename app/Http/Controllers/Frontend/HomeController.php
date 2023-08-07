<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Product::skip(0)->take(4)->get();
        return view('frontend.home.index', compact('data'));
    }
}
