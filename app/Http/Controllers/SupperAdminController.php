<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use DB;
use App\category;
use App\blog;



class SupperAdminController extends Controller
{
   
         public function adminDashboard() {
             
             $admin_id= Session::get('admin_id');
             if( $admin_id == NULL){
                 return redirect('admin')->send();
             }else{
                 return view('admin.home.dashboard');
             }        
        } 
        
        /***************************************************/
        /****************** CATRGORY ***********************/
        /***************************************************/
          public function addCategory() {
           return view('admin.category.createCategory');
          
        } 
           public function storeCategory(Request $request) {
          
            //   return $request->all();
//               echo $request->catName;
//               echo $request->catDes;
//               echo $request->publicationStatus;
              $category_info=new category();
              
               $category_info->category_name=$request->catName;
               $category_info->category_description=$request->catDes;
               $category_info->publicationStatus=$request->publicationStatus;
               $category_info->save();
                   
              return redirect('admin/manage-category')->with('message','Category Info Save Successfully');
          
        } 
        
        
        
           public function manageCategory() {
          //  echo"manageCategory";
               
               $categories= category::all();
              return view('admin.category.manageCategory',['categories'=>$categories]);
        }
        
            public function editCategory($id) {
          
              $categoryById=Category::where('category_id',$id)->first();
               
//        echo '<pre>';
//        print_r($categoryById);
//        exit();
         
        return view('admin.category.editCategory',['categoryById'=>$categoryById]);
        }
              
        
        public function updateCategory(Request $request) {
          
  //            return $request->all();
                    $category_id=$request->catId;
//               echo $request->catDes;
//               echo $request->publicationStatus;
              $category_info=Category::find($category_id);
              
//        echo '<pre>';
//        print_r($category_info);
//        exit();
               $category_info->category_id= $category_id;
               $category_info->category_name=$request->catName;
               $category_info->category_description=$request->catDes;
               $category_info->publicationStatus=$request->publicationStatus;
               $category_info->save();
                   
              return redirect('admin/manage-category')->with('message','Category Info Update Successfully');
          
        } 
        
        
       public function publishedCategory($id) {
        $category_info_published=Category::where('category_id',$id)
                                ->update(['publicationStatus' => 1]);
         
      return redirect('admin/manage-category')->with('message','Category Info published Successfully');
        }
        
            
       public function unPublishedCategory($id) {
        $category_info_unPublished=Category::where('category_id',$id)
                                ->update(['publicationStatus' => 0]);
         
      return redirect('admin/manage-category')->with('message','Category Info Un-published Successfully');
        }
        
        
         public function deleteCategory($id) {
         $category= Category::find($id);
         $category ->delete();
          return redirect('admin/manage-category')->with('message','Category info delete successfully');     
       }
        
        
        
        
        /***************************************************/
        /****************** CATRGORY ***********************/
        /***************************************************/
        
          public function addBlog() {

        $categories = category::all();
        return view('admin.blog.createBlog', ['categories' => $categories]);
    }

    public function saveBlog(Request $request) {  
       //    return $request->all();
        $blogImage=$request->file('blog_image');
        $uploadPath='public/blog-image/';
        $name=$blogImage->getClientOriginalName();
        
        $blogImage->move($uploadPath,$name);
        $imaeUrl=$uploadPath.$name; ///database save path and name
        $this->SaveProductInfo($request,$imaeUrl); 
        
         return redirect('admin/manage-blog')->with('message','Blog info save successfully');
        }
        
        
     protected function SaveProductInfo($request,$imaeUrl) {
          $blog = new blog();
          $blog->blog_title = $request->blog_title; 
          $blog->category_id = $request->category_id;
          $blog->blog_short_description = $request->blog_short_description;
          $blog->blog_long_description = $request->blog_long_description;
          $blog->blog_image = $imaeUrl;
          $blog->publicationStatus = $request->publicationStatus;  
          $blog->save();
        }    
        
        
        
              public function manageBlog() {
          
              $blogs= blog::all();
              return view('admin.blog.manageBlog',['blogs'=>$blogs]);
    
          
        }
        
        
        
        
        
        
        
        
        
        
        
        
    
      public function adminLogout() {
        
          Session::put('admin_id',NULL);
          Session::put('admin_name',NULL);
          return redirect('admin')->with('massage','You are successfully Logout');
        } 
    
    
}//end of class
