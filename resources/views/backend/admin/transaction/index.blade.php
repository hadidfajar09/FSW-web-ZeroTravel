@extends('backend.master.admin')

@section('title')
    Transaksi
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
       
    </div>

    <!-- Content Row -->

    <div class="card shadow mb-4">
    
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Paket Travel</th>
                            <th>User</th>
                            <th>VISA</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                  
                    <tbody>
                        @php
                        $i = 1;
                    @endphp
                    @forelse ($transaction as $row)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $row->travel_package->title }}</td>
                        <td>{{ $row->user->name }}</td>
                        <td>{{ $row->additional_visa }}</td>
                        <td>{{ $row->transactin_total }}</td>
                        <td>{{ $row->status }}</td>
                        
                        <td>

                            <a href="{{ route('transaksi.show' , $row->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('transaksi.edit' , $row->id) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-pencil-alt"></i>
                            </a>

                            <form action="{{ route('transaksi.destroy', $row->id) }}" method="post" class="d-inline" confirmed>
                                @csrf
                                @method('delete')

                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                        <tr >
                            <td colspan="7" class="text-center">Data Kosong</td>
                        </tr>
                    @endforelse
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
@endsection
