<style>

.col_1{
    width:10%;
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
    <table  class="table" >
        <thead>
            <tr role="row">
                <th style="width: 5%;">SI</th>                
                <th style="width: 30%;"> Name</th>
                <th style="width: 30%;">Phone</th>        
                <th style="width: 30%;">Email Address</th> 
                <th style="width: 5%;">Merchant Select</th>
            </tr>
        </thead>
        <tbody> 
            @foreach($deliveryboys as $k => $item)     
                <tr role="row">
                    <td class="sorting_1">{{ ++$k}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->email}}</td>

                    <!-- <td>
                    <select class="__status">
                        <option value="1" @if ($item->status == 1) selected @endif>pick Request</option>
                        <option value="2" @if ($item->status == 2) selected @endif>Pickup</option>
                        <option value="3" @if ($item->status == 3) selected @endif>Hub Receive</option>
                        <option value="4" @if ($item->status == 4) selected @endif>Processing</option>
                        <option value="5" @if ($item->status == 5) selected @endif>Shipping</option>
                        <option value="6" @if ($item->status == 6) selected @endif>Delivery Success</option>
                        <option value="7" @if ($item->status == 7) selected @endif>Deny</option>
                    </select>
                    </td> -->
                    <!-- <td><img src="uploads/{{$item->picture}}" height="50" weight="20" alt=""></td> -->
                             
                    <td style="display: inline-block;">
                        <a class="btn btn-info" href="{{Route('branchdeliveryboy.show',[$item->id])}}"><i class="fas fa-file-invoice"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$deliveryboys->links()}} 
</div>



@endsection 