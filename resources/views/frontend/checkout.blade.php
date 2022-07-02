@extends('frontend.master.checkout')

@section('title')
    Checkout
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('frontend/libraries/combined/css/gijgo.min.css') }}">
@endpush
@section('content')
    
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
                            <li class="breadcrumb-item">
                              Details
                          </li>
                          <li class="breadcrumb-item active">
                              Checkout
                          </li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
              <div class="col-lg-8 pl-lg-3">
                  <div class="card card-details">
                      <h1>Siapa saja yang pergi?</h1>
                      <p>Trip To Tabaria Indonesia</p>
                      
                   <div class="attendance">
                       <table class="table table-responsive-sm text-center">
                           <thead>
                               <tr>
                                   <td>Picture</td>
                                   <td>Name</td>
                                   <td>Daerah</td>
                                   <td>VISA</td>
                                   <td>Passport</td>
                                   <td></td>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>
                                       <img src="{{ asset('frontend/images/user_pic.jpg') }}" alt="" width="40%">
                                   </td>
                                   <td class="align-middle">
                                      Hadiid Fajar
                                   </td>
                                   <td class="align-middle">
                                      Makassar
                                   </td>
                                   <td class="align-middle">
                                      N/A
                                   </td>
                                   <td class="align-middle">
                                      Active
                                   </td>
                                   <td class="align-middle">  
                                       <a href="">
                                           <img src="frontend/images/ic_remove.png" alt="">
                                       </a>
                                   </td>
                               </tr>
                               <tr>
                                  <td>
                                      <img src="frontend/images/user_pic.jpg" alt="" width="40%">
                                  </td>
                                  <td class="align-middle">
                                     Hadiid Fajar
                                  </td>
                                  <td class="align-middle">
                                     Makassar
                                  </td>
                                  <td class="align-middle">
                                     N/A
                                  </td>
                                  <td class="align-middle">
                                     Active
                                  </td>
                                  <td class="align-middle">  
                                      <a href="">
                                          <img src="frontend/images/ic_remove.png" alt="">
                                      </a>
                                  </td>
                              </tr>
                               
                           </tbody>
                       </table>
                   </div>

                   <div class="member mt-3">
                       <h2>Add Member</h2>
                       <form action="" class="form-inline">
                           <label for="inputUsername" class="sr-only">Name</label>
                           <input name="inputUsername" type="text" class="form-control mb-2 mr-sm-2" id="inputUsername" placeholder="Username">

                           <label for="inputVisa" class="sr-only">VISA</label>
                          <select name="inputVisa" id="inputVisa" class="form-control mb-2 mr-sm-2">
                            <option value="VISA" selected >VISA</option>
                            <option value="30 Days">30 Hari</option>
                            <option value="N/A">N/A</option>
                          </select>

                          <label for="inputPassport" class="sr-only">Passport</label>
                          <div class="input-group mb-2 ">
                              <input type="text" class="form-control datepicker" id="datepicker" placeholder="Passport">
                          </div>

                          <button type="submit" class="btn btn-add-now mb-2 px-4">
                               Add Now
                          </button>
                       </form>
                       <h3 class="mt-2 mb-0">Note</h3>
                       <p class="disct mb-0">
                            Kamu hanya dapat memili teman kamu
                       </p>
                   </div>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="card card-details card-right">
                      <h2>Checkout Informasi</h2>
                    
                   
                     
                      <table class="checkout-informasi">
                          <tr>
                              <th width="50%">Members</th>
                              <td width="50%" class="text-right">2 Orang</td>
                          </tr>
                          <tr>
                              <th width="50%">Additional VISA</th>
                              <td width="50%" class="text-right">Rp. 150.000</td>
                          </tr>
                           <tr>
                              <th width="50%">Trip Price</th>
                              <td width="50%" class="text-right">Rp 50 juta/Person</td>
                           </tr>
                             <tr>
                              <th width="50%">Sub Total</th>
                              <td width="50%" class="text-right">Rp. 22 juta</td>
                             </tr>
                             <tr>
                              <th width="50%">Total(+Unique Code)</th>
                              <td width="50%" class="text-right"><span class="harga"> Rp. 21 juta</span></td>
                             </tr>
                              
                          
                      </table>
                      <hr>

                          <h2>Payment Distraction</h2>
                          <p class="payment-instruction">Please complete your payment before to 
                              continue the wonderful trip</p>

                           <div class="bank">
                               <div class="item-bank">
                                   <img src="frontend/images/ic_bank.png" alt="" class="bank-image">
                                   <div class="description">
                                      <h3>PT. ZeroShop</h3>
                                      <p>0881 8829 8800 <br>
                                         Bank Central Asia
                                     </p>
                                   </div>
                                  <div class="clearfix"></div>
                               </div>

                               <div class="item-bank">
                                  <img src="frontend/images/ic_bank.png" alt="" class="bank-image">
                                  <div class="description">
                                     <h3>PT. ZeroShop</h3>
                                     <p>0881 8829 8800 <br>
                                        Bank Central Asia
                                    </p>
                                  </div>
                                 
                              </div>
                              
                           </div>   

                  </div>
                  <div class="join-container">
                      <a href="{{ route('checkout.success') }}" class="btn btn-block btn-join-now mt-3 py-2">
                          Saya Sudah Bayar
                      </a>
                  </div>

                  <div class="text-center mt-3">
                        <a href="{{ route('detail') }}" class="text-muted">Cancel Booking</a>
                  </div>
              </div>
          </div>

        </div>

   
    </section>
  </main>

@endsection

@push('scripts')
<script src="{{ asset('frontend/libraries/combined/js/gijgo.min.js') }}"></script>

<script>
       $('#datepicker').datepicker({
           uiLibrary: 'bootstrap4',
           icons: {
               rightIcon: '<img src="frontend/images/ic_doe.png" />'
           }
       });

 
 
</script>
@endpush