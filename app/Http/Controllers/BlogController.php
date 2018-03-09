<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use DB;
use App\category;
use App\blog;
use App\comment;



class BlogController extends Controller
{
   
         public function index() {
               $published_blogs = DB::table('blogs')
                ->join('categories', 'blogs.category_id', '=', 'categories.category_id')
                ->select('blogs.*', 'categories.category_name')
                ->where('blogs.publicationStatus', 1)
                ->get();
      
//        echo '<pre>';
//        print_r($published_blogs);
//       exit();
//        
              return view('forntEnd.home.home',['published_blogs'=>$published_blogs]); 
        } 
         
        
         public function portfolio() {

              return view('forntEnd.portfolio.portfolio'); 
        }    
        
    
        
        
        public function blogCategory($categoryId) {
             
            $publish_categories = DB::table('blogs')
                ->join('categories', 'blogs.category_id', '=', 'categories.category_id')
                ->select('blogs.*', 'categories.category_name')
                ->where('blogs.category_id', $categoryId)
                ->where('blogs.publicationStatus', 1)
                ->get();
       
//                           echo '<pre>';
//        print_r($publish_categories);
//       exit();       
            
            return view('forntEnd.blogCategory.category',['publish_categories'=>$publish_categories]); 
        }
        
        
        public function blogDdetails($blogId) {
            
               $blog_info = DB::table('blogs')
                ->where('blog_id', $blogId)
                ->first();
               
              $hite_count=$blog_info->hite_count+1;
              
              DB::table('blogs')
                ->where('blog_id', $blogId) 
                ->update(['hite_count' => $hite_count]);
              
      
            
            $blog_details_by_id=DB::table('blogs')
                ->join('categories', 'blogs.category_id', '=', 'categories.category_id')
                ->select('blogs.*', 'categories.category_name')
                ->where('blogs.blog_id', $blogId)
                ->first();
            
              $comments=comment::where('blog_id',$blogId)->get();
//                      echo '<pre>';
//        print_r($comments);
//       exit();
             return view('forntEnd.blog-details.blog-post-details',['blog_details_by_id'=>$blog_details_by_id , 'comments'=>$comments]);   
        }
        
         
        
        
        
        
        
        
        public function blogComment(Request $request) {
            
           // return  $request->all();
           $blogId =$request->blog_id;
             $comment_save=new comment();
              
               $comment_save->blog_id=$blogId;
               $comment_save->name=$request->name;
               $comment_save->email=$request->email;
               $comment_save->comment=$request->comment;
               $comment_save->save();

               return redirect('blog-details/'.$blogId) ;
            
            
            
        } 
        
        
        
        
    
}//end of class
