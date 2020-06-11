<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Backend;
use Auth;
use DB;
use App\Frontend;
use App\About;
use App\Blog;

class FrontendController extends Controller
{
    public function index()
    {
        $blog=Backend::all();
        $blogPost=Blog::all();
    	return view('Frontend.index')->with(compact('blog'))->with(compact('blogPost'));
    }
    public function post()
    {
        $blog=Backend::all();
        $blogPost=Blog::all();
        return view('Frontend.post')->with(compact('blog'))->with(compact('blogPost'));
    }
    public function next()
    {
        $blog=Backend::all();
    	return view('Frontend.next',compact('blog'));
    }
    public function about()
    {
        $blog=Backend::all();
        $about=About::all();
    	return view('Frontend.about')->with(compact('blog'))->with(compact('about'));
    }
    public function display(){

        $blog=Backend::all();
        return view('Frontend.index',compact('blog'));
    }
    public function displayabout(){

        $about=About::all();
        // print_r($data);
        return view('Frontend.about',compact('about'));
    }
    public function displayBlogPost(){

        $blogPost=Blog::all();
        return view('Frontend.post',compact('blogPost'));
    }

}
