@extends('admin.master')


@section('mainContaint')
 



        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Manage <small>Blog </small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
     

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>All <small>Blog </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                    <div class="">
                            <h4 class="tex text-center text-success">{{Session::get('message')}}</h4>
                            <br><br>
                     </div> 
                    
                  <div class="x_content">
                    <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Blog Title</th>
                          
                          <th>Publication Status</th>
                           <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                           @foreach($blogs as $blog)
                         <tr class="even pointer">
                     <td class="center ">{{$blog ->blog_id}}</td>
                    <td class="center ">{{$blog ->blog_title}}</td>
                     
                     <td class="center ">{{$blog ->publicationStatus == 1?'Published':'UnPublished'}}</td>
                     <td>
                         
                         <?php
                            if( $blog ->publicationStatus == 1){ ?>
                              <a href="{{url('admin/unpublished-blog/'.$blog ->blog_id)}}" class="btn btn-warning">
                             <span class="glyphicon glyphicon-arrow-down"></span> Unpublished 
                         </a> 
                          <?php      }  else{ ?>
                           <a href="{{url('admin/published-blog/'.$blog ->blog_id)}}" class="btn btn-info">
                             <span class="glyphicon glyphicon-arrow-up"></span> Published 
                         </a>
                          <?php      }   ?>

                         <a href="{{url('admin/edit-blog/'.$blog ->blog_id)}}" class="btn btn-success">
                             <span class="glyphicon glyphicon-edit"></span>
                         </a> 
                         
                         <a href="{{url('admin/delete-blog/'.$blog ->blog_id)}}" class="btn btn-danger">
                             <span class="glyphicon glyphicon-trash"></span>
                         </a>
                         
                         
                     </td>  
                </tr>
                                        @endforeach
                      
                        
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

 

              <div class="clearfix"></div>
 
            </div>
          </div>
        </div>
  
             
@endsection