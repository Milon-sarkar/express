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
                <th class="sorting" style="width: 15%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 162px;">Product name</th>
                <th class="sorting" style="width: 20%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 75px;">Catagory Name</th>
                <th class="sorting" style="width: 35%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 75px;">image</th>        
                <th class="no-content sorting" style="width: 20%;" tabindex="0" aria-controls="zero-config" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 56px;">Actions</th>
            </tr>
        </thead>
        <tbody> 
            @foreach($products as $k => $product)     
                <tr role="row">
                    <td class="sorting_1">{{ ++$k}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->category_id}}</td>
                    <td><img src="uploads/{{$product->picture}}" height="50" weight="20" alt=""></td>
                             
                    <td style="display: inline-block;">
                        <!-- <a class="btn btn-primary" href="/products/{{$product->id}}"><i class="fas fa-user"></i></a> -->
                        <a class="btn btn-info" href="/products/{{$product->id}}/edit"><i class="fas fa-user-edit"></i></a>
                        <form onsubmit="return confirm('Are you sure?')" action="/products/delete/{{$product->id}}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('delete')          
                            <button type="submit" class="btn btn-danger"><i class='far fa-trash-alt'></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$products->links()}} 
</div>
@endsection