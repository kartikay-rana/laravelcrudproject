@extends('layouts.mainlayout')
@push('after-style')
<style>
    .center {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 50px;
    }
</style>
@endpush
@section('content')
<!-- add form for new student -->
<div class="center">
    <div class="tm-block-col tm-col-account-settings">
        <div class="tm-bg-primary-dark tm-block tm-block-settings">
            <h2 class="tm-block-title"> Student Account Settings</h2>
            <form action="{{url('/update-post')}}" method="post" class="tm-signup-form row" enctype="multipart/form-data">
            @csrf
                <input type="hidden" name="id" value="{{$post->id}}"/>
                <div class="form-group col-lg-6">
                    <label for="name">First-Name</label>
                    <input id="First_name" name="firstname" type="text" class="form-control validate" value="{{$post->First_name}}"/>
                    @if($errors->has('firstname'))
                        <span class="text-danger">{{$errors->first('firstname')}}</span>
                    @endif
                </div>
                <div class="form-group col-lg-6">
                    <label for="last-name">Last-Name</label>
                    <input id="Last_name" name="lastname" type="text" class="form-control " value="{{$post->Last_name}}" />
                    @if($errors->has('lastname'))
                        <span class="text-danger">{{$errors->first('lastname')}}</span>
                    @endif
                </div>
                <div class="form-group col-lg-6">
                    <label for="sge">Age</label>
                    <input id="Age" name="age" type="text" class="form-control validate" value="{{$post->Age}}"/>
                    @if($errors->has('age'))
                        <span class="text-danger">{{$errors->first('age')}}</span>
                    @endif
                </div>
                <div class="form-group col-lg-6">
                    <label for="subject">Subject</label>
                    <input id="Subject" name="subject" type="text" class="form-control validate" value="{{$post->Subject}}" />
                </div>
                <div class="custom-file col-lg-12">
                    <input type="file" class="custom-file-input validate" name="Uploadfile" id="Uploadfile" accept=".pdf,.gif,.jpg,.png,.doc,.docx" value="{{$post->Uploadfile}}"required>
                    @if($errors->has('Uploadfile'))
                        <span class="text-danger">{{$errors->first('Uploadfile')}}</span>
                    @endif
                    <label class="custom-file-label" for="Uploadfile">Upload file...</label>
                </div>
                <div class="foem-group col-lg-6">
                    <img src="/uploads/{{$post->Uploadfile}}" alt="" style="width:150px;height:150px;padding-top:20px">
                </div>  
                <div class="foem-group col-lg-6">
                    <button type="submit" class="btn btn-primary btn-block text-uppercase" style="margin-top:50px;">
                        edit image
                    </button>
                </div>
                <div class="form-group col-lg-12">
                    <label class="tm-hide-sm">&nbsp;</label>
                    <button type="submit" class="btn btn-primary btn-block text-uppercase">
                        Update Your Profile
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
</style>
@endpush