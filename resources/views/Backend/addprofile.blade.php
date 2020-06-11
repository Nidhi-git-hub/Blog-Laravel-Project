@extends('Backend.master')
@section("title","Add Profile")

@section('data')

<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <strong>Add Profile</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{url('/saveprofile')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">

                @if(session('message'))
                <p class="alert alert-success">
                    {{session('message')}}
                </p>
                @endif

            	{{csrf_field()}}
                <div class="row form-group">
                    
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Blog Name</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="blogName" name="blogName" placeholder="blogName" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="blogPhoto" class=" form-control-label">Blog Photo</label></div>
                    <div class="col-12 col-md-9"><input type="file" id="blogPhoto" name="blogPhoto" class="form-control-file"></div> 
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Blog Introduction</label></div>
                    <div class="col-12 col-md-9"><textarea name="blogIntroduction" id="blogIntroduction" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                </div>
            
                </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                         Submit
                    </button>
                    </div>
                    </form>
                </div>
                </div>
            </div>

@endsection