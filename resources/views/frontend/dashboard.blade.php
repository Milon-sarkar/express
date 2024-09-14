@extends('frontend.master')

@section('content')


<!-- desktop and tablet -->
<div class="d-md-block d-none">
<!-- header -->
<section class="row p-xl-4 p-md-2 spacing bg-img">
    <div class="container px-lg-3 px-md-0">
        <div class="col-12 mb-4 mt-3 py-5">
            <div class="row">
                <div class="col-lg-7 col-md-6 pl-0">
                    <div class="py-5 mb-xl-4 mb-2 feature-content">
                        <div class="feature-text text-white">
                            <h1>Parcel Delivered</h1>
                            <h1>On Time with no Hassle</h1>
                        </div>
                        <div class="text-white">
                            <p class="sub-ft-txt font-17">Easily track your courier, Get courier within hours. Efficient & safe delivery.</p>
                        </div>
                        <div class="py-4">
                            <a class="btn bg-white border-0 without-focus text-color-0-1 text-uppercase font-medium font-16" href="/merchant-register" id="gotoregister" role="button">BECOME A MERCHANT</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 pr-0 bg-send">
                    <!--  --><img src="{{asset('frontend/assets/icon/delivery-man-img-vertical.png')}}">
                </div>
            </div>
        </div>
        <div class="col-12 pt-xl-4 pt-lg-3 pt-4">
            <div class="row pt-xl-3 mt-xl-2 pt-3">
                <div class="card border-0 track-elem w-75 mbl-width mx-auto">
                    <div class="card-body px-5 py-4">
                        <tracking></tracking>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of header -->

<!-- counter -->
<section class="row">
    <div class="container pt-5">
        <div class="col-12 py-5 mt-4">
            <div class="row py-2">
                <div class="col-md-3 showcase">
                    <div class="row text-center">
                        <div class="box mx-auto d-flex justify-content-center mb-4 align-items-center">
                            <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 258.75 245.75" xml:space="preserve" width="37" height="43">
                              <g transform="translate(0,1)">
                                <circle cx="129.375" cy="60" r="60" fill="#006A4D"/>
                                <path fill="#006A4D" d="m 129.375,136 c -60.061,0 -108.75,48.689 -108.75,108.75 h 217.5 C 238.125,184.689 189.436,136 129.375,136 Z"/>
                              </g>
                            </svg>
                        </div>
                        <div class="w-100">
                            <h1 class="text-seagreen ">9422+</h1>
                            <p class="font-18 font-h-md-14 text-color-12">Our Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 showcase">
                    <div class="row text-center">
                        <div class="box mx-auto d-flex justify-content-center mb-4 align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-62 0 512 512.001" width="37" height="43">
                                <g fill-rule="evenodd">
                                    <path fill="#006A4D" d="m342.234375 0h-81.003906c-24.804688 0-45 20.195312-45 45v26.992188h-23c-8.285157 0-15 6.71875-15 15 0 8.285156 6.714843 15 15 15h23.324219c3.816406 43.886718 40.664062 78.003906 85.175781 78.003906 47.21875 0 85.503906-38.285156 85.503906-85.503906 0-16.480469 0-32.996094 0-49.492188 0-24.804688-20.195313-45-45-45zm0 0"/>
                                    <path fill="#006A4D" d="m266.777344 217.53125c-10.945313 4.941406-20.667969 12.101562-28.574219 20.894531l-80.640625 82.570313h-112.5625c-24.78125 0-45 20.222656-45 45.003906 0 24.777344 20.222656 45 45 45h126.003906c13.824219 0 27.527344-3.472656 37.820313-13.839844l13.410156-13.5v113.332032c0 7.265624 5.160156 13.625 12.015625 15.007812l138.003906-.007812c8.273438-.007813 14.980469-6.722657 14.980469-15v-201.496094c0-61.597656-63.984375-103.453125-120.457031-77.964844zm0 0"/>
                                    <path fill="#006A4D" d="m41.226562 290.996094h108.003907c8.285156 0 15-6.714844 15-15v-107c0-8.285156-6.714844-15-15-15h-39v25.765625c0 8.285156-6.71875 15-15 15-8.285157 0-15-6.714844-15-15v-25.765625h-39.003907c-8.28125 0-15 6.714844-15 15v107c0 8.285156 6.71875 15 15 15zm0 0"/>
                                </g>
                            </svg>
                        </div>
                        <div class="w-100">
                            <h1 class="text-seagreen">524+</h1>
                            <p class="font-18 font-h-md-14 text-color-12">Delivery Persons And Staffs</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 showcase">
                    <div class="row text-center">
                        <div class="box mx-auto d-flex justify-content-center mb-4 align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="37" height="43" viewBox="0 0 481.083 481.083" xml:space="preserve">
                                <g>
                                    <path fill="#006A4D" d="M466.474,314.693c-7.675-3.647-21.885-6.894-46.002-1.642c-1.667,0.306-112.113,19.947-132.733,23.652    c-3.178,0.57-5.119,4.43-5.119,4.43c-40.774,62.781-105.437,17.883-105.142,16.967c36.45,10.105,67.417-3.995,79.028-17.938    c27.118-32.562-15.759-37.398-38.477-42.924c-85.094-20.693-88.682,0.514-137.964,5.199L4.522,313.136    c-1.712,0.519-3.128,1.734-3.899,3.349c-0.772,1.614-0.83,3.479-0.16,5.138l3.051,7.545c7.604,18.809,15.251,46.834,23.292,65.875    c0.517,1.227,1.407,2.262,2.544,2.957c0.252,0.154,0.589,0.344,1.011,0.545c1.508,0.717,3.208,1.143,4.595,1.141l53.686-1.061    c2.814-0.018,122.088,69.213,179.354,46.277l178.373-79.97c7.098-3.359,14.436-6.832,21.741-10.207    c7.973-3.683,12.927-12.146,12.972-20.372C481.129,325.753,475.685,319.07,466.474,314.693z"/>
                                    <path fill="#006A4D" d="M96.832,111.858h5.355v128.519c0,9.859,7.993,17.852,17.853,17.852h241.001c9.859,0,17.852-7.993,17.852-17.852V111.858    h5.356c4.931,0,8.927-3.997,8.927-8.926V40.451c0-4.93-3.996-8.926-8.927-8.926H96.832c-4.93,0-8.926,3.996-8.926,8.926v62.482    C87.906,107.861,91.901,111.858,96.832,111.858z M220.457,57.521h40.167c7.888,0,14.282,6.395,14.282,14.282    c0,7.888-6.396,14.281-14.282,14.281h-40.167c-7.887,0-14.281-6.394-14.281-14.281C206.175,63.916,212.569,57.521,220.457,57.521z    "/>
                                </g>
                            </svg>
                        </div>
                        <div class="w-100">
                            <h1 class="text-seagreen">950K+</h1>
                            <p class="font-18 font-h-md-14 text-color-12">Parcels Delivered</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 showcase">
                    <div class="row text-center">
                        <div class="box mx-auto d-flex justify-content-center mb-4 align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="37" height="43" viewBox="0 0 890.5 890.5" xml:space="preserve">
                                <g>
                                    <path fill="#006A4D" d="M208.1,180.56l355-96.9l-18.8-38c-12.3-24.7-42.3-34.9-67-22.6l-317.8,157.5H208.1z"/>
                                    <path fill="#006A4D" d="M673.3,86.46c-4.399,0-8.8,0.6-13.2,1.8l-83.399,22.8L322,180.56h289.1h126l-15.6-57.2    C715.5,101.06,695.3,86.46,673.3,86.46z"/>
                                    <path fill="#006A4D" d="M789.2,215.56h-11.4h-15.5h-15.5H628.5H193.8h-57h-48h-8.9H50.1c-15.8,0-29.9,7.3-39.1,18.8c-4.2,5.3-7.4,11.4-9.2,18.1    c-1.1,4.2-1.8,8.6-1.8,13.1v6v57v494.1c0,27.601,22.4,50,50,50h739.1c27.601,0,50-22.399,50-50v-139.5H542.4    c-46.9,0-85-38.1-85-85v-45.8v-15.5v-15.5v-34.4c0-23,9.199-43.899,24.1-59.199c13.2-13.601,30.9-22.801,50.7-25.101    c3.3-0.399,6.7-0.6,10.1-0.6h255.2H813h15.5h10.6v-136.5C839.2,237.96,816.8,215.56,789.2,215.56z"/>
                                    <path fill="#006A4D" d="M874.2,449.86c-5-4.6-10.9-8.1-17.5-10.4c-5.101-1.699-10.5-2.699-16.2-2.699h-1.3h-1h-15.5h-55.9H542.4    c-27.601,0-50,22.399-50,50v24.899v15.5v15.5v55.4c0,27.6,22.399,50,50,50h296.8h1.3c5.7,0,11.1-1,16.2-2.7    c6.6-2.2,12.5-5.8,17.5-10.4c10-9.1,16.3-22.3,16.3-36.899v-111.3C890.5,472.16,884.2,458.959,874.2,449.86z M646.8,552.36    c0,13.8-11.2,25-25,25h-16.6c-13.8,0-25-11.2-25-25v-16.6c0-8,3.7-15.101,9.6-19.601c4.3-3.3,9.601-5.399,15.4-5.399h4.2H621.8    c13.8,0,25,11.199,25,25V552.36L646.8,552.36z"/>
                                </g>
                            </svg>
                        </div>
                        <div class="w-100">
                            <h1 class="text-seagreen">1,153M+</h1>
                            <p class="font-18 font-h-md-14 text-color-12">Total Amount Paid</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of counter -->


<!-- features -->
<section class="row">
    <div class="container pt-5 px-lg-3 px-md-0">
        <div class="py-5 mx-auto">
            <div class="col-12 py-2">
                <div class="row">
                    <div class="col-md-6 pl-0 pr-4">
                        <div class="w-100">
                            <div class="card feature-accordion mb-4 border-0">
                                <div class="card-header py-2 bg-white border-bottom-0" id="feature-one">
                                    <div class="cursor-pointer py-3 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="d-block">
                                            <span>
                                                <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" width="32" height="24" viewBox="0 0 32 24" xml:space="preserve">
                                                   <g transform="matrix(0.05228758,0,0,0.05579799,0,-5.0742123)">
                                                       <path fill="#006A4D" d="M 21.474,377.522 V 117.138 c 0,-14.469 11.729,-26.199 26.199,-26.199 h 260.25 c 14.469,0 26.198,11.73 26.198,26.199 v 260.385 c 0,4.823 -3.909,8.733 -8.733,8.733 H 30.207 c -4.824,0 -8.733,-3.91 -8.733,-8.734 z m 210.16,89.202 c 0,30.01 -24.329,54.338 -54.338,54.338 -30.009,0 -54.338,-24.328 -54.338,-54.338 0,-30.011 24.329,-54.338 54.338,-54.338 30.009,0 54.338,24.327 54.338,54.338 z m -27.17,0 c 0,-15.005 -12.164,-27.169 -27.169,-27.169 -15.005,0 -27.17,12.164 -27.17,27.169 0,15.005 12.165,27.17 27.17,27.17 15.005,0 27.169,-12.165 27.169,-27.17 z M 130.495,412.385 H 8.733 C 3.91,412.385 0,416.295 0,421.118 v 26.495 c 0,4.823 3.91,8.733 8.733,8.733 h 97.598 c 2.548,-17.484 11.373,-32.928 24.164,-43.961 z m 385.443,54.339 c 0,30.01 -24.329,54.338 -54.338,54.338 -30.01,0 -54.338,-24.328 -54.338,-54.338 0,-30.011 24.328,-54.338 54.338,-54.338 30.009,-0.001 54.338,24.327 54.338,54.338 z m -27.168,0 c 0,-15.005 -12.165,-27.169 -27.17,-27.169 -15.006,0 -27.169,12.164 -27.169,27.169 0,15.005 12.164,27.17 27.169,27.17 15.005,0 27.17,-12.165 27.17,-27.17 z M 612,421.118 v 26.495 c 0,4.823 -3.91,8.733 -8.733,8.733 h -70.704 c -5.057,-34.683 -34.906,-61.427 -70.961,-61.427 -36.062,0 -65.912,26.745 -70.969,61.427 H 248.261 c -2.549,-17.483 -11.373,-32.928 -24.164,-43.961 H 359.091 V 162.594 c 0,-9.646 7.82,-17.466 17.466,-17.466 h 82.445 c 23.214,0 44.911,11.531 57.9,30.77 l 53.15,78.721 c 7.796,11.547 11.962,25.161 11.962,39.094 v 118.672 h 21.253 c 4.823,0 8.733,3.91 8.733,8.733 z M 523.408,256.635 480.907,196.242 c -1.636,-2.324 -4.3,-3.707 -7.142,-3.707 H 407.47 c -4.822,0 -8.733,3.91 -8.733,8.733 v 60.393 c 0,4.824 3.91,8.733 8.733,8.733 h 108.798 c 7.074,0 11.212,-7.973 7.14,-13.759 z"/>
                                                   </g>
                                                </svg>
                                            </span>
                                            <span class="pl-2 font-18 font-h-md-16 font-medium">Daily Pick up, No limitations</span>
                                        </div>
                                        <span class="tgl-icon">
                                            <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 11 19" xml:space="preserve" width="11" height="19">
                                               <g transform="matrix(0.04363995,0,0,0.03981768,-4.9119388,-1.454e-6)">
                                                   <path d="m 360.731,229.075 -225.1,-225.1 c -5.3,-5.3 -13.8,-5.3 -19.1,0 -5.3,5.3 -5.3,13.8 0,19.1 l 215.5,215.5 -215.5,215.5 c -5.3,5.3 -5.3,13.8 0,19.1 2.6,2.6 6.1,4 9.5,4 3.4,0 6.9,-1.3 9.5,-4 l 225.1,-225.1 c 5.3,-5.2 5.3,-13.8 0.1,-19 z"/>
                                               </g>
                                            </svg>
                                        </span>
                                    </div>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="feature-one">
                                    <div class="card-body border-top">
                                            Stk It Solution Ltd gives you the opportunity of unlimited pickup. You can give any amount of parcels regardless of their size and weight. Also you don’t have to bring your parcels to our office! Our trusted pickup man will visit your location and pick up your parcels on behalf of you. You can request for pickup for every day of the week.



                                    </div>
                                </div>
                            </div>
                            <div class="card feature-accordion mb-4 border-0">
                                <div class="card-header py-2 bg-white border-bottom-0" id="feature-two">
                                    <div class="cursor-pointer py-3 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        <div class="d-block">
                                            <span>
                                                <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 32.000001 24.000001" xml:space="preserve" width="32" height="24">
                                                   <g transform="matrix(0.04575195,0,0,0.04399403,2.0000106,-1.4620868)">
                                                       <path fill="#006A4D" d="M 588.63,113.193 213.812,33.871 c -15.858,-3.355 -31.576,6.876 -34.931,22.734 l -7.121,45.762 432.477,91.519 7.121,-45.762 c 3.355,-15.852 -6.87,-31.575 -22.728,-34.931 z"/>
                                                       <path fill="#006A4D" d="m 431.009,203.591 c -4.378,-15.766 -20.854,-25.085 -36.615,-20.714 L 323.24,202.63 155.498,167.13 137.05,254.295 21.786,286.287 c -15.76,4.372 -25.079,20.848 -20.708,36.609 l 64.958,234.078 c 4.378,15.76 20.855,25.085 36.615,20.708 L 475.259,474.279 c 15.76,-4.378 25.079,-20.848 20.708,-36.615 l -11.15,-40.184 41.789,8.835 c 15.858,3.361 31.576,-6.87 34.931,-22.728 L 587.976,258.65 437.45,226.797 Z m 43.031,118.968 9.215,-43.552 c 1.384,-6.521 7.85,-10.727 14.37,-9.35 l 43.552,9.221 c 6.527,1.384 10.733,7.843 9.356,14.37 l -9.215,43.552 c -1.384,6.521 -7.849,10.733 -14.37,9.35 l -43.552,-9.215 c -6.533,-1.389 -10.74,-7.855 -9.356,-14.376 z M 28.27,309.646 131.385,281.04 l 243.299,-67.517 26.181,-7.274 c 0.478,-0.129 0.955,-0.19 1.421,-0.19 2.1,0 4.611,1.378 5.345,4.017 l 3.074,11.07 9.631,34.704 L 37.148,362.186 24.443,316.418 c -0.796,-2.872 0.956,-5.976 3.827,-6.772 z m 444.331,134.495 c 0.49,1.776 -0.024,3.245 -0.545,4.164 -0.514,0.918 -1.506,2.119 -3.282,2.608 L 96.173,554.316 c -0.471,0.129 -0.955,0.196 -1.421,0.196 -2.1,0 -4.611,-1.384 -5.345,-4.023 L 51.519,413.955 434.707,307.613 l 23.371,84.208 z"/>
                                                       <path fill="#006A4D" d="m 156.379,453.484 c -1.788,-6.429 -8.499,-10.225 -14.928,-8.443 l -43.515,12.08 c -6.423,1.782 -10.225,8.499 -8.437,14.928 l 12.074,43.509 c 1.788,6.429 8.499,10.225 14.928,8.437 l 43.515,-12.074 c 6.429,-1.782 10.225,-8.499 8.443,-14.928 z"/>
                                                   </g>
                                                </svg>
                                            </span>
                                            <span class="pl-2 font-18 font-h-md-16 font-medium">Faster Payment Service</span>
                                        </div>
                                        <span class="tgl-icon">
                                            <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 11 19" xml:space="preserve" width="11" height="19">
                                               <g transform="matrix(0.04363995,0,0,0.03981768,-4.9119388,-1.454e-6)">
                                                   <path d="m 360.731,229.075 -225.1,-225.1 c -5.3,-5.3 -13.8,-5.3 -19.1,0 -5.3,5.3 -5.3,13.8 0,19.1 l 215.5,215.5 -215.5,215.5 c -5.3,5.3 -5.3,13.8 0,19.1 2.6,2.6 6.1,4 9.5,4 3.4,0 6.9,-1.3 9.5,-4 l 225.1,-225.1 c 5.3,-5.2 5.3,-13.8 0.1,-19 z"/>
                                               </g>
                                            </svg>
                                        </span>
                                    </div>
                                </div>

                                <div id="collapseTwo" class="collapse" aria-labelledby="feature-two">
                                    <div class="card-body border-top">
                                            At Stk It Solution Ltd you can request for your payment every six days of the week.  We Courier provides multiple payment methods such as cash, Bkash or Rocket payment. Also you can collect the money simply by transferring your current balance to your preferred Bank. Our faster and secure payment service will provide the ultimate solution to your payment problem which can occur using a logistics service.



                                    </div>
                                </div>
                            </div>
                            <div class="card feature-accordion mb-4 border-0">
                                <div class="card-header py-2 bg-white border-bottom-0" id="feature-three">
                                    <div class="cursor-pointer py-3 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        <div class="d-block">
                                            <span>
                                                <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 32.000001 24.000001" xml:space="preserve" width="32" height="24">
                                                   <g transform="matrix(0.08000133,0,0,0.08000133,4,1.00665e-6)">
                                                        <path fill="#006A4D" d="M 149.995,0 C 67.156,0 0,67.158 0,149.995 c 0,82.837 67.156,150 149.995,150 82.839,0 150,-67.163 150,-150 C 299.995,67.158 232.834,0 149.995,0 Z m 64.847,178.524 H 151.25 c -0.215,0 -0.415,-0.052 -0.628,-0.06 -0.213,0.01 -0.412,0.06 -0.628,0.06 -5.729,0 -10.374,-4.645 -10.374,-10.374 V 62.249 c 0,-5.729 4.645,-10.374 10.374,-10.374 5.729,0 10.374,4.645 10.374,10.374 v 95.527 h 54.47 c 5.729,0 10.374,4.645 10.374,10.374 0,5.729 -4.641,10.374 -10.37,10.374 z"/>
                                                   </g>
                                                </svg>
                                            </span>
                                            <span class="pl-2 font-18 font-h-md-16 font-medium">Real-Time Tracking</span>
                                        </div>
                                        <span class="tgl-icon">
                                            <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 11 19" xml:space="preserve" width="11" height="19">
                                               <g transform="matrix(0.04363995,0,0,0.03981768,-4.9119388,-1.454e-6)">
                                                   <path d="m 360.731,229.075 -225.1,-225.1 c -5.3,-5.3 -13.8,-5.3 -19.1,0 -5.3,5.3 -5.3,13.8 0,19.1 l 215.5,215.5 -215.5,215.5 c -5.3,5.3 -5.3,13.8 0,19.1 2.6,2.6 6.1,4 9.5,4 3.4,0 6.9,-1.3 9.5,-4 l 225.1,-225.1 c 5.3,-5.2 5.3,-13.8 0.1,-19 z"/>
                                               </g>
                                            </svg>
                                        </span>
                                    </div>
                                </div>

                                <div id="collapseThree" class="collapse" aria-labelledby="feature-three">
                                    <div class="card-body border-top">
                                            Stk It Solution Ltd provides an unique tracking code for your every consignments. Through our website you can learn the current status of the products and stay up to date.



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pr-0 pl-4">
                        <div class="w-100">
                            <div class="card feature-accordion mb-4 border-0">
                                <div class="card-header py-2 bg-white border-bottom-0" id="feature-four">
                                    <div class="cursor-pointer py-3 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        <div class="d-block">
                                            <span>
                                                <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" width="32" height="26" viewBox="0 0 32 26" xml:space="preserve">
                                                   <g transform="matrix(0.03368894,0,0,0.03041577,1,-0.5426301)">
                                                        <path fill="#006A4D" d="m 208.1,180.56 355,-96.9 -18.8,-38 C 532,20.96 502,10.76 477.3,23.06 l -317.8,157.5 z"/>
                                                        <path fill="#006A4D" d="m 673.3,86.46 c -4.399,0 -8.8,0.6 -13.2,1.8 L 576.701,111.06 322,180.56 h 289.1 126 l -15.6,-57.2 c -6,-22.3 -26.2,-36.9 -48.2,-36.9 z"/>
                                                        <path fill="#006A4D" d="m 789.2,215.56 h -11.4 -15.5 -15.5 -118.3 -434.7 -57 -48 -8.9 -29.8 c -15.8,0 -29.9,7.3 -39.1,18.8 -4.2,5.3 -7.4,11.4 -9.2,18.1 -1.1,4.2 -1.8,8.6 -1.8,13.1 v 6 57 494.1 c 0,27.601 22.4,50 50,50 h 739.1 c 27.601,0 50,-22.399 50,-50 V 683.16 H 542.4 c -46.9,0 -85,-38.1 -85,-85 v -45.8 -15.5 -15.5 -34.4 c 0,-23 9.199,-43.899 24.1,-59.199 13.2,-13.601 30.9,-22.801 50.7,-25.101 3.3,-0.399 6.7,-0.6 10.1,-0.6 h 255.2 15.5 15.5 10.6 v -136.5 c 0.1,-27.6 -22.3,-50 -49.9,-50 z"/>
                                                        <path fill="#006A4D" d="m 874.2,449.86 c -5,-4.6 -10.9,-8.1 -17.5,-10.4 -5.101,-1.699 -10.5,-2.699 -16.2,-2.699 h -1.3 -1 -15.5 -55.9 -224.4 c -27.601,0 -50,22.399 -50,50 v 24.899 15.5 15.5 55.4 c 0,27.6 22.399,50 50,50 h 296.8 1.3 c 5.7,0 11.1,-1 16.2,-2.7 6.6,-2.2 12.5,-5.8 17.5,-10.4 10,-9.1 16.3,-22.3 16.3,-36.899 v -111.3 c 0,-14.601 -6.3,-27.802 -16.3,-36.901 z m -227.4,102.5 c 0,13.8 -11.2,25 -25,25 h -16.6 c -13.8,0 -25,-11.2 -25,-25 v -16.6 c 0,-8 3.7,-15.101 9.6,-19.601 4.3,-3.3 9.601,-5.399 15.4,-5.399 h 4.2 12.4 c 13.8,0 25,11.199 25,25 z"/>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="pl-2 font-18 font-h-md-16 font-medium">Cash on Delivery</span>
                                        </div>
                                        <span class="tgl-icon">
                                            <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 11 19" xml:space="preserve" width="11" height="19">
                                               <g transform="matrix(0.04363995,0,0,0.03981768,-4.9119388,-1.454e-6)">
                                                   <path d="m 360.731,229.075 -225.1,-225.1 c -5.3,-5.3 -13.8,-5.3 -19.1,0 -5.3,5.3 -5.3,13.8 0,19.1 l 215.5,215.5 -215.5,215.5 c -5.3,5.3 -5.3,13.8 0,19.1 2.6,2.6 6.1,4 9.5,4 3.4,0 6.9,-1.3 9.5,-4 l 225.1,-225.1 c 5.3,-5.2 5.3,-13.8 0.1,-19 z"/>
                                               </g>
                                            </svg>
                                        </span>
                                    </div>
                                </div>

                                <div id="collapseFour" class="collapse" aria-labelledby="feature-four">
                                    <div class="card-body border-top">
                                        At Stk It Solution Ltd we will collect the cash on behalf of you. Our trusted delivery man will deliver your parcel to your customer and collect the money. And then with our various payment methods we will give your money back to you. Also we are giving you the opportunity of sending a non-conditioned parcel to delivery as well.
                                    </div>
                                </div>
                            </div>
                            <div class="card feature-accordion mb-4 border-0">
                                <div class="card-header py-2 bg-white border-bottom-0" id="feature-five">
                                    <div class="cursor-pointer py-3 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                        <div class="d-block">
                                            <span>
                                                <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" width="32" height="24" viewBox="0 0 32 24" xml:space="preserve">
                                                   <g transform="matrix(0.05472725,0,0,0.05051706,1,-1.846045)">
                                                       <path fill="#006A4D" d="M 534.75,49.965 C 525.805,41.02 515.056,36.543 502.489,36.543 H 45.681 C 33.119,36.543 22.368,41.02 13.417,49.965 4.471,58.913 0,69.663 0,82.226 v 310.633 c 0,12.566 4.471,23.315 13.417,32.265 8.951,8.945 19.702,13.414 32.264,13.414 h 155.318 c 0,7.231 -1.524,14.661 -4.57,22.269 -3.044,7.614 -6.09,14.273 -9.136,19.981 -3.042,5.715 -4.565,9.897 -4.565,12.56 0,4.948 1.807,9.24 5.424,12.847 3.615,3.621 7.898,5.435 12.847,5.435 h 146.179 c 4.949,0 9.233,-1.813 12.848,-5.435 3.62,-3.606 5.427,-7.898 5.427,-12.847 0,-2.468 -1.526,-6.611 -4.571,-12.415 -3.046,-5.801 -6.092,-12.566 -9.134,-20.267 -3.046,-7.71 -4.569,-15.085 -4.569,-22.128 h 155.318 c 12.56,0 23.309,-4.469 32.254,-13.414 8.949,-8.949 13.422,-19.698 13.422,-32.265 V 82.226 C 548.176,69.663 543.699,58.913 534.75,49.965 Z m -23.123,269.803 c 0,2.475 -0.903,4.613 -2.711,6.424 -1.81,1.804 -3.952,2.707 -6.427,2.707 H 45.681 c -2.473,0 -4.615,-0.903 -6.423,-2.707 -1.807,-1.817 -2.712,-3.949 -2.712,-6.424 V 82.226 c 0,-2.475 0.902,-4.615 2.712,-6.423 1.809,-1.805 3.951,-2.712 6.423,-2.712 h 456.815 c 2.471,0 4.617,0.904 6.42,2.712 1.808,1.809 2.711,3.949 2.711,6.423 z"/>
                                                   </g>
                                                </svg>
                                            </span>
                                            <span class="pl-2 font-18 font-h-md-16 font-medium">Online Management</span>
                                        </div>
                                        <span class="tgl-icon">
                                            <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 11 19" xml:space="preserve" width="11" height="19">
                                               <g transform="matrix(0.04363995,0,0,0.03981768,-4.9119388,-1.454e-6)">
                                                   <path d="m 360.731,229.075 -225.1,-225.1 c -5.3,-5.3 -13.8,-5.3 -19.1,0 -5.3,5.3 -5.3,13.8 0,19.1 l 215.5,215.5 -215.5,215.5 c -5.3,5.3 -5.3,13.8 0,19.1 2.6,2.6 6.1,4 9.5,4 3.4,0 6.9,-1.3 9.5,-4 l 225.1,-225.1 c 5.3,-5.2 5.3,-13.8 0.1,-19 z"/>
                                               </g>
                                            </svg>
                                        </span>
                                    </div>
                                </div>

                                <div id="collapseFive" class="collapse" aria-labelledby="feature-five">
                                    <div class="card-body border-top">
                                        With our simple and easy to use user interface you can get all the information you need in your own user dashboard. You can view your user dashboard to stay updated. Whether it’s about a parcel or payment, you can get all of your information with just simple clicks.



                                    </div>
                                </div>
                            </div>
                            <div class="card feature-accordion mb-4 border-0">
                                <div class="card-header py-2 bg-white border-bottom-0" id="feature-six">
                                    <div class="cursor-pointer py-3 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                        <div class="d-block">
                                            <span>
                                                <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 32 24" xml:space="preserve" width="32" height="24">
                                                    <g transform="matrix(0.06543075,0,0,0.05484461,1.6837515,4.008e-6)" >
                                                        <path fill="#006A4D" d="m 264.6,300.4 h -92 C 97,300.4 35.4,362 35.4,437.6 h 366.8 c -0.4,-75.2 -62,-137.2 -137.6,-137.2 z"/>
                                                        <path fill="#006A4D" d="m 235,237.6 c 7.2,0 14,2.4 19.2,6.8 h 33.2 c 16.4,-17.2 26.4,-40 26.4,-65.6 0,-52.8 -42.8,-95.2 -95.2,-95.2 -52.4,0 -95.2,42.4 -95.2,95.2 0,35.6 19.6,66.8 48.8,83.2 3.2,-14 15.6,-24.4 30,-24.4 z"/>
                                                        <path fill="#006A4D" d="m 77.8,186.8 c 1.2,10 6,19.2 12.8,26 5.2,5.2 12,9.2 19.6,11.6 -0.4,-1.6 -0.4,-3.2 -0.4,-4.4 v -77.6 c 0,-1.6 0,-3.2 0.4,-4.8 -7.6,2 -14,6 -19.6,11.6 -0.4,0.4 -1.2,1.2 -1.6,1.6 v -3.2 c 0,-7.6 0.8,-15.2 2,-22.4 1.2,-7.6 3.2,-14.8 6,-21.6 2.4,-7.2 5.6,-14 9.6,-20.4 3.6,-6.4 8,-12.8 12.8,-18.4 0.4,-0.4 0.8,-1.2 0.8,-1.6 3.6,0.4 7.2,-0.8 9.6,-3.2 24.4,-24.4 56.4,-36.4 88,-36.4 31.6,0 64,12 88,36.4 2.8,2.8 6.4,3.6 9.6,3.2 0.4,0.4 0.4,1.2 0.8,1.6 4.8,5.6 9.2,12 12.8,18.4 3.6,6.4 6.8,13.2 9.6,20.4 2.4,7.2 4.4,14.4 6,22 1.2,7.2 2,14.8 2,22.4 v 3.2 c -0.4,-0.8 -1.2,-1.2 -1.6,-1.6 -5.2,-5.2 -12,-9.2 -19.6,-11.6 0.4,1.6 0.4,3.2 0.4,4.8 V 220 c 0,1.6 0,3.2 -0.4,4.4 2,-0.4 4,-1.2 6,-2 v 25.2 c 0,2.8 -0.4,5.6 -0.8,7.6 -0.4,2 -1.2,3.2 -2,4.4 -0.8,0.8 -2,1.6 -3.2,2 -1.6,0.4 -3.2,0.8 -5.2,0.8 h -0.4 -73.6 c -2.4,-4 -6.4,-6.8 -11.6,-6.8 h -32.8 c -7.2,0 -12.8,6 -12.8,12.8 0.4,7.2 6,12.8 13.2,12.8 H 235 c 4.8,0 9.2,-2.8 11.6,-6.8 h 74.4 2.8 c 2.8,0 5.2,-0.8 7.6,-1.6 3.2,-1.2 5.6,-2.8 8,-5.2 2,-2.4 3.6,-5.2 4.8,-8.8 0.8,-3.2 1.6,-7.2 1.6,-11.6 v -32 -1.2 c 0.4,-0.4 0.8,-0.8 1.2,-1.2 6.8,-6.8 11.6,-16 12.8,-26 0.4,-0.4 0.8,-0.4 0.8,-0.8 1.2,-1.2 2,-3.2 2,-4.8 V 148 c 0,-8.4 -0.8,-16.8 -2,-24.8 -2.4,-8.4 -4.4,-16.4 -7.2,-24.4 -2.8,-8 -6.4,-15.6 -10.8,-22.8 -4,-7.2 -8.8,-14 -14.4,-20.4 -0.4,-0.8 -1.2,-1.2 -2,-1.6 C 327,50.4 325.8,46 323,43.2 294.2,14.4 256.6,0 218.6,0 180.6,0 143,14.4 113.8,43.2 c -2.8,2.8 -4,7.2 -3.2,10.8 -0.8,0.4 -1.2,0.8 -2,1.6 C 103,62 98.2,68.8 94.2,76 c -4,7.2 -7.6,14.8 -10.8,22.8 -2.8,8 -5.2,16 -6.4,24.4 -1.6,8 -2,16.4 -2,24.8 v 33.2 c 0,2 0.8,3.6 2,4.8 0.4,0.4 0.8,0.4 0.8,0.8 z"/>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="pl-2 font-18 font-h-md-16 font-medium">Advanced Customer Service</span>
                                        </div>
                                        <span class="tgl-icon">
                                            <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 11 19" xml:space="preserve" width="11" height="19">
                                               <g transform="matrix(0.04363995,0,0,0.03981768,-4.9119388,-1.454e-6)">
                                                   <path d="m 360.731,229.075 -225.1,-225.1 c -5.3,-5.3 -13.8,-5.3 -19.1,0 -5.3,5.3 -5.3,13.8 0,19.1 l 215.5,215.5 -215.5,215.5 c -5.3,5.3 -5.3,13.8 0,19.1 2.6,2.6 6.1,4 9.5,4 3.4,0 6.9,-1.3 9.5,-4 l 225.1,-225.1 c 5.3,-5.2 5.3,-13.8 0.1,-19 z"/>
                                               </g>
                                            </svg>
                                        </span>
                                    </div>
                                </div>

                                <div id="collapseSix" class="collapse" aria-labelledby="feature-six">
                                    <div class="card-body border-top">
                                        Our Call Center Executives are always ready 24/7 to help you with your problems. They are fast, well trained, reliable and always ready to solve your problems. Also you can contact us on our Facebook page as well. Our Facebook page admins are always active to give you feedbacks.



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end features -->


<!-- services -->
<section class="row" id="services">
    <div class="container pt-5 px-lg-3 px-md-0">
        <div class="py-5 mx-auto">
            <div class="w-100">
                <h2 class="heading-title text-center mb-0">Our Services</h2>
            </div>
            <div class="col-12 py-5">
                <div class="row">
                    <div class="col-md-3">
                        <div class="d-flex w-100 justify-content-center">
                            <a href="#">
                                <div class="service-item d-flex align-items-center justify-content-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="60px" height="60px" viewBox="0 0 436.016 436.016" xml:space="preserve">
                                            <defs>
                                                <linearGradient id="grad" x1="0%" y1="0%" x2="0%" y2="100%">
                                                  <stop offset="0%" style="stop-color:#006A4D;stop-opacity:1" />
                                                  <stop offset="100%" style="stop-color:#1ca777;stop-opacity:1" />
                                                </linearGradient>
                                            </defs>
                                            <g>
                                                <path fill="#1db883" d="M309.565,157.136c2.469,5.195,8.668,9.2,14.42,9.314l5.134,0.102c-0.319,1.897-0.493,3.843-0.493,5.83   c0,19.356,15.747,35.104,35.103,35.104c19.356,0,35.104-15.748,35.104-35.104c0-19.356-15.748-35.103-35.104-35.103   c-6.711,0-12.987,1.896-18.325,5.177l-27.958-0.064c-3.579,0-6.595,1.523-8.272,4.178c-1.68,2.657-1.761,6.037-0.222,9.275   L309.565,157.136z"/>
                                                <path fill="#1db883" d="M432.563,254.603l-21.718-30.259c-3.113-4.336-9.055-10.208-17.238-10.208h-59.755c-5.812,0-12.993,2.993-17.084,5.07   l-15.31,7.775c-1.14,0.579-2.665,1.029-4.338,1.318c0.026-0.361,0.055-0.722,0.055-1.09v-65.162c0-8.271-6.729-15-15-15h-56.869   c-8.271,0-15,6.729-15,15v65.162c0,8.271,6.729,15,15,15h25.587c1.889,1.846,4.1,3.329,6.494,4.214l26.75,9.894   c3.166,1.171,7.296,1.816,11.628,1.816c0.001,0,0.001,0,0.001,0c3.917,0,7.669-0.543,10.563-1.53l20.522-6.995v171.537   c0,7.72,6.28,14,14,14h2.744c7.72,0,14-6.28,14-14v-91.026h12.269v91.026c0,7.72,6.28,14,14,14h2.742c7.72,0,14-6.28,14-14V312.617   c6.203-1.081,12.727-5.189,16.091-10.406l16.416-25.455C437.188,270.439,436.945,260.708,432.563,254.603z M400.607,254.837   l5.619,8.064c1.94,2.786,1.921,7.846-0.042,10.616l-5.577,7.872V254.837z"/>
                                                <path fill="url(#grad)" d="M176.297,0.873H11c-6.065,0-11,4.935-11,11v276.419c0,6.065,4.935,11,11,11h165.297c6.065,0,11-4.935,11-11V11.873   C187.297,5.807,182.362,0.873,176.297,0.873z M57.921,196.965H23.254v-16.756h34.667V196.965z M156.85,136.902H30.447V32.456   H156.85V136.902z"/>
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="w-100 mt-5">
                            <a href="home-delivery.html">
                                <p class="mb-0 font-18 text-center">E-commerce Delivery</p>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="d-flex w-100 justify-content-center">
                            <a href="#">
                                <div class="service-item d-flex align-items-center justify-content-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="60px" height="60px" viewBox="0 0 490 490"  xml:space="preserve">
                                            <defs>
                                                <linearGradient id="gr-grad" x1="0%" y1="0%" x2="0%" y2="100%">
                                                  <stop offset="0%" style="stop-color:#006A4D;stop-opacity:1" />
                                                  <stop offset="100%" style="stop-color:#1ca777;stop-opacity:1" />
                                                </linearGradient>
                                            </defs>
                                            <g>
                                                <g fill="url(#gr-grad)">
                                                    <circle cx="45.303" cy="46.545" r="45.303"/>
                                                    <path d="M180.95,180.706c-3.127-10.258-13.46-15.58-24.234-12.913c-2.269,0.562-24.048,6.797-44.012-4.012    c-17.35-9.394-28.576-27.506-32.559-33.711c-8.06-12.556-19.313-22.588-34.841-22.588c-21.072,0-38.149,17.079-38.149,38.147    v119.885c0,13.415,6.922,25.21,17.39,32.012v170.472c0,11.468,9.294,20.761,20.759,20.761s20.76-9.293,20.76-20.761V297.525    c10.467-6.802,17.39-18.597,17.39-32.011v-74.35c3.374,2.426,6.959,4.707,10.761,6.766c15.541,8.413,31.75,10.765,45.01,10.765    c16.155,0,27.938-3.489,28.812-3.756C178.291,201.813,184.074,190.964,180.95,180.706z"/>
                                                </g>
                                                <g fill="url(#gr-grad)">
                                                    <circle cx="444.697" cy="46.545" r="45.303"/>
                                                    <path d="M309.05,180.706c3.127-10.258,13.972-16.04,24.235-12.913c0.121,0.034,24.048,6.797,44.012-4.012    c17.35-9.394,28.575-27.506,32.559-33.711c8.06-12.556,19.313-22.588,34.841-22.588c21.072,0,38.149,17.079,38.149,38.147v119.885    c0,13.415-6.923,25.21-17.39,32.012v170.472c0,11.468-9.294,20.761-20.76,20.761c-11.465,0-20.76-9.293-20.76-20.761V297.525    c-10.467-6.802-17.391-18.597-17.391-32.011v-74.35c-3.374,2.426-6.959,4.707-10.76,6.766    c-15.541,8.413-31.75,10.765-45.011,10.765c-16.155,0-27.937-3.489-28.811-3.756C311.708,201.814,305.927,190.964,309.05,180.706z    "/>
                                                </g>
                                                <path fill="#006A4D" d="M249.749,113.173h-36.702c-0.604,0-1.093,0.489-1.093,1.093v20.428c0,1.584-1.289,2.873-2.874,2.873H191.02   c-1.584,0-2.873-1.289-2.873-2.873v-20.428c0-0.604-0.489-1.093-1.093-1.093h-36.703c-8.138,0-14.759,6.621-14.759,14.759v24.693   c0,0.51,0.352,0.951,0.849,1.065c1.915,0.438,4.248,0.652,7.134,0.652c5.222,0,11.063-0.711,15.754-1.279   c1.041-0.126,5.614-0.53,6.797-0.557c13.289-0.294,24.919,9.337,29.322,23.779c5.553,18.239-4.763,37.595-22.995,43.148   c-1.482,0.452-15.007,4.414-33.228,4.414c-0.713,0-1.891-0.022-2.52-0.035c-0.294-0.006-0.577,0.107-0.786,0.313   c-0.21,0.206-0.327,0.487-0.327,0.78v10.513c0,8.139,6.621,14.76,14.759,14.76h99.398c8.139,0,14.76-6.621,14.76-14.76V127.932   C264.509,119.794,257.888,113.173,249.749,113.173z"/>
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="w-100 mt-5">
                            <a href="pick-drop.html">
                                <p class="mb-0 font-18 text-center">Pick and Drop</p>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="d-flex w-100 justify-content-center">
                            <a href="#">
                                <div class="service-item d-flex align-items-center justify-content-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="60px" height="60px" viewBox="0 0 459.419 459.419" xml:space="preserve">
                                            <defs>
                                                <linearGradient id="gr-grad1" x1="0%" y1="0%" x2="0%" y2="100%">
                                                  <stop offset="0%" style="stop-color:#006A4D;stop-opacity:.8" />
                                                  <stop offset="100%" style="stop-color:#1ca777;stop-opacity:1" />
                                                </linearGradient>
                                            </defs>
                                            <g>
                                                <polygon fill="url(#gr-grad1)" points="83.115,172.911 376.304,172.911 376.304,459.419 458.777,459.419 458.777,106.956     223.178,0 0.642,106.956 0.642,459.419 83.115,459.419   "/>
                                                <rect fill="#1cbe87" x="171.155" y="403.543" width="52.023" height="44.878"/>
                                                <rect fill="#1cbe87" x="235.005" y="403.543" width="52.023" height="44.878"/>
                                                <rect fill="#1cbe87" x="107.313" y="403.543" width="52.023" height="44.878"/>
                                                <rect fill="#1cbe87" x="171.155" y="341.985" width="52.023" height="44.878"/>
                                                <rect fill="#1cbe87" x="107.313" y="341.985" width="52.023" height="44.878"/>
                                                <rect fill="#1cbe87" x="235.005" y="341.985" width="52.023" height="44.878"/>
                                                <rect fill="#1cbe87" x="171.155" y="280.436" width="52.023" height="44.878"/>
                                                <rect fill="#1cbe87" x="107.313" y="280.436" width="52.023" height="44.878"/>
                                                <rect fill="#1cbe87" x="298.847" y="403.543" width="52.023" height="44.878"/>
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="w-100 mt-5">
                            <a href="warehousing.html">
                                <p class="mb-0 font-18 text-center">Warehousing</p>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="d-flex w-100 justify-content-center">
                            <a href="#">
                                <div class="service-item d-flex align-items-center justify-content-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="60px" height="60px" viewBox="0 0 612 612" xml:space="preserve">
                                            <defs>
                                                <linearGradient id="gr-grad2" x1="0%" y1="0%" x2="0%" y2="100%">
                                                  <stop offset="0%" style="stop-color:#006A4D;stop-opacity:.9" />
                                                  <stop offset="100%" style="stop-color:#1ca777;stop-opacity:1" />
                                                </linearGradient>
                                            </defs>
                                            <g>
                                                <path fill="url(#gr-grad2)" d="M482.188,83.333L184.622,223.225v89.832l-51.91-23.082v-89.832L430.278,60.252l-99.946-44.439   c-13.383-5.95-35.281-5.95-48.664,0L35.557,125.243C15.95,133.961-0.05,158.649,0,180.107l0.606,256.534   c0.051,21.686,16.408,46.401,36.348,54.926L282.42,596.499c12.945,5.534,34.129,5.534,47.075,0.003l245.55-104.936   c19.939-8.521,36.297-33.234,36.348-54.919L612,180.107c0.051-21.458-15.949-46.146-35.557-54.864L482.188,83.333z    M556.398,288.675l-14.403,6.683l-0.292,101.353c-0.013,4.429-3.925,9.701-8.727,11.773l-21.563,9.309   c-4.727,2.041-8.551,0.149-8.554-4.223l-0.073-100.021l-13.951,6.472c-6.562,3.044-10.669-1.729-7.411-8.601l33.348-70.356   c3.366-7.102,11.806-11.199,15.184-7.347l34.221,39.012C567.593,276.623,563.257,285.494,556.398,288.675z M415.596,451.443   c0.037,4.243-3.55,9.24-8.001,11.162l-19.996,8.632c-4.385,1.893-7.972,0.029-8.022-4.16l-1.171-95.826l-12.938,6.002   c-6.085,2.823-9.968-1.808-7.006-8.344l30.31-66.881c3.057-6.747,10.873-10.541,14.062-6.805l32.301,37.836   c3.226,3.777-0.712,12.202-7.062,15.147l-13.338,6.188L415.596,451.443z M580.201,423.619c-0.015,2.226-2.016,4.865-4.468,5.896   l-228.395,95.95c-2.131,0.896-3.884-0.043-3.915-2.096l-0.175-11.162c-0.032-2.058,1.67-4.463,3.805-5.372l228.802-97.467   c2.455-1.046,4.438-0.086,4.423,2.146L580.201,423.619z"/>
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="w-100 mt-5">
                            <a href="packaging.html">
                                <p class="mb-0 font-18 text-center">Packaging</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end services -->

<!-- curier hub -->
<section class="row" id="service-area">
    <div class="container py-5">
        <div class="w-75 mbl-width py-5 mx-auto">
            <div class="w-100 pb-3">
                <h2 class="heading-title text-center">Service Area</h2>
            </div>
            <div class="w-100 d-flex justify-content-center"><a href="coverage-area.html" id="gotoregister" role="button" class="btn bg-white border-0 without-focus text-color-0-1 text-uppercase font-medium font-16">View Full Coverage</a></div>
        </div>
    </div>
</section>
<!-- end of curier hub -->


<!-- pricing plan -->
<section class="row" id="pricing">
    <div class="container py-5">
        <div class="pb-5">
            <div class="w-100 pb-3">
                <h2 class="heading-title text-center">Calculate Charge</h2>

            </div>


            <pricing-calc></pricing-calc>

        </div>
    </div>
</section>
<!-- end of pricing plan -->


<!-- registration -->

<!-- end of registration -->



</div>

<!-- mobile device -->
<div class="d-block d-md-none">
			<!-- header -->
			<section class="row p-xl-4 p-md-2 spacing bg-img">
				<div class="container px-0">
					<div class="col-12">
						<div class="row">
							<div class="col-lg-8 col-md-6">
								<div class="pt-5 pb-4 feature-content">
									<div class="feature-text pt-3 text-white">
										<h1 class="font-sm-16">Parcel Delivered</h1>
										<h1 class="font-sm-16">On Time with no Hassle</h1>
									</div>
									<div class="py-4">
										<a class="btn bg-white border-0 without-focus text-color-0-1 text-uppercase font-medium font-11" href="register" id="mbl-gotoregister" role="button">BECOME A MERCHANT</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12">
						<div class="row pt-md-2 pt-sm-5 pt-3 pb-5">
							<div class="card border-0 track-elem mbl-width mx-auto">
								<div class="card-body p-3">
									<tracking></tracking>
									<!-- end of track result -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end of header -->


			<!-- counter -->
			<section class="row">
				<div class="container py-3">
					<div class="col-12">
						<div class="row">
							<div class="col-md-3 col-6 showcase">
								<div class="row text-center">
									<div class="box mx-auto d-flex justify-content-center mb-2 align-items-center">
										<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 258.75 245.75" xml:space="preserve" width="37" height="43">
										  <g transform="translate(0,1)">
										    <circle cx="129.375" cy="60" r="60" fill="#006A4D"/>
										    <path fill="#006A4D" d="m 129.375,136 c -60.061,0 -108.75,48.689 -108.75,108.75 h 217.5 C 238.125,184.689 189.436,136 129.375,136 Z"/>
										  </g>
										</svg>
									</div>
									<div class="w-100">
										<h1 class="text-seagreen mb-1">9422+</h1>
										<p class="font-sm-13 text-color-12">Our Happy Clients</p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-6 showcase">
								<div class="row text-center">
									<div class="box mx-auto d-flex justify-content-center mb-2 align-items-center">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="-62 0 512 512.001" width="37" height="43">
											<g fill-rule="evenodd">
												<path fill="#006A4D" d="m342.234375 0h-81.003906c-24.804688 0-45 20.195312-45 45v26.992188h-23c-8.285157 0-15 6.71875-15 15 0 8.285156 6.714843 15 15 15h23.324219c3.816406 43.886718 40.664062 78.003906 85.175781 78.003906 47.21875 0 85.503906-38.285156 85.503906-85.503906 0-16.480469 0-32.996094 0-49.492188 0-24.804688-20.195313-45-45-45zm0 0"/>
												<path fill="#006A4D" d="m266.777344 217.53125c-10.945313 4.941406-20.667969 12.101562-28.574219 20.894531l-80.640625 82.570313h-112.5625c-24.78125 0-45 20.222656-45 45.003906 0 24.777344 20.222656 45 45 45h126.003906c13.824219 0 27.527344-3.472656 37.820313-13.839844l13.410156-13.5v113.332032c0 7.265624 5.160156 13.625 12.015625 15.007812l138.003906-.007812c8.273438-.007813 14.980469-6.722657 14.980469-15v-201.496094c0-61.597656-63.984375-103.453125-120.457031-77.964844zm0 0"/>
												<path fill="#006A4D" d="m41.226562 290.996094h108.003907c8.285156 0 15-6.714844 15-15v-107c0-8.285156-6.714844-15-15-15h-39v25.765625c0 8.285156-6.71875 15-15 15-8.285157 0-15-6.714844-15-15v-25.765625h-39.003907c-8.28125 0-15 6.714844-15 15v107c0 8.285156 6.71875 15 15 15zm0 0"/>
											</g>
										</svg>
									</div>
									<div class="w-100">
										<h1 class="text-seagreen mb-1">524+</h1>
										<p class="font-sm-13 text-color-12">Delivery Men & Staffs</p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-6 showcase">
								<div class="row text-center">
									<div class="box mx-auto d-flex justify-content-center mb-2 align-items-center">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="37" height="43" viewBox="0 0 481.083 481.083" xml:space="preserve">
											<g>
												<path fill="#006A4D" d="M466.474,314.693c-7.675-3.647-21.885-6.894-46.002-1.642c-1.667,0.306-112.113,19.947-132.733,23.652    c-3.178,0.57-5.119,4.43-5.119,4.43c-40.774,62.781-105.437,17.883-105.142,16.967c36.45,10.105,67.417-3.995,79.028-17.938    c27.118-32.562-15.759-37.398-38.477-42.924c-85.094-20.693-88.682,0.514-137.964,5.199L4.522,313.136    c-1.712,0.519-3.128,1.734-3.899,3.349c-0.772,1.614-0.83,3.479-0.16,5.138l3.051,7.545c7.604,18.809,15.251,46.834,23.292,65.875    c0.517,1.227,1.407,2.262,2.544,2.957c0.252,0.154,0.589,0.344,1.011,0.545c1.508,0.717,3.208,1.143,4.595,1.141l53.686-1.061    c2.814-0.018,122.088,69.213,179.354,46.277l178.373-79.97c7.098-3.359,14.436-6.832,21.741-10.207    c7.973-3.683,12.927-12.146,12.972-20.372C481.129,325.753,475.685,319.07,466.474,314.693z"/>
												<path fill="#006A4D" d="M96.832,111.858h5.355v128.519c0,9.859,7.993,17.852,17.853,17.852h241.001c9.859,0,17.852-7.993,17.852-17.852V111.858    h5.356c4.931,0,8.927-3.997,8.927-8.926V40.451c0-4.93-3.996-8.926-8.927-8.926H96.832c-4.93,0-8.926,3.996-8.926,8.926v62.482    C87.906,107.861,91.901,111.858,96.832,111.858z M220.457,57.521h40.167c7.888,0,14.282,6.395,14.282,14.282    c0,7.888-6.396,14.281-14.282,14.281h-40.167c-7.887,0-14.281-6.394-14.281-14.281C206.175,63.916,212.569,57.521,220.457,57.521z    "/>
											</g>
										</svg>
									</div>
									<div class="w-100">
										<h1 class="text-seagreen mb-1">950K+</h1>
										<p class="font-sm-13 text-color-12">Parcels Delivered</p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-6 showcase">
								<div class="row text-center">
									<div class="box mx-auto d-flex justify-content-center mb-2 align-items-center">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="37" height="43" viewBox="0 0 890.5 890.5" xml:space="preserve">
											<g>
												<path fill="#006A4D" d="M208.1,180.56l355-96.9l-18.8-38c-12.3-24.7-42.3-34.9-67-22.6l-317.8,157.5H208.1z"/>
												<path fill="#006A4D" d="M673.3,86.46c-4.399,0-8.8,0.6-13.2,1.8l-83.399,22.8L322,180.56h289.1h126l-15.6-57.2    C715.5,101.06,695.3,86.46,673.3,86.46z"/>
												<path fill="#006A4D" d="M789.2,215.56h-11.4h-15.5h-15.5H628.5H193.8h-57h-48h-8.9H50.1c-15.8,0-29.9,7.3-39.1,18.8c-4.2,5.3-7.4,11.4-9.2,18.1    c-1.1,4.2-1.8,8.6-1.8,13.1v6v57v494.1c0,27.601,22.4,50,50,50h739.1c27.601,0,50-22.399,50-50v-139.5H542.4    c-46.9,0-85-38.1-85-85v-45.8v-15.5v-15.5v-34.4c0-23,9.199-43.899,24.1-59.199c13.2-13.601,30.9-22.801,50.7-25.101    c3.3-0.399,6.7-0.6,10.1-0.6h255.2H813h15.5h10.6v-136.5C839.2,237.96,816.8,215.56,789.2,215.56z"/>
												<path fill="#006A4D" d="M874.2,449.86c-5-4.6-10.9-8.1-17.5-10.4c-5.101-1.699-10.5-2.699-16.2-2.699h-1.3h-1h-15.5h-55.9H542.4    c-27.601,0-50,22.399-50,50v24.899v15.5v15.5v55.4c0,27.6,22.399,50,50,50h296.8h1.3c5.7,0,11.1-1,16.2-2.7    c6.6-2.2,12.5-5.8,17.5-10.4c10-9.1,16.3-22.3,16.3-36.899v-111.3C890.5,472.16,884.2,458.959,874.2,449.86z M646.8,552.36    c0,13.8-11.2,25-25,25h-16.6c-13.8,0-25-11.2-25-25v-16.6c0-8,3.7-15.101,9.6-19.601c4.3-3.3,9.601-5.399,15.4-5.399h4.2H621.8    c13.8,0,25,11.199,25,25V552.36L646.8,552.36z"/>
											</g>
										</svg>
									</div>
									<div class="w-100">
										<h1 class="text-seagreen mb-1">1,153M+</h1>
										<p class="font-sm-13 text-color-12">Total Amount Paid</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end of counter -->


			<!-- features -->
			<section class="row">
				<div class="container">
					<div class="py-4 mx-auto">
						<div class="col-12">
							<div class="row">
								<div class="col-md-6 px-0">
									<div class="w-100">
										<div class="card feature-accordion mb-3 border-0">
										    <div class="card-header py-0 bg-white border-bottom-0" id="feature-one">
										    	<div class="cursor-pointer py-3 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										    		<div class="d-block">
											    		<span class="ft-icon">
											    			<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" width="32" height="24" viewBox="0 0 32 24" xml:space="preserve">
											    			   <g transform="matrix(0.05228758,0,0,0.05579799,0,-5.0742123)">
											    			   	<path fill="#006A4D" d="M 21.474,377.522 V 117.138 c 0,-14.469 11.729,-26.199 26.199,-26.199 h 260.25 c 14.469,0 26.198,11.73 26.198,26.199 v 260.385 c 0,4.823 -3.909,8.733 -8.733,8.733 H 30.207 c -4.824,0 -8.733,-3.91 -8.733,-8.734 z m 210.16,89.202 c 0,30.01 -24.329,54.338 -54.338,54.338 -30.009,0 -54.338,-24.328 -54.338,-54.338 0,-30.011 24.329,-54.338 54.338,-54.338 30.009,0 54.338,24.327 54.338,54.338 z m -27.17,0 c 0,-15.005 -12.164,-27.169 -27.169,-27.169 -15.005,0 -27.17,12.164 -27.17,27.169 0,15.005 12.165,27.17 27.17,27.17 15.005,0 27.169,-12.165 27.169,-27.17 z M 130.495,412.385 H 8.733 C 3.91,412.385 0,416.295 0,421.118 v 26.495 c 0,4.823 3.91,8.733 8.733,8.733 h 97.598 c 2.548,-17.484 11.373,-32.928 24.164,-43.961 z m 385.443,54.339 c 0,30.01 -24.329,54.338 -54.338,54.338 -30.01,0 -54.338,-24.328 -54.338,-54.338 0,-30.011 24.328,-54.338 54.338,-54.338 30.009,-0.001 54.338,24.327 54.338,54.338 z m -27.168,0 c 0,-15.005 -12.165,-27.169 -27.17,-27.169 -15.006,0 -27.169,12.164 -27.169,27.169 0,15.005 12.164,27.17 27.169,27.17 15.005,0 27.17,-12.165 27.17,-27.17 z M 612,421.118 v 26.495 c 0,4.823 -3.91,8.733 -8.733,8.733 h -70.704 c -5.057,-34.683 -34.906,-61.427 -70.961,-61.427 -36.062,0 -65.912,26.745 -70.969,61.427 H 248.261 c -2.549,-17.483 -11.373,-32.928 -24.164,-43.961 H 359.091 V 162.594 c 0,-9.646 7.82,-17.466 17.466,-17.466 h 82.445 c 23.214,0 44.911,11.531 57.9,30.77 l 53.15,78.721 c 7.796,11.547 11.962,25.161 11.962,39.094 v 118.672 h 21.253 c 4.823,0 8.733,3.91 8.733,8.733 z M 523.408,256.635 480.907,196.242 c -1.636,-2.324 -4.3,-3.707 -7.142,-3.707 H 407.47 c -4.822,0 -8.733,3.91 -8.733,8.733 v 60.393 c 0,4.824 3.91,8.733 8.733,8.733 h 108.798 c 7.074,0 11.212,-7.973 7.14,-13.759 z"/>
											    			   </g>
											    			</svg>
											    		</span>
											    		<span class="pl-2 font-sm-13 font-medium">Daily Pick up, No limitations</span>
										    		</div>
										    		<span class="ft-toggler">
										    			<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" width="11" height="19" viewBox="0 0 11 19.000001" xml:space="preserve">
										    			<g transform="matrix(0.04270692,0,0,0.04204963,-4.1484861,-2.1948759e-4)">
										    				<path d="M 345.441,248.292 151.154,442.573 c -12.359,12.365 -32.397,12.365 -44.75,0 -12.354,-12.354 -12.354,-32.391 0,-44.744 L 278.318,225.92 106.409,54.017 c -12.354,-12.359 -12.354,-32.394 0,-44.748 12.354,-12.359 32.391,-12.359 44.75,0 l 194.287,194.284 c 6.177,6.18 9.262,14.271 9.262,22.366 0,8.099 -3.091,16.196 -9.267,22.373 z"/>
										    			</g>
										    			</svg>
										    		</span>
										    	</div>
										    </div>

										    <div id="collapseOne" class="collapse" aria-labelledby="feature-one">
										    	<div class="card-body border-top">
													Stk It Solution Ltd gives you the opportunity of unlimited pickup. You can give any amount of parcels regardless of their size and weight. Also you don’t have to bring your parcels to our office! Our trusted pickup man will visit your location and pick up your parcels on behalf of you. You can request for pickup for every day of the week.
										    	</div>
										    </div>
										</div>
										<div class="card feature-accordion mb-3 border-0">
										    <div class="card-header py-0 bg-white border-bottom-0" id="feature-two">
										    	<div class="cursor-pointer py-3 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
										    		<div class="d-block">
											    		<span class="ft-icon">
											    			<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 32.000001 24.000001" xml:space="preserve" width="32" height="24">
											    			   <g transform="matrix(0.04575195,0,0,0.04399403,2.0000106,-1.4620868)">
											    			   	<path fill="#006A4D" d="M 588.63,113.193 213.812,33.871 c -15.858,-3.355 -31.576,6.876 -34.931,22.734 l -7.121,45.762 432.477,91.519 7.121,-45.762 c 3.355,-15.852 -6.87,-31.575 -22.728,-34.931 z"/>
											    			   	<path fill="#006A4D" d="m 431.009,203.591 c -4.378,-15.766 -20.854,-25.085 -36.615,-20.714 L 323.24,202.63 155.498,167.13 137.05,254.295 21.786,286.287 c -15.76,4.372 -25.079,20.848 -20.708,36.609 l 64.958,234.078 c 4.378,15.76 20.855,25.085 36.615,20.708 L 475.259,474.279 c 15.76,-4.378 25.079,-20.848 20.708,-36.615 l -11.15,-40.184 41.789,8.835 c 15.858,3.361 31.576,-6.87 34.931,-22.728 L 587.976,258.65 437.45,226.797 Z m 43.031,118.968 9.215,-43.552 c 1.384,-6.521 7.85,-10.727 14.37,-9.35 l 43.552,9.221 c 6.527,1.384 10.733,7.843 9.356,14.37 l -9.215,43.552 c -1.384,6.521 -7.849,10.733 -14.37,9.35 l -43.552,-9.215 c -6.533,-1.389 -10.74,-7.855 -9.356,-14.376 z M 28.27,309.646 131.385,281.04 l 243.299,-67.517 26.181,-7.274 c 0.478,-0.129 0.955,-0.19 1.421,-0.19 2.1,0 4.611,1.378 5.345,4.017 l 3.074,11.07 9.631,34.704 L 37.148,362.186 24.443,316.418 c -0.796,-2.872 0.956,-5.976 3.827,-6.772 z m 444.331,134.495 c 0.49,1.776 -0.024,3.245 -0.545,4.164 -0.514,0.918 -1.506,2.119 -3.282,2.608 L 96.173,554.316 c -0.471,0.129 -0.955,0.196 -1.421,0.196 -2.1,0 -4.611,-1.384 -5.345,-4.023 L 51.519,413.955 434.707,307.613 l 23.371,84.208 z"/>
											    			   	<path fill="#006A4D" d="m 156.379,453.484 c -1.788,-6.429 -8.499,-10.225 -14.928,-8.443 l -43.515,12.08 c -6.423,1.782 -10.225,8.499 -8.437,14.928 l 12.074,43.509 c 1.788,6.429 8.499,10.225 14.928,8.437 l 43.515,-12.074 c 6.429,-1.782 10.225,-8.499 8.443,-14.928 z"/>
											    			   </g>
											    			</svg>
											    		</span>
											    		<span class="pl-2 font-sm-13 font-medium">Faster Payment Service</span>
										    		</div>
										    		<span class="ft-toggler">
										    			<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" width="11" height="19" viewBox="0 0 11 19.000001" xml:space="preserve">
										    			<g transform="matrix(0.04270692,0,0,0.04204963,-4.1484861,-2.1948759e-4)">
										    				<path d="M 345.441,248.292 151.154,442.573 c -12.359,12.365 -32.397,12.365 -44.75,0 -12.354,-12.354 -12.354,-32.391 0,-44.744 L 278.318,225.92 106.409,54.017 c -12.354,-12.359 -12.354,-32.394 0,-44.748 12.354,-12.359 32.391,-12.359 44.75,0 l 194.287,194.284 c 6.177,6.18 9.262,14.271 9.262,22.366 0,8.099 -3.091,16.196 -9.267,22.373 z"/>
										    			</g>
										    			</svg>
										    		</span>
										    	</div>
										    </div>

										    <div id="collapseTwo" class="collapse" aria-labelledby="feature-two">
										    	<div class="card-body border-top">
													At Stk It Solution Ltd you can request for your payment every six days of the week.  We Courier provides multiple payment methods such as cash, Bkash or Rocket payment. Also you can collect the money simply by transferring your current balance to your preferred Bank. Our faster and secure payment service will provide the ultimate solution to your payment problem which can occur using a logistics service.
										    	</div>
										    </div>
										</div>
										<div class="card feature-accordion mb-3 border-0">
										    <div class="card-header py-0 bg-white border-bottom-0" id="feature-three">
										    	<div class="cursor-pointer py-3 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
										    		<div class="d-block">
											    		<span class="ft-icon">
											    			<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" width="32" height="26" viewBox="0 0 32 26" xml:space="preserve">
											    			   <g transform="matrix(0.03368894,0,0,0.03041577,1,-0.5426301)">
											    					<path fill="#006A4D" d="m 208.1,180.56 355,-96.9 -18.8,-38 C 532,20.96 502,10.76 477.3,23.06 l -317.8,157.5 z"/>
											    					<path fill="#006A4D" d="m 673.3,86.46 c -4.399,0 -8.8,0.6 -13.2,1.8 L 576.701,111.06 322,180.56 h 289.1 126 l -15.6,-57.2 c -6,-22.3 -26.2,-36.9 -48.2,-36.9 z"/>
											    					<path fill="#006A4D" d="m 789.2,215.56 h -11.4 -15.5 -15.5 -118.3 -434.7 -57 -48 -8.9 -29.8 c -15.8,0 -29.9,7.3 -39.1,18.8 -4.2,5.3 -7.4,11.4 -9.2,18.1 -1.1,4.2 -1.8,8.6 -1.8,13.1 v 6 57 494.1 c 0,27.601 22.4,50 50,50 h 739.1 c 27.601,0 50,-22.399 50,-50 V 683.16 H 542.4 c -46.9,0 -85,-38.1 -85,-85 v -45.8 -15.5 -15.5 -34.4 c 0,-23 9.199,-43.899 24.1,-59.199 13.2,-13.601 30.9,-22.801 50.7,-25.101 3.3,-0.399 6.7,-0.6 10.1,-0.6 h 255.2 15.5 15.5 10.6 v -136.5 c 0.1,-27.6 -22.3,-50 -49.9,-50 z"/>
											    					<path fill="#006A4D" d="m 874.2,449.86 c -5,-4.6 -10.9,-8.1 -17.5,-10.4 -5.101,-1.699 -10.5,-2.699 -16.2,-2.699 h -1.3 -1 -15.5 -55.9 -224.4 c -27.601,0 -50,22.399 -50,50 v 24.899 15.5 15.5 55.4 c 0,27.6 22.399,50 50,50 h 296.8 1.3 c 5.7,0 11.1,-1 16.2,-2.7 6.6,-2.2 12.5,-5.8 17.5,-10.4 10,-9.1 16.3,-22.3 16.3,-36.899 v -111.3 c 0,-14.601 -6.3,-27.802 -16.3,-36.901 z m -227.4,102.5 c 0,13.8 -11.2,25 -25,25 h -16.6 c -13.8,0 -25,-11.2 -25,-25 v -16.6 c 0,-8 3.7,-15.101 9.6,-19.601 4.3,-3.3 9.601,-5.399 15.4,-5.399 h 4.2 12.4 c 13.8,0 25,11.199 25,25 z"/>
											    				</g>
											    			</svg>
											    		</span>
											    		<span class="pl-2 font-sm-13 font-medium">Cash on Delivery</span>
										    		</div>
										    		<span class="ft-toggler">
										    			<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" width="11" height="19" viewBox="0 0 11 19.000001" xml:space="preserve">
										    			<g transform="matrix(0.04270692,0,0,0.04204963,-4.1484861,-2.1948759e-4)">
										    				<path d="M 345.441,248.292 151.154,442.573 c -12.359,12.365 -32.397,12.365 -44.75,0 -12.354,-12.354 -12.354,-32.391 0,-44.744 L 278.318,225.92 106.409,54.017 c -12.354,-12.359 -12.354,-32.394 0,-44.748 12.354,-12.359 32.391,-12.359 44.75,0 l 194.287,194.284 c 6.177,6.18 9.262,14.271 9.262,22.366 0,8.099 -3.091,16.196 -9.267,22.373 z"/>
										    			</g>
										    			</svg>
										    		</span>
										    	</div>
										    </div>

										    <div id="collapseThree" class="collapse" aria-labelledby="feature-three">
										    	<div class="card-body border-top">
													At Stk It Solution Ltd we will collect the cash on behalf of you. Our trusted delivery man will deliver your parcel to your customer and collect the money. And then with our various payment methods we will give your money back to you. Also we are giving you the opportunity of sending a non-conditioned parcel to delivery as well.
										    	</div>
										    </div>
										</div>
										<div class="card feature-accordion mb-3 border-0">
										    <div class="card-header py-0 bg-white border-bottom-0" id="feature-four">
										    	<div class="cursor-pointer py-3 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
										    		<div class="d-block">
											    		<span class="ft-icon">
											    			<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 32 24" xml:space="preserve" width="32" height="24">
										    			        <g transform="matrix(0.06543075,0,0,0.05484461,1.6837515,4.008e-6)" >
										    						<path fill="#006A4D" d="m 264.6,300.4 h -92 C 97,300.4 35.4,362 35.4,437.6 h 366.8 c -0.4,-75.2 -62,-137.2 -137.6,-137.2 z"/>
										    						<path fill="#006A4D" d="m 235,237.6 c 7.2,0 14,2.4 19.2,6.8 h 33.2 c 16.4,-17.2 26.4,-40 26.4,-65.6 0,-52.8 -42.8,-95.2 -95.2,-95.2 -52.4,0 -95.2,42.4 -95.2,95.2 0,35.6 19.6,66.8 48.8,83.2 3.2,-14 15.6,-24.4 30,-24.4 z"/>
										    						<path fill="#006A4D" d="m 77.8,186.8 c 1.2,10 6,19.2 12.8,26 5.2,5.2 12,9.2 19.6,11.6 -0.4,-1.6 -0.4,-3.2 -0.4,-4.4 v -77.6 c 0,-1.6 0,-3.2 0.4,-4.8 -7.6,2 -14,6 -19.6,11.6 -0.4,0.4 -1.2,1.2 -1.6,1.6 v -3.2 c 0,-7.6 0.8,-15.2 2,-22.4 1.2,-7.6 3.2,-14.8 6,-21.6 2.4,-7.2 5.6,-14 9.6,-20.4 3.6,-6.4 8,-12.8 12.8,-18.4 0.4,-0.4 0.8,-1.2 0.8,-1.6 3.6,0.4 7.2,-0.8 9.6,-3.2 24.4,-24.4 56.4,-36.4 88,-36.4 31.6,0 64,12 88,36.4 2.8,2.8 6.4,3.6 9.6,3.2 0.4,0.4 0.4,1.2 0.8,1.6 4.8,5.6 9.2,12 12.8,18.4 3.6,6.4 6.8,13.2 9.6,20.4 2.4,7.2 4.4,14.4 6,22 1.2,7.2 2,14.8 2,22.4 v 3.2 c -0.4,-0.8 -1.2,-1.2 -1.6,-1.6 -5.2,-5.2 -12,-9.2 -19.6,-11.6 0.4,1.6 0.4,3.2 0.4,4.8 V 220 c 0,1.6 0,3.2 -0.4,4.4 2,-0.4 4,-1.2 6,-2 v 25.2 c 0,2.8 -0.4,5.6 -0.8,7.6 -0.4,2 -1.2,3.2 -2,4.4 -0.8,0.8 -2,1.6 -3.2,2 -1.6,0.4 -3.2,0.8 -5.2,0.8 h -0.4 -73.6 c -2.4,-4 -6.4,-6.8 -11.6,-6.8 h -32.8 c -7.2,0 -12.8,6 -12.8,12.8 0.4,7.2 6,12.8 13.2,12.8 H 235 c 4.8,0 9.2,-2.8 11.6,-6.8 h 74.4 2.8 c 2.8,0 5.2,-0.8 7.6,-1.6 3.2,-1.2 5.6,-2.8 8,-5.2 2,-2.4 3.6,-5.2 4.8,-8.8 0.8,-3.2 1.6,-7.2 1.6,-11.6 v -32 -1.2 c 0.4,-0.4 0.8,-0.8 1.2,-1.2 6.8,-6.8 11.6,-16 12.8,-26 0.4,-0.4 0.8,-0.4 0.8,-0.8 1.2,-1.2 2,-3.2 2,-4.8 V 148 c 0,-8.4 -0.8,-16.8 -2,-24.8 -2.4,-8.4 -4.4,-16.4 -7.2,-24.4 -2.8,-8 -6.4,-15.6 -10.8,-22.8 -4,-7.2 -8.8,-14 -14.4,-20.4 -0.4,-0.8 -1.2,-1.2 -2,-1.6 C 327,50.4 325.8,46 323,43.2 294.2,14.4 256.6,0 218.6,0 180.6,0 143,14.4 113.8,43.2 c -2.8,2.8 -4,7.2 -3.2,10.8 -0.8,0.4 -1.2,0.8 -2,1.6 C 103,62 98.2,68.8 94.2,76 c -4,7.2 -7.6,14.8 -10.8,22.8 -2.8,8 -5.2,16 -6.4,24.4 -1.6,8 -2,16.4 -2,24.8 v 33.2 c 0,2 0.8,3.6 2,4.8 0.4,0.4 0.8,0.4 0.8,0.8 z"/>
										    					</g>
											    			</svg>
											    		</span>
											    		<span class="pl-2 font-sm-13 font-medium">Advanced Customer Service</span>
										    		</div>
										    		<span class="ft-toggler">
										    			<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" width="11" height="19" viewBox="0 0 11 19.000001" xml:space="preserve">
										    			<g transform="matrix(0.04270692,0,0,0.04204963,-4.1484861,-2.1948759e-4)">
										    				<path d="M 345.441,248.292 151.154,442.573 c -12.359,12.365 -32.397,12.365 -44.75,0 -12.354,-12.354 -12.354,-32.391 0,-44.744 L 278.318,225.92 106.409,54.017 c -12.354,-12.359 -12.354,-32.394 0,-44.748 12.354,-12.359 32.391,-12.359 44.75,0 l 194.287,194.284 c 6.177,6.18 9.262,14.271 9.262,22.366 0,8.099 -3.091,16.196 -9.267,22.373 z"/>
										    			</g>
										    			</svg>
										    		</span>
										    	</div>
										    </div>

										    <div id="collapseFour" class="collapse" aria-labelledby="feature-four">
										    	<div class="card-body border-top">
													Our Call Center Executives are always ready 24/7 to help you with your problems. They are fast, well trained, reliable and always ready to solve your problems. Also you can contact us on our Facebook page as well. Our Facebook page admins are always active to give you feedbacks.
										    	</div>
										    </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end features -->


			<!-- services -->
			<section class="row" id="mbl-services">
				<div class="container">
					<div class="py-sm-4 pt-4 pb-0 mx-auto">
						<div class="w-100 pb-2">
							<h2 class="heading-title text-center">Our Services</h2>
						</div>
						<div class="col-12 py-2">
							<div class="row">
								<div class="col-sm-3 col-6">
									<div class="service-item mx-auto d-flex align-items-center justify-content-center">
										<span>
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="38px" height="38px" viewBox="0 0 436.016 436.016" xml:space="preserve">
												<g>
													<path fill="#006A4D" d="M309.565,157.136c2.469,5.195,8.668,9.2,14.42,9.314l5.134,0.102c-0.319,1.897-0.493,3.843-0.493,5.83   c0,19.356,15.747,35.104,35.103,35.104c19.356,0,35.104-15.748,35.104-35.104c0-19.356-15.748-35.103-35.104-35.103   c-6.711,0-12.987,1.896-18.325,5.177l-27.958-0.064c-3.579,0-6.595,1.523-8.272,4.178c-1.68,2.657-1.761,6.037-0.222,9.275   L309.565,157.136z"/>
													<path fill="#006A4D" d="M432.563,254.603l-21.718-30.259c-3.113-4.336-9.055-10.208-17.238-10.208h-59.755c-5.812,0-12.993,2.993-17.084,5.07   l-15.31,7.775c-1.14,0.579-2.665,1.029-4.338,1.318c0.026-0.361,0.055-0.722,0.055-1.09v-65.162c0-8.271-6.729-15-15-15h-56.869   c-8.271,0-15,6.729-15,15v65.162c0,8.271,6.729,15,15,15h25.587c1.889,1.846,4.1,3.329,6.494,4.214l26.75,9.894   c3.166,1.171,7.296,1.816,11.628,1.816c0.001,0,0.001,0,0.001,0c3.917,0,7.669-0.543,10.563-1.53l20.522-6.995v171.537   c0,7.72,6.28,14,14,14h2.744c7.72,0,14-6.28,14-14v-91.026h12.269v91.026c0,7.72,6.28,14,14,14h2.742c7.72,0,14-6.28,14-14V312.617   c6.203-1.081,12.727-5.189,16.091-10.406l16.416-25.455C437.188,270.439,436.945,260.708,432.563,254.603z M400.607,254.837   l5.619,8.064c1.94,2.786,1.921,7.846-0.042,10.616l-5.577,7.872V254.837z"/>
													<path fill="#006A4D" d="M176.297,0.873H11c-6.065,0-11,4.935-11,11v276.419c0,6.065,4.935,11,11,11h165.297c6.065,0,11-4.935,11-11V11.873   C187.297,5.807,182.362,0.873,176.297,0.873z M57.921,196.965H23.254v-16.756h34.667V196.965z M156.85,136.902H30.447V32.456   H156.85V136.902z"/>
												</g>
											</svg>
										</span>
									</div>
									<div class="w-100 mt-4 mb-sm-0 mb-4 pb-sm-0 pb-2">
										<p class="mb-0 font-14 font-medium text-center">E-commerce Delivery</p>
									</div>
								</div>

								<div class="col-sm-3 col-6">
									<div class="service-item mx-auto d-flex align-items-center justify-content-center">
										<span>
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="38px" height="38px" viewBox="0 0 490 490"  xml:space="preserve">
												<g>
													<g fill="#006A4D">
														<circle cx="45.303" cy="46.545" r="45.303"/>
														<path d="M180.95,180.706c-3.127-10.258-13.46-15.58-24.234-12.913c-2.269,0.562-24.048,6.797-44.012-4.012    c-17.35-9.394-28.576-27.506-32.559-33.711c-8.06-12.556-19.313-22.588-34.841-22.588c-21.072,0-38.149,17.079-38.149,38.147    v119.885c0,13.415,6.922,25.21,17.39,32.012v170.472c0,11.468,9.294,20.761,20.759,20.761s20.76-9.293,20.76-20.761V297.525    c10.467-6.802,17.39-18.597,17.39-32.011v-74.35c3.374,2.426,6.959,4.707,10.761,6.766c15.541,8.413,31.75,10.765,45.01,10.765    c16.155,0,27.938-3.489,28.812-3.756C178.291,201.813,184.074,190.964,180.95,180.706z"/>
													</g>
													<g fill="#006A4D">
														<circle cx="444.697" cy="46.545" r="45.303"/>
														<path d="M309.05,180.706c3.127-10.258,13.972-16.04,24.235-12.913c0.121,0.034,24.048,6.797,44.012-4.012    c17.35-9.394,28.575-27.506,32.559-33.711c8.06-12.556,19.313-22.588,34.841-22.588c21.072,0,38.149,17.079,38.149,38.147v119.885    c0,13.415-6.923,25.21-17.39,32.012v170.472c0,11.468-9.294,20.761-20.76,20.761c-11.465,0-20.76-9.293-20.76-20.761V297.525    c-10.467-6.802-17.391-18.597-17.391-32.011v-74.35c-3.374,2.426-6.959,4.707-10.76,6.766    c-15.541,8.413-31.75,10.765-45.011,10.765c-16.155,0-27.937-3.489-28.811-3.756C311.708,201.814,305.927,190.964,309.05,180.706z    "/>
													</g>
													<path fill="#006A4D" d="M249.749,113.173h-36.702c-0.604,0-1.093,0.489-1.093,1.093v20.428c0,1.584-1.289,2.873-2.874,2.873H191.02   c-1.584,0-2.873-1.289-2.873-2.873v-20.428c0-0.604-0.489-1.093-1.093-1.093h-36.703c-8.138,0-14.759,6.621-14.759,14.759v24.693   c0,0.51,0.352,0.951,0.849,1.065c1.915,0.438,4.248,0.652,7.134,0.652c5.222,0,11.063-0.711,15.754-1.279   c1.041-0.126,5.614-0.53,6.797-0.557c13.289-0.294,24.919,9.337,29.322,23.779c5.553,18.239-4.763,37.595-22.995,43.148   c-1.482,0.452-15.007,4.414-33.228,4.414c-0.713,0-1.891-0.022-2.52-0.035c-0.294-0.006-0.577,0.107-0.786,0.313   c-0.21,0.206-0.327,0.487-0.327,0.78v10.513c0,8.139,6.621,14.76,14.759,14.76h99.398c8.139,0,14.76-6.621,14.76-14.76V127.932   C264.509,119.794,257.888,113.173,249.749,113.173z"/>
												</g>
											</svg>
										</span>
									</div>
									<div class="w-100 mt-4 mb-sm-0 mb-4 pb-sm-0 pb-2">
										<p class="mb-0 font-14 font-medium text-center">Pick and Drop</p>
									</div>
								</div>

								<div class="col-sm-3 col-6">
									<div class="service-item mx-auto d-flex align-items-center justify-content-center">
										<span>
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="38px" height="38px" viewBox="0 0 459.419 459.419" xml:space="preserve">
												<g>
													<polygon fill="#006A4D" points="83.115,172.911 376.304,172.911 376.304,459.419 458.777,459.419 458.777,106.956     223.178,0 0.642,106.956 0.642,459.419 83.115,459.419   "/>
													<rect fill="#006A4D" x="171.155" y="403.543" width="52.023" height="44.878"/>
													<rect fill="#006A4D" x="235.005" y="403.543" width="52.023" height="44.878"/>
													<rect fill="#006A4D" x="107.313" y="403.543" width="52.023" height="44.878"/>
													<rect fill="#006A4D" x="171.155" y="341.985" width="52.023" height="44.878"/>
													<rect fill="#006A4D" x="107.313" y="341.985" width="52.023" height="44.878"/>
													<rect fill="#006A4D" x="235.005" y="341.985" width="52.023" height="44.878"/>
													<rect fill="#006A4D" x="171.155" y="280.436" width="52.023" height="44.878"/>
													<rect fill="#006A4D" x="107.313" y="280.436" width="52.023" height="44.878"/>
													<rect fill="#006A4D" x="298.847" y="403.543" width="52.023" height="44.878"/>
												</g>
											</svg>
										</span>
									</div>
									<div class="w-100 mt-4 mb-sm-0 mb-4 pb-sm-0 pb-2">
										<p class="mb-0 font-14 font-medium text-center">Warehousing</p>
									</div>
								</div>

								<div class="col-sm-3 col-6">
									<div class="service-item mx-auto d-flex align-items-center justify-content-center">
										<span>
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="38px" height="38px" viewBox="0 0 612 612" xml:space="preserve">
												<g>
													<path fill="#006A4D" d="M482.188,83.333L184.622,223.225v89.832l-51.91-23.082v-89.832L430.278,60.252l-99.946-44.439   c-13.383-5.95-35.281-5.95-48.664,0L35.557,125.243C15.95,133.961-0.05,158.649,0,180.107l0.606,256.534   c0.051,21.686,16.408,46.401,36.348,54.926L282.42,596.499c12.945,5.534,34.129,5.534,47.075,0.003l245.55-104.936   c19.939-8.521,36.297-33.234,36.348-54.919L612,180.107c0.051-21.458-15.949-46.146-35.557-54.864L482.188,83.333z    M556.398,288.675l-14.403,6.683l-0.292,101.353c-0.013,4.429-3.925,9.701-8.727,11.773l-21.563,9.309   c-4.727,2.041-8.551,0.149-8.554-4.223l-0.073-100.021l-13.951,6.472c-6.562,3.044-10.669-1.729-7.411-8.601l33.348-70.356   c3.366-7.102,11.806-11.199,15.184-7.347l34.221,39.012C567.593,276.623,563.257,285.494,556.398,288.675z M415.596,451.443   c0.037,4.243-3.55,9.24-8.001,11.162l-19.996,8.632c-4.385,1.893-7.972,0.029-8.022-4.16l-1.171-95.826l-12.938,6.002   c-6.085,2.823-9.968-1.808-7.006-8.344l30.31-66.881c3.057-6.747,10.873-10.541,14.062-6.805l32.301,37.836   c3.226,3.777-0.712,12.202-7.062,15.147l-13.338,6.188L415.596,451.443z M580.201,423.619c-0.015,2.226-2.016,4.865-4.468,5.896   l-228.395,95.95c-2.131,0.896-3.884-0.043-3.915-2.096l-0.175-11.162c-0.032-2.058,1.67-4.463,3.805-5.372l228.802-97.467   c2.455-1.046,4.438-0.086,4.423,2.146L580.201,423.619z"/>
												</g>
											</svg>
										</span>
									</div>
									<div class="w-100 mt-4 mb-sm-0 mb-4 pb-sm-0 pb-2">
										<p class="mb-0 font-14 font-medium text-center">Packaging</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end services -->


			<!-- courier hub -->
			<section class="row" id="mbl-service-area">
				<div class="container">
					<div class="w-100 py-4 mx-auto">
						<div class="w-100 pb-3">
							<h2 class="heading-title text-center">Service Area</h2>
						</div>
						<div class="w-100 d-flex justify-content-center"><a href="coverage-area.html" id="gotoregister" role="button" class="btn bg-white border-0 without-focus text-color-0-1 text-uppercase font-medium font-16">View Full Coverage</a></div>
					</div>
				</div>
			</section>
			<!-- end of courier hub -->


			<!-- pricing plan -->
			<section class="row" id="mbl-pricing">
				<div class="container py-4">
					<div class="w-100">
						<div class="w-100">
							<h2 class="heading-title text-center">Calculate Pricing</h2>

						</div>

                        <div class="options">
 	<div class="row">
 		<div class="col-md-3 col-12">
 			<div class="form-group">
 				<label for="FromId">From</label>
 					<select id="FromId" class="form-control"></select>
 			</div>
 		</div>
 		<div class="col-md-3 col-12">
 			<div class="form-group">
 				<label for="destinationId">Destination</label>
 				<select id="destinationId" class="form-control"></select>
 			</div>
 		</div>
 		<div class="col-md-3 col-12">
 			<div class="form-group">
 				<label for="serviceId">Service</label>
 					<select id="serviceId" class="form-control">
 						<option value="1">Regular</option>
 						<option value="2">Same Day</option>
 					</select>
 			</div>
 		</div>
 		<div class="col-md-3 col-12">
 			<div class="form-group">
 				<label for="weightId">Weight (KG)</label>
 				<input type="text" id="weightId" placeholder="Parcel's Weight" class="form-control">
 			</div>
 		</div>
 	</div>
 	<div class="row">
 		<div class="col">
 			<div class="d-flex justify-content-center">
 				<div class="del-charge">
 					<strong>60 TK</strong>
 				</div>
 			</div>
 		</div>
 	</div>
 	<div class="row">
 		<div class="col">
 			<div class="d-flex justify-content-center">
 				<div class="pricing-condition">
 					<p class="text-danger"><!----></p> <p>* 1% Cash Handling &amp; Risk Management Charge will be added. </p> <p>* Price may vary due to parcel size. </p> <p>* All charges are VAT &amp; Tax excluded.  </p> <p>* Unavoidable circumstances may change in time of delivery.</p>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
            <pricing-calc></pricing-calc>
        </div>
    </div>
</section>
            <!-- end of pricing plan -->
</div>
@endsection
