 @extends('Backend.master')
@section("title","Edit")

@section('data')

<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <strong>Edit Profile</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{url('/blog/updateprofile')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">

                @if(session('message'))
                <p class="alert alert-success">
                    {{session('message')}}
                </p>
                @endif

            	{{csrf_field()}}
                <div class="row form-group">
                    <input type="hidden" name="id" value="{{$blog->id}}">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Blog Name</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="blogName" name="blogName" placeholder="blogName" class="form-control" value="{{$blog->blogName}}"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="blogPhoto" class=" form-control-label">Blog Photo</label></div>
                    <div class="col-12 col-md-9"><img src="{{url('/upload/'.$blog->blogPhoto)}}" style="height: 150px;width: 150px"><input type="file" id="blogPhoto" name="blogPhoto" class="form-control-file" value="{{asset($blog->blogPhoto)}}"></div> 
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Blog Introduction</label></div>
                    <div class="col-12 col-md-9"><textarea name="blogIntroduction" id="blogIntroduction" rows="9" placeholder="Content..." class="form-control" value="{{$blog->blogIntroduction}}"></textarea></div>
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