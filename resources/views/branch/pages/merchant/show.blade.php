<style>
    .tbhead{
        height: 50px;
        padding:10px;
        border-bottom:5px solid red;
    }
</style>
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
                    <h4>{{$merchant->company_name}}</h4>
                      <h4>Name : {{$merchant->name}}</h4>
                      
                      <p class="text-muted font-size-sm">Phone : {{$merchant->phone}}</p>
                      <p class="text-secondary mb-1">Email : {{$merchant->email}}</p>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                    <div class="tbhead">
                        Merchant Name : <strong>{{$merchant->name}}</strong>  All Payment Statement
                    </div>
                <div class="card-body">
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Merchant Name</th>
                                <th>Referance id</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($payments as $k => $payment)
                            <tr>
                                <td>{{++$k}}</td>
                                <td>{{$payment->created_at}}</td>
                                <td>{{$payment->transaction_id}}</td>
                                <td>{{$payment->amount}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$payments->links()}}  
                </div>
              </div>
            </div>
        </div>
        <div class="row gutters-sm">
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="tbhead">
                        Merchant Name : <strong>{{$merchant->name}}</strong>  All Parcel
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>cus_name</th>
                                    <th>phone</th>
                                    <th>address</th>
                                    <th>invoice_no</th>
                                    <th>Product_type</th>
                                    <th>payamount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($parcels as $k => $parcel)
                                <tr>
                                    <td>{{++$k}}</td>
                                    <td>{{$parcel->cus_name}}</td>
                                    <td>{{$parcel->phone}}</td>
                                    <td>{{$parcel->address}}</td>
                                    <td>{{$parcel->invoice_no}}</td>
                                    <td>{{$parcel->Product_type}}</td>
                                    <td>{{$parcel->payamount}}</td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table> 
                        {{$parcels->links()}}  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection