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
@extends('merchant.layouts.app')
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
                    <div class="d-flex justify-content-center col-md-6 col-lg-12">
                            {!!$parcel->barcode!!}<br>
                        <h3>{{$parcel->barcode_number}}</h3>
                    </div>
                </div>
                <div class="text-right mb-3"><button class="btn btn-danger btn-sm mr-5" onclick="window.print()" type="button">Print</button></div>
            </div>
        </div>
    </div>
</div>




<!-- <div class="container mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            <div class="receipt bg-white p-3 rounded"><img src="{{ asset('uploads/'.$general_setting->logo) }}" width="120">
                <h4 class="mt-2 mb-3">Your order is confirmed!</h4>
                <h6 class="name">Hello John,</h6><span class="fs-12 text-black-50">your order has been confirmed and will be shipped in two days</span>
                <hr>
                <div class="d-flex flex-row justify-content-between align-items-center order-details">
                    <div><span class="d-block fs-12">Order date</span><span class="font-weight-bold">12 March 2020</span></div>
                    <div><span class="d-block fs-12">Order number</span><span class="font-weight-bold">OD44434324</span></div>
                    <div><span class="d-block fs-12">Payment method</span><span class="font-weight-bold">Credit card</span><img class="ml-1 mb-1" src="https://i.imgur.com/ZZr3Yqj.png" width="20"></div>
                    <div><span class="d-block fs-12">Shipping Address</span><span class="font-weight-bold text-success">New Delhi</span></div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center product-details">
                    <div class="d-flex flex-row product-name-image"><img class="rounded" src="https://i.imgur.com/GsFeDLn.jpg" width="80">
                        <div class="d-flex flex-column justify-content-between ml-2">
                            <div><span class="d-block font-weight-bold p-name">Ralco formal shirts for men</span><span class="fs-12">Clothes</span></div><span class="fs-12">Qty: 1pcs</span>
                        </div>
                    </div>
                    <div class="product-price">
                        <h5>$70</h5>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center product-details">
                    <div class="d-flex flex-row product-name-image"><img class="rounded" src="https://i.imgur.com/b7Ve3fJ.jpg" width="80">
                        <div class="d-flex flex-column justify-content-between ml-2">
                            <div><span class="d-block font-weight-bold p-name">Ralco formal Belt for men</span><span class="fs-12">Accessories</span></div><span class="fs-12">Qty: 1pcs</span>
                        </div>
                    </div>
                    <div class="product-price">
                        <h6>$50</h6>
                    </div>
                </div>
                <div class="mt-5 amount row">
                    <div class="d-flex justify-content-center col-md-6"><img src="https://i.imgur.com/AXdWCWr.gif" width="250" height="100"></div>
                    <div class="col-md-6">
                        <div class="billing">
                            <div class="d-flex justify-content-between"><span>Subtotal</span><span class="font-weight-bold">$120</span></div>
                            <div class="d-flex justify-content-between mt-2"><span>Shipping fee</span><span class="font-weight-bold">$15</span></div>
                            <div class="d-flex justify-content-between mt-2"><span>Tax</span><span class="font-weight-bold">$5</span></div>
                            <div class="d-flex justify-content-between mt-2"><span class="text-success">Discount</span><span class="font-weight-bold text-success">$25</span></div>
                            <hr>
                            <div class="d-flex justify-content-between mt-1"><span class="font-weight-bold">Total</span><span class="font-weight-bold text-success">$165</span></div>
                        </div>
                    </div>
                </div><span class="d-block">Expected delivery date</span><span class="font-weight-bold text-success">12 March 2020</span><span class="d-block mt-3 text-black-50 fs-15">We will be sending a shipping confirmation email when the item is shipped!</span>
                <hr>
                <div class="d-flex justify-content-between align-items-center footer">
                    <div class="thanks"><span class="d-block font-weight-bold">Thanks for shopping</span><span>Amazon team</span></div>
                    <div class="d-flex flex-column justify-content-end align-items-end"><span class="d-block font-weight-bold">Need Help?</span><span>Call - 974493933</span></div>
                </div>
            </div>
        </div>
    </div>
</div> -->


@endsection