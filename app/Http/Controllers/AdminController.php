<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use DB;
use admin;
 

class AdminController extends Controller
{
    
    
    
      function showLoginForm() {
          
          $admin_id= Session::get('admin_id');
             if( $admin_id == NULL){
                 return  view('admin.login.login');
                 
             }else{
                return redirect('admin-dashboard')->send();  
             }    
       
    }
    
    
    
      public function adminCheckLogin(Request $request) {
        //  return  $request ->all();
          
          $admin_email =$request ->adminEmail;
          $admin_password= md5($request ->AdminPassword);
          
          $admin_info = DB::table('admins')
                     ->where('admin_email', $admin_email)
                      ->where('admin_password', $admin_password)
                     ->first();
          
//             echo '<pre>';
//             print_r($admin_info);
//             exit();
          
          
          if ($admin_info) {
              
              Session::put('admin_id',$admin_info->admin_id);
              Session::put('admin_name',$admin_info->admin_name);
              return  redirect('admin-dashboard');
              
        } 
        
        else {
            
         Session::put('exception','Admin Email and Password Invalid');
         return  redirect('admin');
        
        
         //  return redirect('admin')->with('exception','Admin Email and Password Invalid'); 
        }
    }
    
    
    
    
    
}//end of class 
