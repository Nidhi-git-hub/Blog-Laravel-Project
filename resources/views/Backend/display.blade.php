@extends('Backend.master')
@section("title","Display Profile")

@section('data')


<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <center><div class="card-header" style="background-color: #4f4fd2;border-radius: 33px; width: 761px;height: 43px;margin-top: 12px;">
                        <h3 style="margin-top: -8px"><center><span style="color: white;">Profile</span></center></h3></div></center>
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
                                    <th>Blog Name</th>
                                    <th>Blog Photo</th>
                                    <th>Blog Introduction</th>
                                    <th>Action</th>
                                </tr>
                            
                            <tbody>
                                @foreach($blog as $blogs)
                                    <tr>
                                        <td>{{$blogs->blogName}}</td>
                                        <td>@php if (!empty($blogs->blogPhoto))
                                            {
                                            @endphp
                                            <img src="{{url('/upload/'.$blogs->blogPhoto)}}" style="height: 150px; width: 150px" >
                                            @php 
                                            } else {
                                            @endphp 
                                            <p>No image found</p>
                                            @php
                                            }
                                            @endphp
            
                                        </td>
                                        <td>{{$blogs->blogIntroduction}}</td>
                                        <td> 
                                            <a href="{{url('/blog/editprofile/'.$blogs->id)}}"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true" style="color: green"></i></a>
                                            <a href="{{url('/blog/deleteprofile/'.$blogs->id)}}"><i class="fa fa-trash-o fa-2x" style="color: red"></i></a>
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