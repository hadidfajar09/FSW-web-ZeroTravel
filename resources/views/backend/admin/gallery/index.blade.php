@extends('backend.master.admin')

@section('title')
    Galeri
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Galeri</h1>
        <a href="{{ route('gallery.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
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
                            <th>Image</th>
                            <th>Paket Travel</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                  
                    <tbody>
                        @php
                        $i = 1;
                    @endphp
                    @forelse ($gallery as $row)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $row->travel_package->title }}</td>
                        <td>
                            <img src="{{ asset('storage/'.$row->image) }}" alt="" class="img-thumb" style="width: 50px;">
                        </td>
                        
                        <td>
                            <a href="{{ route('gallery.edit' , $row->id) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-pencil-alt"></i>
                            </a>

                            <form action="{{ route('gallery.destroy', $row->id) }}" method="post" class="d-inline" confirmed>
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
