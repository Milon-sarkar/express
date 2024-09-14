<style>

.col_1{
    width:10%;
}

</style>
@extends('merchant.layouts.app')
@section('body')
@if($message = Session::get("success"))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif
<div>
    <table  class="table" >
        <thead>
            <tr role="row">
                <th class="sorting_asc" style="width: 5%;">SI</th>                
                <th class="sorting" style="width: 10%;" >Customar Name</th>
                <th class="sorting" style="width: 10%;" >Phone</th>        
                <th class="sorting" style="width: 10%;" >Address</th>        
                <th class="sorting" style="width: 5%;" >Invoice no</th>        
                <th class="sorting" style="width: 5%;" >Catagory name</th>        
                <th class="sorting" style="width: 5%;" >Delivery area</th>        
                <th class="sorting" style="width: 5%;" >Product type</th>        
                <th class="sorting" style="width: 5%;" >Cash Amount</th>        
                <th class="sorting" style="width: 5%;" >Payamount</th>        
                <th class="sorting" style="width: 5%;" >Sell Price</th>        
                <th class="sorting" style="width: 5%;" >Status</th>        
                <th class="no-content sorting" style="width: 25%;">Actions</th>
                
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
                        
                        @if($item->status == 1)            
                            <a class="btn btn-info " href="{{Route('parcel.edit',[$item->id])}}"><i class="fas fa-user-edit"></i></a>                           
                            @else
                            <a class="btn btn-info disabled" href="#" ><i class="fas fa-user-edit"></i></a>                            
                        @endif




                        @if($item->status == 1)
                            <form onsubmit="return confirm('Are you sure?')" action="{{Route('parcel.destroy',[$item->id])}}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('delete')          
                                <button type="submit" class="btn btn-danger"><i class='far fa-trash-alt'></i></button>
                            </form>
                            @else
                            <button type="submit" class="btn btn-danger disabled"><i class='far fa-trash-alt'></i></button>
                        @endif
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$parcels->links()}} 
</div>
@endsection