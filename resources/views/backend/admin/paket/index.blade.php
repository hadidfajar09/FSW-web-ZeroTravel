@extends('backend.master.admin')

@section('title')
    Paket Travel
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>
        <a href="{{ route('paket.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
    </div>

    <!-- Content Row -->

    <div class="card shadow mb-4">
    
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Location</th>
                            <th>Type</th>
                            <th>Duration</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                  
                    <tbody>
                        @php
                        $i = 1;
                    @endphp
                    @forelse ($travel as $row)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->location }}</td>
                        <td>{{ $row->type }}</td>
                        <td>{{ $row->duration }}</td>
                        <td>{{ $row->date }}</td>
                        <td>
                            <a href="{{ route('paket.edit' , $row->id) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-pencil-alt"></i>
                            </a>

                            <form action="{{ route('paket.destroy', $row->id) }}" method="post" class="d-inline" >
                                @csrf
                                @method('delete')

                                <button class="btn btn-danger btn-sm">
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
