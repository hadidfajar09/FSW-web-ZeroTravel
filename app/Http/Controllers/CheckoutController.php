<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend.checkout');
    }

    public function successCheckout()
    {
        return view('frontend.success');
    }
}
