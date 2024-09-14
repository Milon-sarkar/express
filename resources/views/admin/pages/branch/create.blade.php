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
    <div class="card" style="border-top: 5px solid #2E91F3">
        <div class="card-header">
            <h3 class="card-title">Branch Manager Create Form</small></h3>
        </div>
        <form action="{{url('branch/store')}}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="manager_name">Branch Manager Name</label>
                    <input type="text" class="form-control" name="manager_name" id="manager_name" placeholder="Branch Manager Name">
                </div>
                <div class="form-group">
                <label for="brance_id">Branch Name</label>
                    <select class="form-control" name="brance_id" id="brance_id">
                        <option value="1">Mirpur</option>
                        <option value="2">Uttara</option>
                        <option value="3">Banani</option>
                        <option value="4">Puran Dhaka</option>                     
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email address">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone number">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                        <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection