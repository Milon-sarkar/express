@extends('frontend.master')

@section('content')
<div class="d-md-block d-none">

    <!-- login -->
    <section class="row pt-5">
        <div class="container pt-5 pb-3 mt-xl-5 mt-3 px-lg-3 px-md-0">
            <div class="col-12 pt-4 px-xl-5 px-4">
                <div class="row mx-xl-4 rl-panel">
                    <div class="col-6 bg-rl">
                        <div class="pt-5 pl-lg-5 pl-4 mt-5">
                            <h4 class="text-white font-regular">Welcome to</h4>
                            <h4 class="text-white font-regular">Stk It Solution Ltd.</h4>
                            <div class="pt-5 mt-4">
                                <img src="{{asset('frontend/assets/icon/rl-img.png')}}" alt="image" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 pr-md-0 pr-lg-3">
                        <div class="px-lg-5 px-md-0 pt-5 mt-3">
                            <div class="w-100 login-panel">
                                <div class="py-4 px-3">
                                    <h3 class="text-left text-color-13 font-h-md-23 font-regular">Log in to access</h3>
                                </div>


                                @if($message = Session::get('error'))
                                    <div class="alert alert-danger alert-block">
                                        <button type="button" class="close" data-dismiss="alert">x</button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif

                            <form method="post" action="{{ url('/merchant/login') }}">
                                @csrf
                                <div class="form-group px-2 mx-2 mb-4">
                                    <input type="email" name="email" class="form-control pl-3 arroba mb-1 h-auto bg-transparent" placeholder="Email"  required autofocus>


                                </div>

                                <div class="form-group px-2 mx-2 mb-3">
                                    <input type="password" name="password" class="form-control pl-3 padlock mb-1 h-auto bg-transparent" placeholder="Password" required>


                                </div>


                                <div class="form-group d-flex flex-wrap justify-content-between px-2 mx-2">

                                    <div>
                                        <a href="#" class="font-14">Forgot Password?</a>

                                    </div>
                                </div>
                                <div class="px-2 mx-2 pb-3 pt-2">
                                    <button type="submit" name="merchant-login" value="merchant-login"
                                            class="btn btn-block font-regular bg-color-lightseagreen text-white font-20 py-2">
                                        LOGIN
                                    </button>
                                </div>
                                <div class="px-3 mt-1">
                                    <div class="w-100 text-left font-14 text-dark pt-2">
                                        Don’t have an account? <a href="/merchant-register"
                                                                  class="text-red">Register</a>
                                    </div>
                                </div>
                                <div class="pb-4 px-3">
                                    <h6 class="text-left  font-h-md-23 font-medium" style="color:red"></h6>
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
@endsection