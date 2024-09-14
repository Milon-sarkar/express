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
<div class="container" style="width:80%; margin-top:30px;">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Merchand Update form</h3>
        </div>
        <form action="/adminmerchant/update/{{$merchant->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="form-group">
                    <label for="company_name">Shop Name</label>
                    <input type="text" class="form-control" name="company_name" id="company_name" value="{{$merchant->company_name}}" placeholder="Name of Shop">
                </div>
                <div class="form-group">
                    <label for="name">User Full Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$merchant->name}}" placeholder="User Full Name">
                </div>
                <div class="form-group">
                    <label for="address">Pick up Address</label>
                    <input type="text" class="form-control" name="address" id="address" value="{{$merchant->address}}" placeholder="Enter Your pick up location">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{$merchant->email}}" placeholder="email address">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" value="{{$merchant->phone}}" placeholder="Phone number">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="{{$merchant->password}}" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="Repassword">Re-Password</label>
                    <input type="password" class="form-control" name="Repassword" id="Repassword" value="{{$merchant->password}}" placeholder="Re-Password">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
