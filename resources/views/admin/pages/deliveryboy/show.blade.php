<style>
.mi_profile{
    width:50%;
    margin:0 auto;
}
.mi_protext{
    text-align: center;
}
</style>
@extends('admin/home')
@section('body')
<div class="widget-content widget-content-area mi_profile">
    <div class="d-flex justify-content-between">
        <h3 class="">Info</h3>
        <a href="{{url('users')}}" class="mt-2 edit-profile">Back</a>
    </div>
    <div class="text-center user-info">
        <img src="{{asset('asset/img/milon.jpg')}}" alt="avatar">
        <p class="">{{$admin->username}}</p>
    </div>
    <div class="user-info-list mi_protext">
        <div class="">
            <ul class="contacts-block list-unstyled">
                <li class="contacts-block__item">
                    Name : {{$admin->username}}
                </li>
                <li class="contacts-block__item">                    
                    Email : {{$admin->email}}
                </li>
                <li class="contacts-block__item">
                    Password : {{$admin->password}}
                </li>
                <li class="contacts-block__item">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <div class="social-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="social-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="social-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>                                    
    </div>
</div>
@endsection