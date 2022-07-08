<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $travel = TravelPackage::with('galleries')->paginate(4);
        return view('frontend.home',compact('travel'));
    }

}
