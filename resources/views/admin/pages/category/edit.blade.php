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
            <h3 class="card-title">Category edit</small></h3>
        </div>
        <form action="/category/update/{{$category->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}" placeholder="Category name">
                </div>
                <div class="form-group">
                    <label for="picture">Image</label>
                    <input class="form-control" type="file" value="{{$category->image}}" name="picture" id="picture" accept="image/*" onchange="loadFile(event)">
                    <img src="{{asset('uploads/'.$category->image)}}" width="200px" height="200" alt="not found">
                    <img id="output" width="200px" height="200" alt="New image" />
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection

<script>
    //Upload image show 
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>