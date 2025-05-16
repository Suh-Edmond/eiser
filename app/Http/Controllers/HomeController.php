<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function category()
    {
        return view('category.index');
    }

    public function productDetails()
    {
        return view('product.details');
    }

    public function checkout()
    {
        return view('checkout.checkout');
    }

    public function blog()
    {
        return view('blog.index');
    }

    public function blogDetails()
    {
        return view('blog.details');
    }

    public function cart()
    {
        return view('cart.index');
    }

    public function contact()
    {
        return view('contact.contact');
    }

    public function tracking()
    {
        return view('tracking.tracking');
    }

    public function elements()
    {
        return view('elements.element');
    }
}
