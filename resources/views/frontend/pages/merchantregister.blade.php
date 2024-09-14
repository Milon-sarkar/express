@extends('frontend.master')

@section('content')
    <!-- desktop and tablet -->
    <div class="d-md-block d-none">

        <!-- registration -->
        <section class="row pt-5">
            <div class="container pt-5 pb-3 mt-xl-5 mt-3">
                <div class="col-12 pt-4">
                    <div class="row mx-xl-4 rl-panel">
                        <div class="col-6 bg-rl">
                            <div class="pt-5 pl-lg-5 pl-4 mt-5">
                                <h4 class="text-white font-regular">Welcome to</h4>
                                <h4 class="text-white font-regular">Stk It Solution Ltd</h4>
                                <div class="pt-5 mt-4">
                                    <img src="{{asset('frontend/assets/icon/delivery-man-img-reg.png')}}" alt="image"
                                         class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pr-md-0 pr-lg-3">
                            <div class="px-md-0 py-5 my-3">
                                <div class="w-100 register-panel">
                                    <div class="pb-4 px-3">
                                    @if($message = Session::get("success"))
                                        <div class="alert alert-success">
                                        <p>{{$message}}</p>
                                        </div>
                                    @endif
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
                                        <h3 class="text-left text-color-13 font-h-md-23 font-regular">Become a
                                            Merchant</h3>
                                    </div>
                                    <form action="{{url('merchant_store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-4 px-2 mx-2">
                                            <div class="form-group mb-0">
                                                <input type="text" class="form-control px-3 h-auto bg-transparent"
                                                       name="company_name" placeholder="Name of Business" required>
                                            </div>


                                        </div>
                                        <div class="d-flex flex-wrap">
                                            <div class="col pr-2 mb-4">
                                                <div class="form-group mb-0">
                                                    <input type="text" name="name"
                                                           class="form-control px-3 h-auto bg-transparent"
                                                           placeholder="Merchand Full Name" required>
                                                </div>
                                            </div>

                                            <!-- <div class="col pl-2 mb-4">
                                                <div class="form-group mb-0">
                                                    <input type="text" name="M_name"
                                                           class="form-control px-3 h-auto bg-transparent"
                                                           placeholder="Middle Name">
                                                </div>
                                            </div>
                                            <div class="col pl-2 mb-4">
                                                <div class="form-group mb-0">
                                                    <input type="text" name="l_name"
                                                           class="form-control px-3 h-auto bg-transparent"
                                                           placeholder="Last Name" required>
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="mb-4 px-2 mx-2">
                                            <div class="form-group mb-0">
                                                <textarea class="form-control px-3 h-auto bg-transparent" rows="2"
                                                          name="address" placeholder="Address of your Pick up Location"
                                                          required></textarea>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap">
                                            <div class="col-md-6 pr-2 mb-4">
                                                <div class="form-group">
                                                    <select class="form-control" name="zone_id">
                                                        <option readonly> ---- Select Zone ----</option>
                                                        @foreach($zones as $zone)
                                                            <option value="{{$zone->id}}">{{$zone->name}}</option>
                                                        @endforeach
                                                       
                                                    </select>
                                                </div>
                                            </div>


                                            <!-- <div class="col pl-2 mb-4">
                                                <div class="form-group mb-0">
                                                    <input type="text" name="pincode"
                                                           class="form-control px-3 h-auto bg-transparent"
                                                           placeholder="Pincode" required>
                                                </div>
                                            </div> -->
                                        </div>


                                        <div class="mb-4 px-2 mx-2">
                                            <div class="form-group mb-0">
                                                <input type="text" name="phone"
                                                       class="form-control px-3 h-auto bg-transparent"
                                                       placeholder="Phone Number" required>
                                            </div>
                                        </div>

                                        <div class="mb-4 px-2 mx-2">
                                            <div class="form-group mb-0">
                                                <input type="email" name="email"
                                                       class="form-control px-3 h-auto bg-transparent"
                                                       placeholder="Email" required>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-wrap">

                                            <div class="d-flex flex-wrap mb-4">
                                                <div class="col pr-2 mb-1">
                                                    <div class="form-group mb-0">
                                                        <input type="password"
                                                               class="form-control px-3 h-auto bg-transparent"
                                                               placeholder="Password Min:6 Chars" name="password"
                                                               required>
                                                    </div>
                                                </div>
                                                <div class="col pl-2 mb-1">
                                                    <div class="form-group mb-0">
                                                        <input type="password"
                                                               class="form-control px-3 h-auto bg-transparent"
                                                               placeholder="Confirm Password"
                                                               name="Repassword" required>
                                                    </div>
                                                </div>
                                                <div class="w-100 px-3">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="px-2 mx-2 pb-3 pt-2">
                                            <button type="submit"
                                                    class="btn btn-block font-regular bg-color-lightseagreen text-white font-20 font-h-md-18 py-2"
                                                    value="submit">REGISTER NOW
                                            </button>
                                        </div>
                                     
                                        <div class="px-3 py-2">
                                            <div class="w-100 text-left font-14 text-dark">
                                                Already have an account? <a href="{{ url('merchantlogin') }}" class="text-red">Login</a>
                                            </div>
                                        </div>
                                        <div class="pb-4 px-3">
                                            <h6 class="text-left  font-h-md-23 font-medium" style="color:red"></h6>
                                        </div>
                                      
                                        <div class="pb-4 px-3">
                                            <h6 class="text-left  font-h-md-23 font-medium">Developed by <a
                                                    href="https://stkitbd.com/" target="_blank" style="color:red">Stk It
                                                    Solution Ltd.</a></h6>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of registration -->


    </div>





 


@endsection