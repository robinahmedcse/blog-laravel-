@extends('forntEnd.master')
@section('mainContaint')

 <?php 
 
//           echo"<pre>";
//          print_r($blog_details_by_id);
//          exit();
 ?>
 
        	<div id="templatemo_content">
        
    		<div class="post_section">
            
            	<div class="post_date">
                	30<span>Nov</span>
            	</div>
                <div class="post_content">
                
                    <h2>{{$blog_details_by_id ->blog_title}}</h2>
                    
                	<strong>Hite Count:</strong> {{$blog_details_by_id ->hite_count}} | <strong>Category:</strong> <a href="#">{{$blog_details_by_id-> category_name}}</a>
                   
                        <a href="" target="_parent"><img src="../{{$blog_details_by_id->blog_image}}" alt="image" width="450"/></a>
                        
                 <p>{{$blog_details_by_id-> blog_long_description}}</p>
                  
 





                 <div class="comment_tab">
<!--                        5 Comments-->
                    </div>
                    
                    <div id="comment_section">
                <ol class="comments first_level">
                        
     <?php  if($comments != null){?>
                    
                    @foreach($comments as $comment)
                       <li>
                            <div class="comment_box commentbox1">
                                    
                                <div class="gravatar">
                                    <img src="images/avator.png" alt="{{$comment ->name}}" />
                                </div>
                                
                                <div class="comment_text">
                                    <div class="comment_author">{{$comment ->name}} <span class="date">{{$comment ->created_at}}</span>  </div>
                                    <p>{{$comment ->comment}}</p>
                                  <div class="reply">
<!--                                      <a href="#">Reply</a>-->
                                  </div>
                                </div>
                                <div class="cleaner"></div>
                            </div>                        
                            
                        </li>
                       @endforeach
                
                       
     <?php 
     
     }  
                           ?>

 
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
<!--                        <li>
                        
                        
                            	<ol class="comments">
                            
                                    <li>
                                        <div class="comment_box commentbox2">
                                        
                                        <div class="gravatar">
                                        <img src="images/avator.png" alt="author 5" />
                                        </div>
                                        <div class="comment_text">
                                        <div class="comment_author">Julie <span class="date">November 27, 2048</span> <span class="time">09:20 pm</span></div>
                                        <p>Nullam bibendum tempor est nec cursus.</p>
                                        <div class="reply"><a href="#">Reply</a></div>
                                        </div>
                                        
                                        <div class="cleaner"></div>
                                        </div>                        
                                    
                                    
                                    </li>
                                    
                                    <li>
                                    
                            
                                        <ol class="comments">
                                    
                                            <li>
                                                <div class="comment_box commentbox1">
                                                
                                                    <div class="gravatar">
                                                        <img src="images/avator.png" alt="author 4" />
                                                    </div>
                                                    <div class="comment_text">
                                                        <div class="comment_author">John <span class="date">November 28, 2048</span> <span class="time">11:12 am</span></div>
                                                        <p> Vestibulum eget ligula et ipsum laoreet aliquam sed ut risus.  </p>
                                                      <div class="reply"><a href="#">Reply</a></div>
                                                    </div>
                                                    
                                                    <div class="cleaner"></div>
                                                </div>                        
                                                
                                                
                                            </li>
                                    
                                        </ol>
                        
                        			</li>
                                </ol>
                                
						</li>-->
                        
              
                        
                     
                        
                    </ol>
                </div>
                 
                 
                 
                 
                 
                    
                 <div id="comment_form">
                     <h3>Leave a comment</h3>

                       {!! Form::open(['url'=>'blog-comment','method'=>'POST']) !!} 
                         <div class="form_row">
                         <label>Name ( Required )</label><br />
                         <input type="hidden" name="blog_id" value="{{ $blog_details_by_id ->blog_id }}" />
                             <input type="text" name="name" />
                         </div>
                         
                         <div class="form_row">
                             <label>Email  (Required, will not be published)</label><br />
                             <input type="email" name="email" />
                         </div>
                         
                         
                         <div class="form_row">
                             <label>Your comment</label><br />
                             <textarea  name="comment" rows="" cols=""></textarea>
                         </div>

                         <input type="submit" name="Submit" value="Submit" class="submit_btn" />
                        {!! Form::close() !!}

                 </div>
              
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
            	</div>

                <div class="cleaner"></div>
                
            </div>
            
            
       	  </div>
 
 
  
 @endsection
 