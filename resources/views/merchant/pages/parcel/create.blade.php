@extends('merchant.layouts.app')
@section('body')
<div class="card card-primary" style="width:95%; margin:0 auto; margin-top:10px; background-color:#EDE4E3;">
    <div class="card-header">
        <h3 class="card-title">Create a new parcel</h3>
    </div>
    <form action="{{Route('parcel.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row" style="padding-left:10px;">
            <div class="col-12">
                <h4>
                <!-- <i class="fas fa-globe"></i>  -->
                <span style="color:red;">StkExpress.</span>
                <!-- <small class="float-right">Date: 2/10/2014</small> -->
                </h4>
            </div>
                <!-- /.col -->
        </div>
                <!-- info row -->
        <div class="row invoice-info" style="padding-left:10px;padding-right:20px;">
            <div class="col-sm-4 invoice-col">
                From
                <address>
                <strong>Marchant Address</strong><br>

                @foreach($merchant as $merchant)
                {{$merchant->company_name}}<br>
                {{$merchant->name}}<br>
                {{$merchant->address}}<br>
                {{$merchant->phone}}<br>
                @endforeach
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
            
                <div class="delivery-charge">
                    <div class="header">
                        <div class="caption">
                            <p class="title css-1y8lftn"><strong>Delivery Charge Details</strong></p>
                        </div>
                    </div>
                    <div class=" css-11rzb4j">
                        <hr>
                    </div>
                    <div class="body">
                        <div class="amount-info">
                            <span >Cash Collection.</span>
                            <small class="float-right"> <span id="pricee" >0</span> Tk</small>
                        </div>
                        <hr>
                        <div class="amount-info">
                            <span >Delivery Charge</span>
                            <small class="float-right"><span id="delivery" >0</span> Tk</small>
                            
                        </div>
                        <hr>
                        
                        <div class="amount-info">
                            <span >COD Charge</span>
                            <small class="float-right"><span id="codout" >0</span> %</small>
                        </div>
                        <br>
                        <div class="border border-dark"></div>                       
                        <div class="amount-info">
                            <span ><strong>Total Payable Amount</strong></span>
                            <small class="float-right"><span id="total" >0</span> Tk</small>
                            <input type="text" id="payamount" name="payamount" hidden>
                        </div>
                    </div>
                </div>
            </div>    <!-- /.col -->
        </div>
        <hr><br>
        <div class="card-body row">
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" class="form-control" name="cus_name" placeholder="Customar Name">
                </div>
                <div class="form-group">                
                    <input type="text" class="form-control" name="phone" placeholder="customar phone number">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="address" placeholder="customar full address" ></textarea>
                </div>
                <div class="form-group">
                <input type="text" class="form-control" name="invoice_no" placeholder="invoice no">
                </div>
                <div class="form-group">
                    <select class="form-control" name="product_weight" id="weight_id">
                        @foreach($weights as $weight)
                            <option amount="{{$weight->amount}}" value="{{$weight->id}}">{{$weight->weight}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" name="catagory_id">
                        <option readonly>Select product category</option>
                        @foreach($categorys as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <select class="form-control" name="delivery_area" id="zone_id">
                    <option readonly>Select Location area</option>
                        @foreach($zones as $zone)
                        <option cod="{{$zone->cod}}" value="{{$zone->id}}">{{$zone->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group" class="form-control">
                    <label ><strong> Chack you product type</strong></label><br>
                    <input name="Product_type"  type="radio" value="Fraglie" > Fraglie <br>
                    <input name="Product_type" type="radio" value="Liquid" > Liquid
                </div>
                <div class="form-group">                
                    <input type="text" class="form-control" name="cash_amount" id="price" placeholder="Cash collection amount">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="sell_amount" placeholder="Product sell price">
                </div>
                <div class="form-group">
                <textarea class="form-control" placeholder="Note !" ></textarea>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection

<script>
   

   window.addEventListener('load',function(){
        
        let weight_id=document.getElementById('weight_id');
        let zone_id=document.getElementById('zone_id');
        let price=document.getElementById('price');
        let weight=document.getElementById('sell_price');

        

         //console.log(weight_id)
         
        
        weight_id.addEventListener('change', function(){
            calc()
        });
        price.addEventListener('keyup',function(){
            calc()
        });
        zone_id.addEventListener('change',function(){
            calc()
        });

        function calc(){
            let amount=weight_id.options[weight_id.selectedIndex].getAttribute('amount');
            let cod=zone_id.options[zone_id.selectedIndex].getAttribute('cod');
            //console.log(cod);
            
             pricee=price.value||0;

             let cod_charg=(parseFloat(pricee)*parseFloat(cod))/100;

             document.getElementById("pricee").innerHTML = pricee;
             document.getElementById("delivery").innerHTML = amount;
             document.getElementById("codout").innerHTML = cod;
             
             
            //console.log(pricee);
            let total=(parseFloat(pricee)-parseFloat(amount))-parseFloat(cod_charg);

             document.getElementById("payamount").value= total;
            // console.log(totalin)

             document.getElementById("total").innerHTML = total;
           
        }
    });
    
</script>