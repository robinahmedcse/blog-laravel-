@extends('admin.master')


@section('mainContaint')
 


<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add Blog </h3>
              </div>
            </div>
              
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add<small>Blog Info</small></h2>
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
                  <div class="x_content">
                    <br />
                    
                    {!! Form::open(['url'=>'admin/save-blog','method'=>'POST','enctype'=>'multipart/form-data','class'=>'form-horizontal form-label-left']) !!}
                        <!-- Category name -->
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="blog_title">Blog Title <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="" name="blog_title" class="form-control col-md-7 col-xs-12">
                                <span class="text-danger">{{$errors->has('blog_title')? $errors->first('blog_title'):''}}</span>
                            </div>
                        </div>
                        
                             <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Blog Category Name</label>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <select name="category_id" class="form-control">
                                    <option value="---">----Select Category Name-----</option>
                                         @foreach($categories as $category)
                                    <option value="{{$category ->category_id}}">{{$category ->category_name}}</option>
                                  @endforeach
                                
                                </select>
                            </div>
                        </div> 
                        

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="blog-short-description">Blog Short Description <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea class='form-control' name='blog_short_description' row='8 '></textarea>
                                <span class="text-danger">{{$errors->has('blog_short_description')? $errors->first('blog_short_description'):''}}</span>
                            </div>
                        </div>
                        
                         <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="blog-short-description">Blog Long Description <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea class='form-control' name='blog_long_description' row='8 '></textarea>
                                <span class="text-danger">{{$errors->has('blog_long_description')? $errors->first('blog_long_description'):''}}</span>
                            </div>
                        </div>
                        
                       
                         <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Blog Image <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="file" id="" name="blog_image" accept="image/*" />
                    <span class="text-danger">{{$errors->has('blog_image')? $errors->first('blog_image'):''}}</span>
                </div>
            </div>
                        
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Publication Status</label>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <select name="publicationStatus" class="form-control">
                                    <option value="0">Select Publication Status</option>
                                    <option value="1">Published</option>
                                    <option value="0">UnPublished</option>
                                </select>
                            </div>
                        </div>  
                        

                      <div class="ln_solid"></div>
                      
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"> 
                            <input type="submit" name='btn' value="Submit" class="btn btn-success">
                        </div>
                      </div>

                     {!! Form::close() !!}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  
             
@endsection