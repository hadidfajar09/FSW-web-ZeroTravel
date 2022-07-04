@extends('backend.master.admin')

@section('title')
    Tambah Paket Travel 
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Paket Travel</h1>
    </div>

    <!-- Content Row -->

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow mb-4">
    
        <div class="card-body">
            <form action="{{ route('paket.store') }}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="location" class="col-sm-2 col-form-label">Lokasi</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="about" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-6">
                        <textarea name="about" id="about" cols="30" rows="3" class="d-block w-100 form-control">{{ old('about') }}</textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="event" class="col-sm-2 col-form-label">Event</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="event" name="event" value="{{ old('event') }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="lang" class="col-sm-2 col-form-label">Bahasa</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="lang" name="lang" value="{{ old('lang') }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="food" class="col-sm-2 col-form-label">Makanan</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="food" name="food" value="{{ old('food') }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label">Harga Paket</label>
                    <div class="col-sm-6">
                      <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="type" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="duration" class="col-sm-2 col-form-label">Durasi</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="duration" name="duration" value="{{ old('duration') }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="date" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-6">
                      <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}">
                    </div>
                  </div>
    
                  <button type="submit" class="btn-primary btn-block" style="border-radius: 20px;">
                      Tambahkan
                  </button>
              </form>
        </div>
    </div>


</div>
@endsection
