@extends('Frontend.master')
@section("title","Index")

@section('data')

<header class="header text-center">
    	    @foreach($blog as $blogs)
	    <h1 class="blog-name pt-lg-4 mb-0"><a href="{{URL('index')}}">{{$blogs->blogName}}</a></h1>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
				    @php if (!empty($blogs->blogPhoto))
                                            {
                                            @endphp
                                            <img src="{{url('/upload/'.$blogs->blogPhoto)}}" class="profile-image mb-3 rounded-circle mx-auto" >
                                            @php 
                                            } else {
                                            @endphp 
                                            <p>No image found</p>
                                            @php
                                            }
                                            @endphp			
					
					<div class="bio mb-3">{{$blogs->blogIntroduction}}<br><a href="{{URL('about')}}">Find out more about me</a></div><!--//bio-->
					@endforeach
					 
                    
					<ul class="social-list list-inline py-3 mx-auto">
			            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
			        </ul><!--//social-list-->
			        <hr> 
				</div><!--//profile-section-->
				
				<ul class="navbar-nav flex-column text-left">
					<li class="nav-item active">
					    <a class="nav-link" href="{{URL('index')}}"><i class="fas fa-home fa-fw mr-2"></i>Blog Home</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="{{URL('post')}}"><i class="fas fa-bookmark fa-fw mr-2"></i>Blog Post</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="{{URL('about')}}"><i class="fas fa-user fa-fw mr-2"></i>About Me</a>
					</li>
				</ul>
				
				<div class="my-2 my-md-3">
				    <a class="btn btn-primary" href="https://themes.3rdwavemedia.com/" target="_blank">Get in Touch</a>
				</div>
			</div>
		</nav>
</header>

<div class="main-wrapper">
	    <section class="cta-section theme-bg-light py-5">
		    <div class="container text-center">
			    <h2 class="heading">DevBlog - A Blog Template Made For Developers</h2>
			    <div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
			    <form class="signup-form form-inline justify-content-center pt-3">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
		    </div><!--//container-->
	    </section>
	    <section class="blog-list px-3 py-5 p-md-5">
		    <div class="container">
			    <div class="item mb-5">
				    <div class="media">
				    	@foreach($blogPost as $blogPosts)
					    
					     @php if (!empty($blogPosts->blogPhotoSmall))
                                            {
                                            @endphp
                        <img src="{{url('/upload/'.$blogPosts->blogPhotoSmall)}}" class="mr-3 img-fluid post-thumb d-none d-md-flex" >
                                            @php 
                                            } else {
                                            @endphp 
                                            <p>No image found</p>
                                            @php
                                            }
                                            @endphp</a>
					    <div class="media-body">

						    <h3 class="title mb-1"><a href="blog-post.html">{{$blogPosts->blogHeading}}</a></h3>
						    <div class="meta mb-1"><span class="date">Published 2 days ago</span><span class="time">5 min read</span><span class="comment"><a href="#">8 comments</a></span></div>
						    <div class="intro">{{$blogPosts->blogIntroSmall}}</div>
						    <a class="more-link" href="blog-post.html">Read more &rarr;</a>
						    @endforeach
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			    
			    
			    <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="{{URL('index')}}">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded" href="{{URL('next')}}">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
				
		    </div>
	    </section>
	    
	    <footer class="footer text-center py-2 theme-bg-dark">
		   
	        <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
		   
	    </footer>
    
    </div><!--//main-wrapper-->

@endsection