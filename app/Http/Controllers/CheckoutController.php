<?php

namespace App\Http\Controllers;

use App\Mail\TransaksiSuccess;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\TravelPackage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function index(Request $request, $id)
    {
        $transaksi = Transaction::with(['travel_package','detail','user'])->findOrFail($id);
        return view('frontend.checkout', compact('transaksi'));
    }

    public function process(Request $request, $id)
    {
        $travel = TravelPackage::findOrFail($id);

        $transaksi = Transaction::create([
            'travel_packages_id' => $id,
            'users_id' => Auth::user()->id,
            'status' => 'IN_CART',
            'additional_visa' => 0,
            'transactin_total' => $travel->price
        ]);

        $transaksi_detail = TransactionDetail::create([
            'transaction_id' => $transaksi->id,
            'username' => Auth::user()->username,
            'nationality' => 'Indo',
            'is_visa' => false,
            'passport' => Carbon::now()->addYear(5)
        ]);

        return redirect()->route('checkout.index', $transaksi->id);
    }

    public function create(Request $request, $id)
    {

        $request->validate([
            'username' => 'required|string|exists:users,username|unique:transaction_details',
            'is_visa' => 'required|boolean',
            'passport' => 'required'
        ]);

        $data = $request->all();
        $data['transaction_id'] = $id;

        TransactionDetail::create($data);

        $transaksi = Transaction::with('travel_package')->findOrFail($id);

        if($request->is_visa){
            $transaksi->transactin_total += 190;
            $transaksi->additional_visa += 190;
        }

        $transaksi->transactin_total += $transaksi->travel_package->price;

        $transaksi->update();

        return redirect()->route('checkout.index', $id);
    }

    public function remove(Request $request, $detail_id)
    {
        $detail = TransactionDetail::findOrFail($detail_id);

        $transaksi = Transaction::with(['travel_package','detail'])->findOrFail($detail->transaction_id);

        if($detail->is_visa){
            $transaksi->transactin_total -= 190;
            $transaksi->additional_visa -= 190;
        }

        $transaksi->transactin_total -= $transaksi->travel_package->price;

        $transaksi->update();

        $detail->delete();

        return redirect()->route('checkout.index', $detail->transaction_id);
    }

    public function success($id)
    {
        $transaksi = Transaction::with('travel_package.galleries','user','detail')->findOrFail($id);

        $transaksi->status = 'PENDING';

        $transaksi->update();


        // return $transaksi;

        Mail::to($transaksi->user)->send(
            new TransaksiSuccess($transaksi)
        );


        return view('frontend.success');
    }
}
