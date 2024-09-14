<style>

.col_1{
    width:10%;
}

.topheadr{
    width:100%;
    height:50px;
    padding:10px;
    border-bottom:5px solid red;

}

</style>

@extends('branch.layouts.app')
@section('body')



@if($message = Session::get("success"))
<div class="alert alert-success">
<p>{{$message}}</p>
</div>
@endif
<div >
    <div class="topheadr">
        All Merchant Parcel table 
    </div>
    <table  class="table table-striped dataTable" >
        <thead>
            <tr role="row">
                <th class="sorting_asc" style="width: 5%;" tabindex="0" aria-controls="zero-config" rowspan="1"  aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 107px;">SI</th>
                
                <th class="sorting" style="width: 10%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 75px;">Customar Name</th>
                <th class="sorting" style="width: 10%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 75px;">Phone</th>        
                <th class="sorting" style="width: 10%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 75px;">Address</th>        
                <th class="sorting" style="width: 5%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 75px;">Invoice no</th>        
                <th class="sorting" style="width: 5%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 75px;">Catagory name</th>        
                <th class="sorting" style="width: 5%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 75px;">Delivery area</th>        
                <th class="sorting" style="width: 5%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 75px;">Product type</th>        
                <th class="sorting" style="width: 5%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 75px;">Cash Amount</th>        
                <th class="sorting" style="width: 5%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 75px;">Payamount</th>        
                <th class="sorting" style="width: 5%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 75px;">Sell Price</th>        
                <th class="sorting" style="width: 5%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 75px;">Status</th>        
                <th class="no-content sorting" style="width: 25%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 56px;">Actions</th>
                
            </tr>
        </thead>
        <tbody> 
            @foreach($parcels as $k => $item)     
                <tr role="row">
                <td class="sorting_1">{{ ++$k}}</td>
                    <td>{{$item->cus_name}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->invoice_no}}</td>
                    <td>{{$item->catagory_id}}</td>
                    <td>{{$item->delivery_area}}</td>
                    <td>{{$item->Product_type}}</td>
                    <td>{{$item->cash_amount}}</td>
                    <td>{{$item->payamount}}</td>
                    <td>{{$item->sell_amount}}</td>
                    <td>
                    <select class="__status">
                        <option value="1" @if ($item->status == 1) selected @endif>pick Request</option>
                        <option value="2" @if ($item->status == 2) selected @endif>Pickup</option>
                        <option value="3" @if ($item->status == 3) selected @endif>Hub Receive</option>
                        <option value="4" @if ($item->status == 4) selected @endif>Processing</option>
                        <option value="5" @if ($item->status == 5) selected @endif>Shipping</option>
                        <option value="6" @if ($item->status == 6) selected @endif>Delivery Success</option>
                        <option value="7" @if ($item->status == 7) selected @endif>Deny</option>
                    </select>
                    </td>
                    <!-- <td><img src="uploads/{{$item->picture}}" height="50" weight="20" alt=""></td> -->
                             
                    <td style="display: inline-block;">
                        <a class="btn btn-info" href="{{Route('parcel.show',[$item->id])}}"><i class="fas fa-file-invoice"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$parcels->links()}} 
</div>



@endsection 