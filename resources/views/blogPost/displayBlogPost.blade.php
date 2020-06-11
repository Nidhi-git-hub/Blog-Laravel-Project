@extends('Backend.master')
@section("title","Display About")

@section('data')


<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <center><div class="card-header" style="background-color: #4f4fd2;border-radius: 33px; width: 761px;height: 43px;margin-top: 12px;">
                        <h3 style="margin-top: -8px"><center><span style="color: white;">Blog</span></center></h3></div></center>
                    </div>

                    @if(session('message'))
                    <p class="alert alert-success">
                        {{session('message')}}
                    </p>
                    @endif

                    @if(session('delete'))
                    <p class="alert alert-danger">
                        {{session('delete')}}
                    </p>
                    @endif

                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Blog Heading</th>
                                    <th>Blog Photo Small</th>
                                    <th>Blog Intro Small</th>
                                    <th>Blog Photo 1</th>
                                    <th>Blog Intro</th>
                                    <th>Blog Example</th>
                                    <th>Blog Typo</th>
                                    <th>Blog Points</th>
                                    <th>Blog Quote</th>
                                    <th>Blog Table</th>
                                    <th>Blog Tweet</th>
                                    <th>Blog Video Intro</th>
                                    <th>Blog Photo 2</th>
                                    <th>Blog Promo</th>
                                    <th>Blog Photo 3</th>
                                    <th>Action</th>
                                </tr>
                            
                            <tbody>
                                @foreach($blogPost as $blogPosts)
                                    <tr>
                                        <td>{{$blogPosts->blogHeading}}</td>
                                        <td>@php if (!empty($blogPosts->blogPhotoSmall))
                                            {
                                            @endphp
                                            <img src="{{url('/upload/'.$blogPosts->blogPhotoSmall)}}" style="height: 150px; width: 150px" >
                                            @php 
                                            } else {
                                            @endphp 
                                            <p>No image found</p>
                                            @php
                                            }
                                            @endphp
            
                                        </td>
                                        <td>{{$blogPosts->blogIntroSmall}}</td>
                                        <td>@php if (!empty($blogPosts->blogPhoto1))
                                            {
                                            @endphp
                                            <img src="{{url('/upload/'.$blogPosts->blogPhoto1)}}" style="height: 150px; width: 150px" >
                                            @php 
                                            } else {
                                            @endphp 
                                            <p>No image found</p>
                                            @php
                                            }
                                            @endphp
            
                                        </td>
                                        <td>{{$blogPosts->blogIntro}}</td>
                                        <td>{{$blogPosts->blogExample}}</td>
                                        <td>{{$blogPosts->blogTypo}}</td>
                                        <td>{{$blogPosts->blogPoints}}</td>
                                        <td>{{$blogPosts->blogQuote}}</td>
                                        <td>{{$blogPosts->blogTable}}</td>
                                        <td>{{$blogPosts->blogTweet}}</td>
                                        <td>{{$blogPosts->blogVideoIntro}}</td>
                                        <td>@php if (!empty($blogPosts->blogPhoto2))
                                            {
                                            @endphp
                                            <img src="{{url('/upload/'.$blogPosts->blogPhoto2)}}" style="height: 150px; width: 150px" >
                                            @php 
                                            } else {
                                            @endphp 
                                            <p>No image found</p>
                                            @php
                                            }
                                            @endphp
            
                                        </td>

                                        <td>{{$blogPosts->blogPromo}}</td>
                                        <td>@php if (!empty($blogPosts->blogPhoto3))
                                            {
                                            @endphp
                                            <img src="{{url('/upload/'.$blogPosts->blogPhoto3)}}" style="height: 150px; width: 150px" >
                                            @php 
                                            } else {
                                            @endphp 
                                            <p>No image found</p>
                                            @php
                                            }
                                            @endphp
            
                                        </td>
                                        <td> 
                                            <a href="{{url('/BlogPost/editBlogPost/'.$blogPosts->id)}}"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true" style="color: green"></i></a>
                                            <a href="{{url('/BlogPost/deleteBlogPost/'.$blogPosts->id)}}"><i class="fa fa-trash-o fa-2x" style="color: red"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach    
                            </tbody>
                        </thead>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->


@endsection