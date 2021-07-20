@extends('layouts.mainlayout')
@section('content')
<!-- add form for new student -->
<div class="center">
    <div class="tm-block-col tm-col-account-settings ">
        <div class="tm-bg-primary-dark tm-block tm-block-settings">
            <h2 class="tm-block-title"> Student Account Settings</h2>
            <form action="submit" method="POST" class="tm-signup-form row" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-lg-6">
                    <label for="name">First-Name</label>
                    <input id="First_name" name="firstname" type="text" class="form-control validate"/>
                    <span style="color:red">@error('firstname'){{$message}}@enderror</span>
                </div>
                <div class="form-group col-lg-6">
                    <label for="last-name">Last-Name</label>
                    <input id="Last_name" name="lastname" type="text" class="form-control " />
                    <span style="color:red">@error('lastname'){{$message}}@enderror</span>
                </div>
                <div class="form-group col-lg-6">
                    <label for="sge">Age</label>
                    <input id="Age" name="age" type="text" class="form-control validate" />
                    <span style="color:red">@error('age'){{$message}}@enderror</span>
                </div>
                <div class="form-group col-lg-6">
                    <label for="subject">Subject</label>
                    <input id="Subject" name="subject" type="text" class="form-control validate" />
                </div>
                <div class="custom-file col-lg-12">
                    <input type="file" class="custom-file-input validate" name="Uploadfile" id="Uploadfile" required>
                    <label class="custom-file-label" for="Uploadfile">Upload file...</label>
                    <span style="color:red">@error('Uploadfile'){{$message}}@enderror</span>
                </div>
                <div class="form-group col-lg-12">
                    <label class="tm-hide-sm">&nbsp;</label>
                    <button type="submit" class="btn btn-primary btn-block text-uppercase">
                        Submit Your Profile
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('after-style')
<style> 
    .custom-file-label{
        opacity:1;
        max-width: 95% !important;
        margin-left:15px !important;
        margin-top: 10px !important;
    }
    .center {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 50px;
    }
</style>
@endpush