<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\TravelPackage;
use Illuminate\Http\Request;

class DetailController extends Controller
{
   
    public function index(Request $request, $slug)
    {
        $detail = TravelPackage::with('galleries')->where('slug',$slug)->first();
        $image = Gallery::where('travel_packages_id', $detail->id)->limit(5)->get();
        return view('frontend.detail',compact('detail','image'));
    }
}
