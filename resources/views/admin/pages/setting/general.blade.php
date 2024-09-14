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
@if($message = Session::get("success"))
<div class="alert alert-success">
<p>{{$message}}</p>
</div>
@endif


<div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card card-custom">
                <div class="card-header">
                    <h3 class="card-title">
                        General Setting
                    </h3>

                </div>

                <form action="{{url('/general/changeGeneralSetting')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    
                    <div class="card-body">

                        <div class="form-group">
                            <label>Site Name <span class="text-danger">*</span></label>
                            <input name="site_name" type="text" required class="form-control" value="{{ $general_setting->site_name }}"
                                placeholder="Enter Title" />
                        </div>
                        <div class="form-group mt-4">
                            <label>Title <span class="text-danger">*</span></label>
                            <input name="title" required type="text" class="form-control" value="{{ $general_setting->title }}"
                                placeholder="Enter Title" />
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Logo <span class="text-danger">*</span> <small style="font-size:10px ">Image
                                            Maximum Size:120x45px; Recomended Size:105x45px;</small></label>
                                    <input name="logo"  id="logo" type="file" class="form-control" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Icon <span class="text-danger">*</span> <small>Icon Maximum
                                            Size:32X32px;</small></label>
                                    <input id="icon" name="icon"  type="file" class="form-control" />
                                </div>
                            </div>
                        </div>


                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Hotline<span class="text-danger">*</span></label>
                                    <input name="hotline" required value="{{ $general_setting->hotline }}" type="text"
                                        class="form-control" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Email<span class="text-danger">*</span></label>
                                    <input name="email" required value="{{ $general_setting->email }}" type="email"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>


                        <div class="form-group mt-4">
                            <label>Address<span class="text-danger">*</span></label>
                            <textarea name="address" required style="height: 130px;" class="form-control" placeholder="Address"
                                cols="10" rows="10">
                                                    {{ $general_setting->address }}
                                                </textarea>
                        </div>
                        <div class="form-group mt-4">
                            <label>Short Description<span class="text-danger">*</span></label>
                            <textarea name="short_description" class="form-control" placeholder="Short Description"
                                cols="10" rows="10">
                                                    {{ $general_setting->short_description }}
                                                </textarea>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Facebook Link</label>
                                    <input type="text" required placeholder="#" value="{{ $general_setting->facebook_link }}"
                                        class="form-control" name="facebook_link">
                                </div>


                            </div>
                            <div class="col-lg-4">

                                <div class="form-group">
                                    <label for="">Twitter Link</label>
                                    <input type="text"  placeholder="#" value="{{ $general_setting->twitter_link }}"
                                        class="form-control" name="twitter_link">
                                </div>

                            </div>
                            <div class="col-lg-4">

                                <div class="form-group">
                                    <label for="">Youtube Link</label>
                                    <input type="text" placeholder="#" value="{{ $general_setting->youtube_link }}"
                                        class="form-control" name="youtube_link">
                                </div>
                            </div>
                        </div>




                    </div>
                    <div class="card-footer">
                        <button id="submit" type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a type="reset" href="#" class="btn btn-danger">Back</a>
                    </div>
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    <script>
        $(window).ready(function(e) {
            $('#logo').on('change', function(e) {
                const files = event.target.files;
                console.log(files);
                //file size
                //file type
                //read upload image
                files.forEach(file => {
                    let reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = (evt) => {

                        //if you need check image file dimenssion,
                        /// write new image onload function
                        let img = new Image();
                        img.onload = () => {
                            if (img.width > 120 || img.height > 45) {
                                alert("Image Maximum Size 120*45px");
                                document.getElementById('submit').disabled = true
                                return;
                            } else {
                                document.getElementById('submit').disabled = false

                            }
                        }
                        img.src = evt.target.result;

                    }
                });

            })
            $('#icon').on('change', function(e) {
                const files = event.target.files;
                console.log(files);
                //file size
                //file type
                //read upload image
                files.forEach(file => {
                    let reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = (evt) => {

                        //if you need check image file dimenssion,
                        /// write new image onload function
                        let img = new Image();
                        img.onload = () => {
                            console.log(img.width)
                            console.log(img.height)
                            if (img.width > 32 || img.height > 32) {
                                alert("Image Maximum Size 32*32px");
                                document.getElementById('submit').disabled = true
                                return;
                            } else {
                                document.getElementById('submit').disabled = false

                            }
                        }
                        img.src = evt.target.result;

                    }
                });

            })
        })
    </script>
@endsection