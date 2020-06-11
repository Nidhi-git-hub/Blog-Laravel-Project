 @extends('Backend.master')
@section("title","Edit")

@section('data')

<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <strong>Edit About</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{url('/BlogPost/updateBlogPost')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">

                @if(session('message'))
                <p class="alert alert-success">
                    {{session('message')}}
                </p>
                @endif

            	{{csrf_field()}}
                <div class="row form-group">
                    <input type="hidden" name="id" value="{{$blogPost->id}}">
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">blogHeading</label></div>
                    <div class="col-12 col-md-9"><textarea name="blogHeading" id="blogHeading" rows="100" placeholder="blogHeading" class="form-control" value="{{$blogPost->blogHeading}}"></textarea></div>
                </div> 
                <div class="row form-group">
                    <div class="col col-md-3"><label for="blogPhotoSmall" class=" form-control-label">blogPhotoSmall</label></div>
                    <div class="col-12 col-md-9"><input type="file" id="blogPhotoSmall" name="blogPhotoSmall" class="form-control-file" value="{{$blogPost->blogPhotoSmall}}"></div> 
                </div>
                <div class="row form-group">
                    <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">blogIntroSmall</label></div>
                    <div class="col-12 col-md-9"><textarea name="blogIntroSmall" id="blogIntroSmall" rows="100"  placeholder="blogIntro" class="form-control" value="{{$blogPost->blogIntroSmall}}"></textarea></div>
                </div> 
                    <div class="row form-group">
                    <div class="col col-md-3"><label for="blogPhoto1" class=" form-control-label">Blog Photo 1</label></div>
                    <div class="col-12 col-md-9"><input type="file" id="blogPhoto1" name="blogPhoto1" class="form-control-file" value="{{$blogPost->blogPhoto1}}"></div> 
                </div>
                <div class="row form-group">
                    <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">blogIntro</label></div>
                    <div class="col-12 col-md-9"><textarea name="blogIntro" id="blogIntro" rows="100" placeholder="blogIntro" class="form-control" value="{{$blogPost->blogIntro}}"></textarea></div>
                </div>    
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">blogExample</label></div>
                    <div class="col-12 col-md-9"><textarea name="blogExample" id="blogExample" rows="100" placeholder="blogExample" class="form-control" value="{{$blogPost->blogExample}}"></textarea></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">blogTypo</label></div>
                    <div class="col-12 col-md-9"><textarea name="blogTypo" id="blogTypo" rows="100" placeholder="blogTypo" class="form-control" value="{{$blogPost->blogTypo}}"></textarea></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">blogPoints</label></div>
                    <div class="col-12 col-md-9"><textarea name="blogPoints" id="blogPoints" rows="100" placeholder="blogPoints" class="form-control" value="{{$blogPost->blogPoints}}"></textarea></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">blogQuote</label></div>
                    <div class="col-12 col-md-9"><textarea name="blogQuote" id="blogQuote" rows="100"placeholder="blogQuote" class="form-control" value="{{$blogPost->blogQuote}}"></textarea></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">blogTable</label></div>
                    <div class="col-12 col-md-9"><textarea name="blogTable" id="blogTable" rows="100" placeholder="blogTable" class="form-control" value="{{$blogPost->blogTable}}"></textarea></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">blogTweet</label></div>
                    <div class="col-12 col-md-9"><textarea name="blogTweet" id="blogTweet" rows="100" placeholder="blogTweet" class="form-control" value="{{$blogPost->blogTweet}}"></textarea></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">blogVideoIntro</label></div>
                    <div class="col-12 col-md-9"><textarea name="blogVideoIntro" id="blogVideoIntro" rows="100" placeholder="blogVideoIntro" class="form-control" value="{{$blogPost->blogVideoIntro}}"></textarea></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="blogPhoto2" class=" form-control-label">blogPhoto2</label></div>
                    <div class="col-12 col-md-9"><input type="file" id="blogPhoto2" name="blogPhoto2" class="form-control-file" value="{{$blogPost->blogPhoto2}}"></div> 
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">blogPromo</label></div>
                    <div class="col-12 col-md-9"><textarea name="blogPromo" id="blogPromo" rows="100" placeholder="blogPromo" class="form-control" value="{{$blogPost->blogPromo}}"></textarea></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="blogPhoto3" class=" form-control-label">blogPhoto2</label></div>
                    <div class="col-12 col-md-9"><input type="file" id="blogPhoto3" name="blogPhoto3" class="form-control-file" value="{{$blogPost->blogPhoto3}}"></div> 
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