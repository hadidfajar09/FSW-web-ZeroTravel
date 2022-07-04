@extends('backend.master.admin')

@section('title')
    Edit Status 
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Status</h1>
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
          <form action="{{ route('transaksi.update', $transaction->id) }}" method="post" >
            @method('PUT')
            @csrf
            <div class="form-group row">
              <label for="status" class="col-sm-2 col-form-label">Status Pemesanan</label>
              <div class="col-sm-6">
                  <select name="status" id="status" class="form-control">
                    <option value="{{ $transaction->status }}" >Jangan Diubah ( {{ $transaction->status }} )</option>
                    <option value="IN_CART"> In CART </option>
                    <option value="PENDING"> PENDING </option>
                    <option value="SUCCESS"> SUCCESS </option>
                    <option value="CANCEL"> CANCEL </option>
                    <option value="FAILED"> FAILED </option>

                  </select>
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
