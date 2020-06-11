<?php

namespace App\Http\Controllers;
use App\Backend;
use Auth;
use DB;
use App\About;
use App\Frontend;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function addabout()
    {
        return view('aboutMe.addabout');
    }
    public function saveabout(Request $request)
    { 
        $file=$request->file('aboutPhoto1');
        $filename ='aboutPhoto1' . time().'.'.$request->aboutPhoto1->extension();
        $file->move("upload/",$filename);

        $file1=$request->file('aboutPhoto2');
        $filename1 ='aboutPhoto2' . time().'.'.$request->aboutPhoto2->extension();
        $file1->move("upload/",$filename1);

        $about= new About;
        $about->aboutIntro=$request->aboutIntro;
        $about->aboutPhoto1=$filename;
        $about->aboutBlog=$request->aboutBlog;
        $about->aboutSkills=$request->aboutSkills;
        $about->aboutProject=$request->aboutProject;
        $about->aboutPhoto2=$filename1;
        $about->save();
        
        if($about)
        {
         return redirect('addabout')->with('message','Successfully Added');
        }

   }    
   public function displayabout(){

        $about=About::all();
        // print_r($data);
        return view('aboutMe.displayabout',compact('about'));
    }

    public function editabout($id)
    {
        $about=About::find($id);
        return view('aboutMe.editabout',compact('about'));
    }

    public function updateabout(Request $request)
    {
        if($request->hasFile('aboutPhoto1') && $request->hasFile('aboutPhoto2'))
        {
            $file=$request->file('aboutPhoto1');
            $filename='aboutPhoto1' . time().'.'.$request->aboutPhoto1->extension();
            $file->move("upload/",$filename);

            $file1=$request->file('aboutPhoto2');
            $filename1='aboutPhoto2' . time().'.'.$request->aboutPhoto2->extension();
            $file1->move("upload/",$filename1);

        
        $about =About::find($request->id);

        $about->aboutIntro=$request->aboutIntro;
        $about->aboutPhoto1=$filename;
        $about->aboutBlog=$request->aboutBlog;
        $about->aboutSkills=$request->aboutSkills;
        $about->aboutProject=$request->aboutProject;
        $about->aboutPhoto2=$filename1;
        
        $updated=$about->save();

        
        }

        else
        {
        
        $about =About::find($request->id);

        $about->aboutIntro=$request->aboutIntro;
        $about->aboutBlog=$request->aboutBlog;
        $about->aboutSkills=$request->aboutSkills;
        $about->aboutProject=$request->aboutProject;
        
        $updated=$about->save();
        }

        if($updated){
            return redirect('displayabout')->with('message','Successfully Updated');
        }
    }


    public function deleteabout($id)
    {
        $post=About::find($id);
        $deleted=$post->delete();
        if($deleted)
        {
            return redirect('displayabout')->with('delete','Successfully Deleted');
        }
    }
}
