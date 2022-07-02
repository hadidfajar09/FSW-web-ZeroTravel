@extends('frontend.master.success')

@section('title')
    Success Checkout
@endsection


@section('content')
<main>
      
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img src="{{ asset('frontend/images/ic_mail.png') }}" class="logo-success" alt="">
            <h3>Mantap! Berhasil</h3>
            <p>Silahkan anda cek email anda</p>
            <a href="{{ route('home') }}" class="btn btn-homepage mt-3 px-5">Homepage</a>
        </div>
    </div>
         
          </section>
        </main>
    
@endsection