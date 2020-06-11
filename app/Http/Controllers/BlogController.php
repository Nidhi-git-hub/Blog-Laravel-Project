<?php

namespace App\Http\Controllers;
use App\Backend;
use Auth;
use DB;
use App\About;
use App\Frontend;
use App\Blog;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function addBlogPost()
    {
        return view('blogPost.addBlogPost');
    }
    public function saveblogPost(Request $request)
    {
       
        $file=$request->file('blogPhoto1');
        $filename ='blogPhoto1' . time().'.'.$request->blogPhoto1->extension();
        $file->move("upload/",$filename);

        $file1=$request->file('blogPhoto2');
        $filename1 ='blogPhoto2' . time().'.'.$request->blogPhoto2->extension();
        $file1->move("upload/",$filename1);

        $file2=$request->file('blogPhoto3');
        $filename2 ='blogPhoto3' . time().'.'.$request->blogPhoto3->extension();
        $file2->move("upload/",$filename2);

        $file3=$request->file('blogPhotoSmall');
        $filename3 ='blogPhotoSmall' . time().'.'.$request->blogPhotoSmall->extension();
        $file3->move("upload/",$filename3);

        $blogPost= new Blog;
        $blogPost->blogHeading=$request->blogHeading;
        $blogPost->blogPhotoSmall=$filename3;
        $blogPost->blogIntroSmall=$request->blogIntroSmall;
        $blogPost->blogPhoto1=$filename;
        $blogPost->blogIntro=$request->blogIntro;
        $blogPost->blogExample=$request->blogExample;
        $blogPost->blogTypo=$request->blogTypo;
        $blogPost->blogPoints=$request->blogPoints;
        $blogPost->blogQuote=$request->blogQuote;
        $blogPost->blogTable=$request->blogTable;
        $blogPost->blogTweet=$request->blogTweet;
        $blogPost->blogVideoIntro=$request->blogVideoIntro;
        $blogPost->blogPhoto2=$filename1;
        $blogPost->blogPromo=$request->blogPromo;
        $blogPost->blogPhoto3=$filename2;
        $blogPost->save();
        
        if($blogPost)
        {
         return redirect('addBlogPost')->with('message','Successfully Added');
        }

   }    
   public function displayBlogPost(){

        $blogPost=Blog::all();
        // print_r($data);
        return view('blogPost.displayBlogPost',compact('blogPost'));
    }

    public function editBlogPost($id)
    {
        $blogPost=About::find($id);
        return view('blogPost.editBlogPost',compact('blogPost'));
    }

    public function updateBlogPost(Request $request)
    {
        if($request->hasFile('blogPhoto1') && $request->hasFile('blogPhoto2') && $request->hasFile('blogPhoto3'))
        {
            $file3=$request->file('blogPhotoSmall');
            $filename3 ='blogPhotoSmall' . time().'.'.$request->blogPhotoSmall->extension();
            $file3->move("upload/",$filename3);

            $file=$request->file('blogPhoto1');
            $filename='blogPhoto1' . time().'.'.$request->blogPhoto1->extension();
            $file->move("upload/",$filename);

            $file1=$request->file('blogPhoto2');
            $filename1='blogPhoto2' . time().'.'.$request->blogPhoto2->extension();
            $file1->move("upload/",$filename1);

            $file2=$request->file('blogPhoto3');
            $filename2='blogPhoto3' . time().'.'.$request->blogPhoto3->extension();
            $file2->move("upload/",$filename2);

        
        $blogPost =Blog::find($request->id);
        $blogPost->blogHeading=$request->blogHeading;
        $blogPost->blogPhotoSmall=$filename3;
        $blogPost->blogIntroSmall=$request->blogIntroSmall;
        $blogPost->blogPhoto1=$filename;
        $blogPost->blogIntro=$request->blogIntro;
        $blogPost->blogExample=$request->blogExample;
        $blogPost->blogTypo=$request->blogTypo;
        $blogPost->blogPoints=$request->blogPoints;
        $blogPost->blogQuote=$request->blogQuote;
        $blogPost->blogTable=$request->blogTable;
        $blogPost->blogTweet=$request->blogTweet;
        $blogPost->blogVideoIntro=$request->blogVideoIntro;
        $blogPost->blogPhoto2=$filename1;
        $blogPost->blogPromo=$request->blogPromo;
        $blogPost->blogPhoto3=$filename2;
        
        $updated=$blogPost->save();        
        }

        else
        {
        $blogPost =Blog::find($request->id);
        $blogPost->blogHeading=$request->blogHeading;
        $blogPost->blogIntroSmall=$request->blogIntroSmall;
        $blogPost->blogIntro=$request->blogIntro;
        $blogPost->blogExample=$request->blogExample;
        $blogPost->blogTypo=$request->blogTypo;
        $blogPost->blogPoints=$request->blogPoints;
        $blogPost->blogQuote=$request->blogQuote;
        $blogPost->blogTable=$request->blogTable;
        $blogPost->blogTweet=$request->blogTweet;
        $blogPost->blogVideoIntro=$request->blogVideoIntro;
        $blogPost->blogPromo=$request->blogPromo;
        
        $updated=$blogPost->save();
        }

        if($updated){
            return redirect('displayBlogPost')->with('message','Successfully Updated');
        }
    }


    public function deleteBlogPost($id)
    {
        $post=Blog::find($id);
        $deleted=$post->delete();
        if($deleted)
        {
            return redirect('displayBlogPost')->with('delete','Successfully Deleted');
        }
    }
}
