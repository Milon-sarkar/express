<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>LOGIn</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{ asset('merchant/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('merchant/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('merchant/assets/css/authentication/form-2.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('merchant/assets/css/forms/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('merchant/assets/css/forms/switches.css') }}">
</head>

<body class="form">
    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Register</h1>
                        <p class="">Log in to your account to continue.</p>

                        <form action="{{ route('register.merchant') }}" class="text-left" method="POST">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form">

                                <div class="field-wrapper input">
                                    <label for="username">Name</label>
                                    <input style="padding: 15px;" placeholder="Name" name="name" type="text"
                                        class="form-control">
                                </div>
                                <div class="field-wrapper input">
                                    <label for="username">Email</label>
                                    <input style="padding: 15px;" placeholder="Email" name="email" type="text"
                                        class="form-control">
                                </div>
                                <div class="field-wrapper input">
                                    <label for="username">Phone</label>
                                    <input style="padding: 15px;" placeholder="Phone" name="phone" type="text"
                                        class="form-control">
                                </div>
                                <div class="field-wrapper input">
                                    <label for="username">Adress</label>
                                    <input style="padding: 15px;" placeholder="Address" name="address" type="text"
                                        class="form-control">
                                </div>
                                <div class="field-wrapper input">
                                    <label for="username">Password</label>
                                    <input style="padding: 15px;" placeholder="Password" name="password" type="password"
                                        class="form-control">
                                </div>


                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Register</button>
                                    </div>
                                </div>

                                <div class="d-sm-flex justify-content-between">

                                    <label style="margin-top: 30px;" for="">Already Have You Account?<a href="{{route('login.merchant')}}"> Log
                                            In Here</a></label>

                                </div>




                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
