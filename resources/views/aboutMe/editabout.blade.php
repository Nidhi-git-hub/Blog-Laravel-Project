 @extends('Backend.master')
@section("title","Edit")

@section('data')

<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <strong>Edit About</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{url('/about/updateabout')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">

                @if(session('message'))
                <p class="alert alert-success">
                    {{session('message')}}
                </p>
                @endif

            	{{csrf_field()}}
                <div class="row form-group">
                    <input type="hidden" name="id" value="{{$about->id}}">
                    <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">About Me</label></div>
                    <div class="col-12 col-md-9"><textarea name="aboutIntro" id="aboutIntro" rows="9" placeholder="aboutIntro" class="form-control" value="{{$about->aboutIntro}}"></textarea></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="aboutPhoto1" class=" form-control-label">About Photo 1</label></div>
                    <div class="col-12 col-md-9"><input type="file" id="aboutPhoto1" name="aboutPhoto1" class="form-control-file" value="{{$about->aboutPhoto1}}"></div> 
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="aboutBlog" class=" form-control-label">About the Blog</label></div>
                    <div class="col-12 col-md-9"><textarea name="aboutBlog" id="aboutBlog" rows="9" placeholder="aboutBlog" class="form-control" value="{{$about->aboutBlog}}"></textarea></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="aboutSkills" class=" form-control-label">My Skills and Experiences</label></div>
                    <div class="col-12 col-md-9"><textarea name="aboutSkills" id="aboutSkills" rows="9" placeholder="aboutSkills" class="form-control" value="{{$about->aboutSkills}}"></textarea></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="aboutProject" class=" form-control-label">Side Projects</label></div>
                    <div class="col-12 col-md-9"><textarea name="aboutProject" id="aboutProject" rows="9" placeholder="aboutProject" class="form-control" value="{{$about->aboutProject}}"></textarea></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="aboutPhoto2" class=" form-control-label">About Photo 2</label></div>
                    <div class="col-12 col-md-9"><input type="file" id="aboutPhoto2" name="aboutPhoto2" class="form-control-file" value="{{$about->aboutPhoto2}}"></div> 
                </div>
            
                </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Update
                        </button>
                    </div>
                    </form>
                </div>
                </div>
            </div>

@endsection