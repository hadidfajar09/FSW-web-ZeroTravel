@extends('backend.master.admin')

@section('title')
    Detail Transaksi 
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Transaksi <strong>{{ $transaction->user->name }}</strong></h1>
    </div>


    <div class="card-shadow">
        
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $transaction->id }}</td>
                </tr>
                    <tr>
                       <th>Paket Travel</th>
                       <td>{{ $transaction->travel_package->title }}</td>
                    </tr>

                    <tr>
                        <th>Pembeli</th>
                        <td>{{ $transaction->user->name }}</td>
                     </tr>

                     <tr>
                        <th>Visa</th>
                        <td>Rp. {{ $transaction->additional_visa }}</td>
                     </tr>

                     <tr>
                        <th>Total Transaksi</th>
                        <td>Rp. {{ $transaction->transactin_total }}</td>
                     </tr>

                      <tr>
                        <th>Status Transaksi</th>
                        <td>{{ $transaction->status }}</td>
                     </tr>

                     <tr>
                         <th>Pembelian</th>
                         <td>
                             <table class="table table-bordered">
                                 <tr>
                                     <th>ID</th>
                                     <th>Nama</th>
                                     <th>Asal</th>
                                     <th>VISA</th>
                                     <th>Passport</th>

                                 </tr>

                                 @foreach ($details as $row)
                                     <tr>
                                         <td>{{ $row->id }}</td>
                                         <td>{{ $row->username }}</td>
                                         <td>{{ $row->nationality }}</td>
                                         <td>{{ $row->is_visa ? '30 hari' : 'N/A' }}</td>
                                         <td>{{ $row->passport }}</td>
                                     </tr>
                                 @endforeach
                             </table>
                         </td>
                     </tr>
               
                
            </table>
        </div>
    </div>

</div>
@endsection
