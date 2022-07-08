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

                      <h1>Siapa saja yang pergi?</h1>
                      <p>Trip To {{ $transaksi->travel_package->title }}, {{ $transaksi->travel_package->location }}</p>
                      
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
                            @forelse ($transaksi->detail as $row)
                            <tr>
                                <td>
                                    <img src="https://ui-avatars.com/api/?name={{ $row->username }}" alt="" width="40%" class="rounded-circle">
                                </td>
                                <td class="align-middle">
                                   {{ $row->username }}
                                </td>
                                <td class="align-middle">
                                 {{ $row->nationality }}
                                </td>
                                <td class="align-middle">
                                   {{ $row->is_visa ? '30 Hari' : 'N/A' }}
                                </td>
                                <td class="align-middle">
                                   {{ \Carbon\Carbon::create($row->passport) > \Carbon\Carbon::now() ? 'Active' : 'InActive'}}
                                </td>
                                <td class="align-middle">  
                                    <a href="{{ route('checkout.remove', $row->id) }}">
                                        <img src="{{ asset('frontend/images/ic_remove.png') }}" alt="">
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">
                                    No Visitor
                                </td>
                            </tr>
                            @endforelse
                              

                               
                           </tbody>
                       </table>
                   </div>


                   <div class="member mt-3">
                       <h2>Add Member</h2>
                       <form action="{{ route('checkout.create', $transaksi->id) }}" method="post" class="form-inline">
                        @csrf
                           <label for="username" class="sr-only">Name</label>
                           <input name="username" type="text" class="form-control mb-2 mr-sm-2" value="{{ old('username') }}" id="username" placeholder="Username" required>

                           <label for="nationality" class="sr-only">Nationality</label>
                           <input name="nationality" type="text" class="form-control mb-2 mr-sm-2" value="{{ old('nationality') }}" style="width: 80px;" id="nationality" placeholder="nationality" required>

                           <label for="is_visa" class="sr-only">VISA</label>
                          <select name="is_visa" id="is_visa" class="form-control mb-2 mr-sm-2" value="{{ old('is_visa') }}" required>
                            <option value="" selected >VISA</option>
                            <option value="1">30 Hari</option>
                            <option value="0">N/A</option>
                          </select>

                          <label for="inputPassport" class="sr-only">Passport</label>
                          <div class="input-group mb-2 " style="width: 150px;">
                              <input type="text" name="passport" class="form-control datepicker" id="datepicker" placeholder="Passport" value="{{ old('passport') }}" required>
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
                              <td width="50%" class="text-right">{{ $transaksi->detail->count() }}</td>
                          </tr>
                          <tr>
                              <th width="50%">Additional VISA</th>
                              <td width="50%" class="text-right">Rp. {{ $transaksi->additional_visa }}</td>
                          </tr>
                           <tr>
                              <th width="50%">Trip Price</th>
                              <td width="50%" class="text-right">Rp {{ $transaksi->travel_package->price }} / Orang</td>
                           </tr>
                             <tr>
                              <th width="50%">Sub Total</th>
                              <td width="50%" class="text-right">Rp. {{ $transaksi->transactin_total }}</td>
                             </tr>
                             <tr>
                              <th width="50%">Total(+Unique Code)</th>
                              <td width="50%" class="text-right"><span class="harga">Rp. {{ $transaksi->transactin_total . mt_rand(0,99) }}</span></td>
                             </tr>
                              
                          
                      </table>
                      <hr>

                          <h2>Payment Distraction</h2>
                          <p class="payment-instruction">Please complete your payment before to 
                              continue the wonderful trip</p>

                           <div class="bank">
                               <div class="item-bank">
                                   <img src="{{ asset('frontend/images/ic_bank.png') }}" alt="" class="bank-image">
                                   <div class="description">
                                      <h3>PT. ZeroShop</h3>
                                      <p>0881 8829 8800 <br>
                                         Bank Central Asia
                                     </p>
                                   </div>
                                  <div class="clearfix"></div>
                               </div>

                               <div class="item-bank">
                                  <img src="{{ asset('frontend/images/ic_bank.png') }}" alt="" class="bank-image">
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
                      <a href="{{ route('checkout.success', $transaksi->id) }}" class="btn btn-block btn-join-now mt-3 py-2">
                          Saya Sudah Bayar
                      </a>
                  </div>

                  <div class="text-center mt-3">
                        <a href="{{ route('detail', $transaksi->travel_package->slug) }}" class="text-muted">Cancel Booking</a>
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
           format: 'yyyy-mm-dd',
           uiLibrary: 'bootstrap4',
           icons: {
               rightIcon: '<img src="{{ asset('frontend/images/ic_doe.png') }}" />'
           }
       });

 
 
</script>
@endpush