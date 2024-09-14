<style>
    body {
    background-color: #eee
}

.fs-12 {
    font-size: 12px
}

.fs-15 {
    font-size: 15px
}

.name {
    margin-bottom: -2px
}

.product-details {
    margin-top: 13px
}
</style>
@extends('branch.layouts.app')
@section('body')

<div class="container" style="padding-top:50px;">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="p-3 bg-white rounded">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-uppercase"><img src="{{ asset('uploads/'.$general_setting->logo) }}" alt="AdminLTE Logo"></h1>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Customar Name : </span><span class="ml-1">{{$parcel->cus_name}}</span></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Phone : </span><span class="ml-1">{{$parcel->phone}}</span></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Address : </span><span class="ml-1">{{$parcel->address}}</span></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Order ID:</span><span class="ml-1">#{{$parcel->invoice_no}}</span></div>
                    </div>
                    <div class="col-md-6 text-right mt-3">
                        @foreach($merchant as $merchant)
                        <h4 class="text-danger mb-0"></h4><span ><strong>{{$merchant->company_name}}</strong></span>
                        <h4 class="text-danger mb-0"></h4><span>{{$merchant->name}}</span>
                        <h4 class="text-danger mb-0"></h4><span>{{$merchant->phone}}</span>
                        @endforeach
                    </div>
                </div>
                <div class="mt-3">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product Category</th>
                                   
                                    <th>Sell Price</th>
                                    <th>Due Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach($category as $category)
                                    <td>{{$category->name}}</td>
                                    @endforeach
                                    
                                    <td>{{$parcel->sell_amount}}</td>
                                    <td>{{$parcel->cash_amount}}</td>
                                </tr>
                                
                                <tr>
                                    <td></td>
                                    
                                    <td>Total</td>
                                    <td>{{$parcel->cash_amount}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mt-5 amount row">
                    <div class="d-flex justify-content-center col-md-6">
                        <img src="{{asset('uploads/AXdWCWr.gif')}}" width="250" height="100">
                    </div>
                </div>
                <div class="text-right mb-3"><button class="btn btn-danger btn-sm mr-5" onclick="window.print()" type="button">Print</button></div>
            </div>
        </div>
    </div>
</div>

@endsection