@extends('frontend.master.master')

@section('title')
    Paket Travel
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
                          <h1>Toko Fajarnet</h1>
                          <p>BTN Tabaria Blok E8</p>
                          <div class="gallery">
                              <div class="xzoom-container">
                                  <img src="frontend/images/Mask Group 4.png" alt="" class="xzoom" id="xzoom-default" xoriginal="frontend/images/Mask Group 4.png">
                              </div>
                              <div class="xzoom-thumbs">
                                  <a href="frontend/images/Mask Group 4.png">
                                      <img src="frontend/images/Mask Group 4.png" class="xzoom-gallery" alt="" width="125" xpreview="frontend/images/Mask Group 4.png">
                                  </a>
                                  <a href="frontend/images/Mask Group 4.png">
                                      <img src="frontend/images/Mask Group 4.png" class="xzoom-gallery" alt="" width="125" xpreview="frontend/images/Mask Group 4.png">
                                  </a>  
                                  <a href="frontend/images/Mask Group 4.png">
                                      <img src="frontend/images/Mask Group 4.png" class="xzoom-gallery" alt="" width="125" xpreview="frontend/images/Mask Group 4.png">
                                  </a>  
                                  <a href="frontend/images/Mask Group 4.png">
                                      <img src="frontend/images/Mask Group 4.png" class="xzoom-gallery" alt="" width="125" xpreview="frontend/images/Mask Group 4.png">
                                  </a> 
                                  <a href="frontend/images/Mask Group 4.png">
                                      <img src="frontend/images/Mask Group 4.png" class="xzoom-gallery" alt="" width="125" xpreview="frontend/images/Mask Group 4.png">
                                  </a> 
                              </div>
                          </div>
                          <h2>Tentang Wisata</h2>
                          <p>
                            Nusa Penida is an island southeast of Indonesias island Bali and a district of Klungkung 
                            Regency that includes the neighbouring small island of Nusa Lembongan. The Badung 
                            Strait separates the island and Bali. The interior of Nusa Penida is hilly with a maximum 
                            altitude of 524 metres. It is drier than the nearby island of Bali.
                          </p>
                          <p>Bali and a district of Klungkung Regency that includes the neighbouring small island of 
                            Nusa Lembongan. The Badung Strait separates the island and Bali.</p>
                          <div class="features row">
                              <div class="col-md-4">
                                  <img src="frontend/images/ic_event.png" alt="" class="featured-image">
                                  <div class="description">
                                      <h3>Acara Adat</h3>
                                      <p>Tari Kecak</p>
                                  </div>
                              </div>
                              <div class="col-md-4 border-left">
                                  <img src="frontend/images/ic_language.png" alt="" class="featured-image">
                                <div class="description">
                                    <h3>Bahasa</h3>
                                    <p>Bahasa Mangkasarak</p>
                                </div>
                            </div><div class="col-md-4 border-left">
                                <img src="frontend/images/ic_foods.png" alt="" class="featured-image">
                                <div class="description">
                                    <h3>Makanan</h3>
                                    <p>Coto Makassar</p>
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4">
                      <div class="card card-details card-right">
                          <h2>Orang yang akan Pergi</h2>
                          <div class="member my-2">
                              <img src="frontend/images/Mask Group 3.png" class="member-img mr-1" alt="">
                              <img src="frontend/images/Mask Group 3.png" class="member-img mr-1" alt="">
                              <img src="frontend/images/Mask Group 3.png" class="member-img mr-1" alt="">
                              <img src="frontend/images/Mask Group 3.png" class="member-img mr-1" alt="">
                              <img src="frontend/images/Group 6.png" class="member-img mr-1" alt="">
                          </div>
                          <hr>
                          <h2>Informasi Perjalanan</h2>
                          <table class="trip-informasi">
                              <tr>
                                  <th width="50%">Date Of Departure</th>
                                  <td width="50%" class="text-right">22-Des-2022</td>
                              </tr>
                              <tr>
                                  <th width="50%">Duration</th>
                                  <td width="50%" class="text-right">5 Hari</td>
                              </tr>
                               <tr>
                                  <th width="50%">Type</th>
                                  <td width="50%" class="text-right">Transfer</td>
                               </tr>
                                 <tr>
                                  <th width="50%">Price List</th>
                                  <td width="50%" class="text-right">Rp. 22 juta</td>
                                 </tr>
                                  
                              
                          </table>
                      </div>
                      <div class="join-container">
                          <a href="" class="btn btn-block btn-join-now mt-3 py-2">
                              Join Now
                          </a>
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