<style>
    .productform{
        width:80%;
        margin:0 auto;
        margin-top:20px;
    }
</style>
@extends('admin/home')
@section('body')
<div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> <span style="color:red;">StkExpress.</span>
                    <small class="float-right">Date: 2/10/2014</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>Marchant Address</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (804) 123-5432<br>
                    Email: info@almasaeedstudio.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>Customar Address</strong><br>
                    {{$parcel->cus_name}}<br>
                    {{$parcel->phone}}<br>
                    {{$parcel->address}}<br>
                    {{$parcel->delivery_area}}<br>
                
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice #{{$parcel->invoice_no}}</b><br>
                  <br>
                  <b>Order ID:</b> 4F3S8J<br>
                  <b>Payment Due:</b> 2/22/2014<br>
                  <b>Account:</b> 968-34567
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Qty</th>
                      <th>Product Name</th>
                      <th>Product Price</th>
                      <th>Advance pay</th>
                      <th>Due amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>{{$parcel->sell_amount}}</td>
                      <td>{{$parcel->cash_amount}}</td>
                      <td>100</td>
                      <td>880</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>clock</td>
                      <td>980</td>
                      <td>100</td>
                      <td>880</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>clock</td>
                      <td>980</td>
                      <td>100</td>
                      <td>880</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>clock</td>
                      <td>980</td>
                      <td>100</td>
                      <td>880</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <img src="{{asset('asset/dist/img/credit/visa.png')}}" alt="Visa">
                  <img src="{{asset('asset/dist/img/credit/mastercard.png')}}" alt="Mastercard">
                  <img src="{{asset('asset/dist/img/credit/american-express.png')}}" alt="American Express">
                  <img src="{{asset('asset/dist/img/credit/paypal2.png')}}" alt="Paypal">

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    stkexpress contant
                    
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Amount Due 2/22/2014</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tbody><tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>$250.30</td>
                      </tr>
                      <tr>
                        <th>Tax (9.3%)</th>
                        <td>$10.34</td>
                      </tr>
                      <tr>
                        <th>Shipping:</th>
                        <td>$5.80</td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td>$265.24</td>
                      </tr>
                    </tbody></table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.html" onclick="window.print()"  class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div>
            </div>
@endsection

<script>
    //Upload image show 
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>