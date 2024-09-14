<style>
    .productform{
        width:50%;
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
        <h3 class="card-title">Merchant Payment</h3>
    </div>
    <form action="{{url('payment/store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <label for="merchant_id">Merchant Name</label>
                        <select class="form-control" name='merchant_id' id="merchant_id">   
                            @foreach($merchants as $merchant)                         
                            <option value="{{$merchant->id}}">{{$merchant->name}}</option> 
                            @endforeach                         
                        </select>                        
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <label for="transaction_id">Transaction Id</label>
                        <input type="text" class="form-control" id="transaction_id" name="transaction_id" placeholder="Enter transaction id">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <label for="amount">Payment Amount</label>
                        <input type="text" class="form-control" id="amount" name="amount" placeholder="Net Amount">
                    </div>
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