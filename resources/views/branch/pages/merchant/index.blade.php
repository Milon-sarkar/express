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

<div class="widget-content widget-content-area br-6">
    <div class="topheadr">
        Merchant Management table 
    </div>
    <table id="zero-config" class="table table-striped dataTable" style="width: 100%;" role="grid" aria-describedby="zero-config_info">
        <thead>
            <tr role="row">
                <th class="sorting_asc" style="width: 5%;">SI</th>
                <th class="sorting" style="width: 10%;">Merchant Name</th>
                <th class="sorting" style="width: 15%;">Email</th>
                <th class="sorting" style="width: 15%;">Phone</th>
                <th class="sorting" style="width: 10%;">Company Name</th>         
                <th class="sorting" style="width: 15%;">Address</th>                       
                <th class="sorting" style="width: 10%;">Image</th>         
                <th class="no-content sorting" style="width: 20%;">Actions</th>
            </tr>
        </thead>
        <tbody> 
            @foreach($merchants as $k => $merchant)     
                <tr role="row">
                    <td class="sorting_1">{{ ++$k}}</td>
                    <td>{{$merchant->name}}</td>
                    <td>{{$merchant->email}}</td>
                    <td>{{$merchant->phone}}</td>
                    <td>{{$merchant->company_name}}</td>
                    <td>{{$merchant->address}}</td>                                  
                    <td>{{$merchant->image}}</td>                   
                    <td style="display: inline-block;">
                        <a class="btn btn-primary" href="{{Route('branchmerchant.show',[$merchant->id])}}"><i class="fas fa-user"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$merchants->links()}} 
</div>
@endsection