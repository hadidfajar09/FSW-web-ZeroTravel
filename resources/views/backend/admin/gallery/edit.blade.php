@extends('backend.master.admin')

@section('title')
    Edit Gallery 
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Gallery</h1>
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


    <div class="card-shadow">
        
        <div class="card-body">
          <form action="{{ route('gallery.update', $gallery->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group row">
              <label for="travel_packages_id" class="col-sm-2 col-form-label">Paket Travel</label>
              <div class="col-sm-6">
                  <select name="travel_packages_id" id="travel_packages_id" class="form-control">
                    <option value="{{ $gallery->travel_packages_id }}" >Jangan Diubah</option>
                    @foreach ($travel as $row)
                    <option value="{{ $row->id }}">
                      {{ $row->title }}
                    </option>
                    @endforeach

                  </select>
              </div>
            </div>
            <div class="form-group row ">
              <label for="image" class="col-sm-2 col-form-label">Thumbnail</label>
              <div class="col-sm-6 text-center" >
                <input type="file" class="form-control mb-3" id="image" name="image">
                <img src="{{ asset('storage/'.$gallery->image) }}" class="" alt="" width="50%">
              </div>
            </div>

              <button type="submit" class="btn-primary btn-block">
                  Update
              </button>
          </form>
        </div>
    </div>

</div>
@endsection
