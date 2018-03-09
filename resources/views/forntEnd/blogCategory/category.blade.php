@extends('forntEnd.master')


 @section('mainContaint')

       <div id="templatemo_content">

                <div class="post_section">

                    <div class="post_date">
                      
                    </div>
                    @foreach($publish_categories as $publish_category )
                   <div class="post_content">
                
                   <h2><a href="{{url('blog-details/'.$publish_category ->blog_id)}}">{{$publish_category->blog_title }}</a></h2>

                     <strong>Author:</strong> Steven | <strong>Category:</strong> <a href="{{url('blog-category-view/'.$publish_category->category_id)}}">{{$publish_category->category_name }}</a>
                    
                    <a href="http://www.templatemo.com/page/1" target="_parent"><img src="../{{$publish_category->blog_image }}" alt="image" width="400" /></a>
                    
                    <p>{{$publish_category->blog_short_description }}</p>
                    <p><a href="{{url('blog-details/'.$publish_category ->blog_id)}}">Comments</a> | <a href="{{url('blog-details/'.$publish_category ->blog_id)}}">Continue reading...</a>                </p>
</div>
                    @endforeach
                    <div class="cleaner"></div>
                </div>
            </div>
 
 
 
 @endsection
 