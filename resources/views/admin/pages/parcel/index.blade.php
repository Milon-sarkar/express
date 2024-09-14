<style>

.col_1{
    width:10%;
}

</style>
@extends('admin/home')
@section('body')
@if($message = Session::get("success"))
<div class="alert alert-success">
<p>{{$message}}</p>
</div>
@endif

<div class="widget-content widget-content-area br-6">
    <table id="zero-config" class="table table-striped dataTable" style="width: 100%;" role="grid" aria-describedby="zero-config_info">
        <thead>
            <tr role="row">
                <th class="sorting_asc" style="width: 5%;" tabindex="0" aria-controls="zero-config" rowspan="1"  aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 107px;">SI</th>
                <th class="sorting" style="width: 5%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 162px;">Merchant Name</th>
                <th class="sorting" style="width: 10%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 75px;">Customar Name</th>
                <th class="sorting" style="width: 10%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 75px;">Phone</th>        
                <th class="sorting" style="width: 10%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 75px;">Address</th>        
                <th class="sorting" style="width: 5%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 75px;">Invoice no</th>        
                <th class="sorting" style="width: 5%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 75px;">Catagory name</th>        
                <th class="sorting" style="width: 5%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 75px;">Delivery area</th>        
                <th class="sorting" style="width: 5%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 75px;">Product type</th>        
                <th class="sorting" style="width: 5%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 75px;">Cash Amount</th>        
                <th class="sorting" style="width: 5%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 75px;">Sell Price</th>        
                <th class="sorting" style="width: 5%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 75px;">Status</th>        
                <th class="no-content sorting" style="width: 25%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 56px;">Actions</th>
            </tr>
        </thead>
        <tbody> 
            @foreach($parcels as $k => $item)     
                <tr role="row">
                    <td class="sorting_1">{{ ++$k}}</td>
                    <td>{{$item->merchant_id}}</td>
                    <td>{{$item->cus_name}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->invoice_no}}</td>
                    <td>{{$item->catagory_id}}</td>
                    <td>{{$item->delivery_area}}</td>
                    <td>{{$item->Product_type}}</td>
                    <td>{{$item->cash_amount}}</td>
                    <td>{{$item->sell_amount}}</td>
                    <td>
                    <select class="__status" action="{{ route('parcel.status.change', $item->id) }}">
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
                        <a class="btn btn-primary" href="/adminparcel/{{$item->id}}"><i class="fas fa-folder"></i></a>
                        <!-- <a class="btn btn-info" href="/products/{{$item->id}}/edit"><i class="fas fa-user-edit"></i></a> -->
                        <form onsubmit="return confirm('Are you sure?')" action="/products/delete/{{$item->id}}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('delete')          
                            <button type="submit" class="btn btn-danger"><i class='far fa-trash-alt'></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$parcels->links()}} 
</div>


<script>
    $(document).ready(function() {

        $('.__status').on('change', function(e) {
            let status = $(this).val();
            let action = $(this).attr('action');

            //console.log(status);
            
            if (confirm('are your sure?')) {
                $.ajax({
                    url: action,
                    method: "GET",
                    data: {
                        status
                    },
                    success: function(resp) {
                        console.log(resp)
                    },
                    //error function
                    error: function(e) {
                        alert("some thing want wrong");
                    }
                });
            }
        })
    })
</script>
@endsection