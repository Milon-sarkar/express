
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

<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <h3>To</h3>
            <h3>stkexpress</h3>
            <p>Give service earning your own money!</p>
            <!-- <input type="submit" name="" value="Login"/><br/> -->
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <!-- <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">deliveryboy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pickup Boy</a>
                </li> -->
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Apply as a Delivery Boy</h3>
                    <form action="{{url('deliveryboy/stores')}}" method="post">
                        @csrf
                        <div class="row register-form">
                            <div class="col-md-6">
                                <label for="">Basic Information</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="User Name *" required/>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email *" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone *" required/>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder=" Password *" required/>
                                </div>
                                <label for="">Personal Information</label>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control" name="f_name" placeholder="Father name *" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="m_name" placeholder="Mother Name *"  required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address" placeholder="Address *" required/>
                                </div>
                                
                                <!-- <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="male" checked>
                                            <span> Male </span> 
                                        </label>
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="female">
                                            <span>Female </span> 
                                        </label>
                                    </div>
                                </div> -->
                            </div>
                            <div class="col-md-6">
                                <label for="">Refarance Information</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="raf_name" placeholder="Full Name" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="raf_phone" placeholder="Phone"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="raf_address"  placeholder=" Address"/>
                                </div>
                                <div class="form-group">
                                    <select name="zone_id" id="zone_id" class="form-control" required>
                                        <option readonly>---- Select your work zone ----</option>
                                        @foreach($zones as $zone)
                                        <option value="{{$zone->id}}">{{$zone->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label for="">Emargency Contact</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="emg_name" placeholder="Full Name" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="emg_relation" class="form-control" placeholder="Relation"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="emg_phone" class="form-control" placeholder="Phone Number" />
                                </div>                                
                                <input type="submit" class="btnRegister"  value="Register"/>
                            </div>
                           
                        </div>
                        
                    </form>

                </div>

                <!-- <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3  class="register-heading">Apply as a Pickup Boy</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                    <option>What is your Birthdate?</option>
                                    <option>What is Your old Phone Number</option>
                                    <option>What is your Pet Name?</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="`Answer *" value="" />
                            </div>
                            <input type="submit" class="btnRegister"  value="Register"/>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection