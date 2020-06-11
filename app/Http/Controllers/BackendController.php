<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Backend;
use Auth;
use DB;
use App\About;
use App\Frontend;
use App\Blog;

class BackendController extends Controller
{
    public function bmaster()
    {
    	return view('Backend.master');
    }

    public function addprofile()
    {
        return view('Backend.addprofile');
    }
    public function saveprofile(Request $request)
    {
       
        $file=$request->file('blogPhoto');
        $filename ='blogPhoto' . time().'.'.$request->blogPhoto->extension();
        $file->move("upload/",$filename);

        $blog= new Backend;
        $blog->blogName=$request->blogName;
        $blog->blogPhoto=$filename;
        $blog->blogIntroduction=$request->blogIntroduction;
        $blog->save();
        
        if($blog)
        {
         return redirect('addprofile')->with('message','Successfully Added');
        }

   }    

   public function display(){

        $blog=Backend::all();
        // print_r($data);
        return view('Backend.display',compact('blog'));
    }

    public function editprofile($id)
    {
        $blog=Backend::find($id);
        return view('Backend.editprofile',compact('blog'));
    }

    public function updateprofile(Request $request)
    {
        if($request->hasFile('blogPhoto'))
        {
            $file=$request->file('blogPhoto');

            $filename='blogPhoto' . time().'.'.$request->blogPhoto->extension();

            $file->move("upload/",$filename);
        
        $blog =Backend::find($request->id);

        $blog->blogName=$request->blogName;
        $blog->blogPhoto=$filename;
        $blog->blogIntroduction=$request->blogIntroduction;
        
        $updated=$blog->save();

        
        }

        else
        {
        
        $blog =Backend::find($request->id);

        $blog->blogName=$request->blogName;
        $blog->blogIntroduction=$request->blogIntroduction;
        
        $updated=$blog->save();
        }

        if($updated){
            return redirect('display')->with('message','Successfully Updated');
        }
    }


    public function deleteprofile($id)
    {
        $post=Backend::find($id);
        $deleted=$post->delete();
        if($deleted)
        {
            return redirect('display')->with('delete','Successfully Deleted');
        }
    }
}
