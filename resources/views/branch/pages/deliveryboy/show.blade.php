@extends('branch.layouts.app')
@section('body')
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <!-- <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li> -->
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{asset('images/profile.png')}}" alt="/images/profile.png" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{$user->name}}</h4>
                      <p class="text-secondary mb-1">{{$user->phone}}</p>
                      <p class="text-muted font-size-sm">Delivery Boy</p>
                      <button class="btn btn-primary">Active</button>
                      <button class="btn btn-outline-primary">Dcactive</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                  <h5 style="text-align:center; padding-top:5px;">Dalivery boy total statement</h5>
                  <hr>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Total pickup parcel =</h6>
                    <span class="text-secondary">100</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Today Parcel =</h6>
                    <span class="text-secondary">1000</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Total merchant =</h6>
                    <span class="text-secondary">10000</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Work Day =</h6>
                    <span class="text-secondary">1000</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">aaaaa =</h6>
                    <span class="text-secondary">100</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$user->name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$user->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$user->phone}}
                    </div>
                  </div>
                  <hr>
                  <!-- <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (320) 380-4539
                    </div>
                  </div> -->
                  <!-- <hr> -->
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$user->address}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a> -->
                    </div>
                  </div>
                </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Pickup Boy selected Merchant</h6>
                      <small>## Chackup Merchant to collect parcel</small>
                        <br>
                        <br>

                        <form action="{{Route('branchdeliveryboy.store')}}" method="POST" enctype='multipart/form-data'>
                          @csrf
                            <input type="text" hidden name='pickupboy_id' value='{{$user->id}}'>
                            @foreach($merchants as $merchant)
                            <input type="checkbox" name="merchant_id[]" value="{{$merchant->id}}"/> {{$merchant->name}}
                            @endforeach
                            <br>
                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Pickup Boy</h6>
                      <small>## Pickup Boy pickup merchant list</small>
                      <ol>
                        @foreach($asinmerchants as $asinmerchant)
                          <li> {{$asinmerchant->merchant_id}}</li>                       
                        @endforeach
                      </ol>
                    </div>
                  </div>
                </div>
              </div>



            </div>
          </div>

        </div>
    </div>

@endsection