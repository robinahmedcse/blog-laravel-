@extends('admin.master')


@section('mainContaint')
 


<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Blog Category</h3>
              </div>
            </div>
              
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Blog<small>Category</small></h2>
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
                    
                     {!! Form::open(['url'=>'admin/update-category','method'=>'POST','class'=>'form-horizontal form-label-left']) !!}    
                        <!-- Category name -->
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="category-name">Category Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="" name="catName" class="form-control col-md-7 col-xs-12">
                               
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="category-description">Category Description <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea class='form-control' name='catDes' row='8 '></textarea>
                           
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
                            <input type="submit" name='btn' value="Update Category" class="btn btn-success">
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