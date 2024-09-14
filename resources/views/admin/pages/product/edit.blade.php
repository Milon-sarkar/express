<style>
    .productform{
        width:80%;
        margin:0 auto;
        margin-top:20px;
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
<div class="card card-primary productform">
    <div class="card-header">
        <h3 class="card-title">Product Upload</h3>
    </div>
    <form action="/products/update/{{$product->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}" placeholder="Enter Product name">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                        <label for="category_id">Category Name</label>
                        <select class="form-control" name='category_id' id="category_id">
                            @foreach($categorys as $category)
                            <option {{ $product->category_id==$category->id ? 'selected' : ''}} value="{{ $category->id }}" >{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="picture">Image</label>
                <input class="form-control" type="file" value="{{$category->picture}}" name="picture" id="picture" accept="image/*" onchange="loadFile(event)">
                <img id="output" width="200px" height="200" />
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection

<script>
    //Upload image show 
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>