<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\TravelPackage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $paket = TravelPackage::count();
        $transaksi = Transaction::count();
        $pending = Transaction::where('status','PENDING')->count();
        $success = Transaction::where('status','SUCCESS')->count();
        return view('backend.admin.dashboard',compact('paket','transaksi','pending','success'));
    }
}
