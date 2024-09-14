<style>
.usercreate{
    width:400px;
    margin-left:20px;
    margin-top:20px;
    border:1px solid gray;
    padding: 5px;
    color: white;
    border-radius: 5px;
}
.userhead{
    padding-left: 50px;
    padding-top:10px;
    border-bottom:2px;
    background-color:green;
    color: white;
}

.userform{
    width:500px;
}
</style>
@extends('admin/home')
@section('body')

@if($errors->any())
<div class="alert alert-danger">
<strong>Whoops</strong>There were some problems with you input <br><br>
<ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
</div>
@endif
<div class="container" style="width:50%; margin-top:30px;">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"> Zone Create form </h3>
        </div>
        <form action="{{url('zones/store')}}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Zone Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Category name">
                </div>
                <div class="form-group">
                    <label for="cod">COD Charge 1%</label>
                    <input type="text" class="form-control" name="cod" id="cod" placeholder="COD charge %">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
