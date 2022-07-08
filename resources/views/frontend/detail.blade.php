@extends('frontend.master.master')

@section('title')
     {{ $detail->title }}
@endsection


@push('css')
<link rel="stylesheet" href="{{ asset('frontend/libraries/xzoom/xzoom.css') }}">
@endpush
@section('content')
       <!-- main -->

    
       <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col pl-3">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Paket Travel
                                </li>
                                <li class="breadcrumb-item active">
                                  Details
                              </li>
                            </ol>
                        </nav>
                    </div>
                </div>
  
                <div class="row">
                  <div class="col-lg-8 pl-lg-3">
                      <div class="card card-details">
                          <h1>{{ $detail->title }}</h1>
                          <p>{{ $detail->location }}</p>
                          <div class="gallery">
                              <div class="xzoom-container">
                                  <img src="{{ asset('storage/'.$detail->galleries->first()->image) }}" alt="" width="12" class="xzoom" id="xzoom-default" xoriginal="{{ asset('storage/'.$detail->galleries->first()->image) }}">
                              </div>
                              <div class="xzoom-thumbs">
                                  @foreach ($image as $row)
                                  <a href="{{ asset('storage/'.$row->image) }}">
                                      <img src="{{ asset('storage/'.$row->image) }}" class="xzoom-gallery" alt="" width="125" height="70" xpreview="{{ asset('storage/'.$row->image) }}">
                                  </a>

                                  @endforeach
                                 
                              </div>
                          </div>
                          <h2>Deskripsi Paket</h2>
                          <p>
                           {!! $detail->title !!}
                          </p>
                          <p>Bali and a district of Klungkung Regency that includes the neighbouring small island of 
                            Nusa Lembongan. The Badung Strait separates the island and Bali.</p>
                          <div class="features row">
                              <div class="col-md-4">
                                  <img src="{{ asset('frontend/images/ic_event.png') }}" alt="" class="featured-image">
                                  <div class="description">
                                      <h3>Acara Adat</h3>
                                      <p>{{ $detail->event }}</p>
                                  </div>
                              </div>
                              <div class="col-md-4 border-left">
                                  <img src="{{ asset('frontend/images/ic_language.png') }}" alt="" class="featured-image">
                                <div class="description">
                                    <h3>Bahasa</h3>
                                    <p>{{ $detail->lang }}</p>
                                </div>
                            </div><div class="col-md-4 border-left">
                                <img src="{{ asset('frontend/images/ic_foods.png') }}" alt="" class="featured-image">
                                <div class="description">
                                    <h3>Makanan</h3>
                                    <p>{{ $detail->food }}</p>
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4">
                      <div class="card card-details card-right">
                          <h2>Orang yang akan Pergi</h2>
                          <div class="member my-2">
                              <img src="{{ asset('frontend/images/Mask Group 3.png') }}" class="member-img mr-1" alt="">
                              <img src="{{ asset('frontend/images/Mask Group 3.png') }}" class="member-img mr-1" alt="">
                              <img src="{{ asset('frontend/images/Mask Group 3.png') }}" class="member-img mr-1" alt="">
                              <img src="{{ asset('frontend/images/Mask Group 3.png') }}" class="member-img mr-1" alt="">
                              <img src="{{ asset('frontend/images/Group 6.png') }}" class="member-img mr-1" alt="">
                          </div>
                          <hr>
                          <h2>Informasi Perjalanan</h2>
                          <table class="trip-informasi">
                              <tr>
                                  <th width="50%">Date Of Departure</th>
                                  <td width="50%" class="text-right">{{\Carbon\Carbon::create($detail->date)->format('n F, Y') }}</td>
                              </tr>
                              <tr>
                                  <th width="50%">Duration</th>
                                  <td width="50%" class="text-right">{{ $detail->duration }}</td>
                              </tr>
                               <tr>
                                  <th width="50%">Type</th>
                                  <td width="50%" class="text-right">{{ $detail->type }}</td>
                               </tr>
                                 <tr>
                                  <th width="50%">Price List</th>
                                  <td width="50%" class="text-right">Rp. {{ $detail->price }}</td>
                                 </tr>
                                  
                              
                          </table>
                      </div>
                      <div class="join-container">

                        @auth
                            <form action="{{ route('checkout.process', $detail->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-block btn-join-now mt-3 py-2">Join Now</button>
                            </form>
                        @endauth

                        @guest
                        <a href="{{ route('login') }}" class="btn btn-block btn-join-now mt-3 py-2">
                            Login Atau Daftar terlebih dahulu
                        </a>
                        @endguest
                         
                      </div>
                  </div>
              </div>
  
            </div>
  
       
        </section>
      </main>
@endsection

@push('scripts')
<script src="{{ asset('frontend/libraries/xzoom/xzoom.min.js') }}"></script>

<script>
    $(document).ready(function(){
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15
        })
    });
 
</script>
@endpush