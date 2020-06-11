@extends('Frontend.master')
@section("title","Post")

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
					    <a class="nav-link" href="{{URL('index')}}"><i class="fas fa-home fa-fw mr-2"></i>Blog Home <span class="sr-only">(current)</span></a>
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
	    
	    <article class="blog-post px-3 py-5 p-md-5">
		    <div class="container">
			    <header class="blog-post-header">
			    	@foreach($blogPost as $blogPosts)
				    <h2 class="title mb-2">{{$blogPosts->blogHeading}}</h2>
				    <div class="meta mb-3"><span class="date">Published 3 months ago</span><span class="time">5 min read</span><span class="comment"><a href="#">4 comments</a></span></div>
			    </header>
			    
			    <div class="blog-post-body">
				    <figure class="blog-banner">
				        @php if (!empty($blogPosts->blogPhoto1))
                                            {
                                            @endphp
                                            <img src="{{url('/upload/'.$blogPosts->blogPhoto1)}}" class="img-fluid" >
                                            @php 
                                            } else {
                                            @endphp 
                                            <p>No image found</p>
                                            @php
                                            }
                                            @endphp
				    </figure>
				    <p>{{$blogPosts->blogIntro}}</p>
				    
				    <h3 class="mt-5 mb-3">Code Block Example</h3>
				    <p>{{$blogPosts->blogExample}}</p>
				    <pre>
					    
				    </pre>
				    <h3 class="mt-5 mb-3">Typography</h3>
				    <p>{{$blogPosts->blogTypo}}</p>
				    <h5 class="my-3">Bullet Points:</h5>
				    <ul class="mb-5">
					  {{$blogPosts->blogPoints}}
					</ul>
					
					<h5 class="my-3">Quote Example:</h5>
					<blockquote class="blockquote m-lg-5 py-3 pl-4 px-lg-5">
						<p class="mb-2">{{$blogPosts->blogQuote}}
						<footer class="blockquote-footer"></footer>
					</blockquote>
					
					<h5 class="my-3">Table Example:</h5>
					{{$blogPosts->blogTable}}
					
					<h5 class="mb-3">Embed A Tweet:</h5>
					
					<blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">{{$blogPosts->blogTweet}}</blockquote>
					<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>


				    
				    <h3 class="mt-5 mb-3">Video Example</h3>
				    <p>{{$blogPosts->blogVideoIntro}}</p>

				   
			    </div>
				    
			    <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link rounded-left" href="{{URL('index')}}">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded-right" href="{{URL('next')}}">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
				
				<div class="blog-comments-section">
					<div id="disqus_thread"></div>
					<script>
					    /**
					     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT 
					     *  THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR 
					     *  PLATFORM OR CMS.
					     *  
					     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: 
					     *  https://disqus.com/admin/universalcode/#configuration-variables
					     */
					    /*
					    var disqus_config = function () {
					        // Replace PAGE_URL with your page's canonical URL variable
					        this.page.url = PAGE_URL;  
					        
					        // Replace PAGE_IDENTIFIER with your page's unique identifier variable
					        this.page.identifier = PAGE_IDENTIFIER; 
					    };
					    */
					    
					    (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
					        var d = document, s = d.createElement('script');
					        
					        // IMPORTANT: Replace 3wmthemes with your forum shortname!
					        s.src = 'https://3wmthemes.disqus.com/embed.js';
					        
					        s.setAttribute('data-timestamp', +new Date());
					        (d.head || d.body).appendChild(s);
					    })();
					</script>
					<noscript>
					    Please enable JavaScript to view the 
					    <a href="https://disqus.com/?ref_noscript" rel="nofollow">
					        comments powered by Disqus.
					    </a>
					</noscript>
				</div><!--//blog-comments-section-->
				
		    </div><!--//container-->
	    </article>
	    
	    <section class="promo-section theme-bg-light py-5 text-center">
		    <div class="container">
			    <h2 class="title">Promo Section Heading</h2>
			    <p>{{$blogPosts->blogPromo}}</p>
                <figure class="promo-figure">
			        <a href="https://made4dev.com" target="_blank">@php if (!empty($blogPosts->blogPhoto3))
                                            {
                                            @endphp
                                            <img src="{{url('/upload/'.$blogPosts->blogPhoto3)}}" class="img-fluid">
                                            @php 
                                            } else {
                                            @endphp 
                                            <p>No image found</p>
                                            @php
                                            }
                                            @endphp</a>
			    </figure>
			    @endforeach
		    </div><!--//container-->
	    </section><!--//promo-section-->
	    
	    <footer class="footer text-center py-2 theme-bg-dark">
		   
	        <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
		   
	    </footer>
    
    </div><!--//main-wrapper-->
    @endsection