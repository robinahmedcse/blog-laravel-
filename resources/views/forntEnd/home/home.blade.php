@extends('forntEnd.master')


 @section('mainContaint')

       <div id="templatemo_content">

                <div class="post_section">

                    <div class="post_date">
                        30<span>Nov</span>
                    </div>
                    @foreach($published_blogs as $published_blog )
                    <div class="post_content">

                        <h2><a href="{{url('blog-details/'.$published_blog ->blog_id)}}">{{$published_blog->blog_title }}</a></h2>

                        <strong>Author:</strong> Steven | <strong>Category:</strong> <a href="{{url('blog-category-view/'.$published_blog->category_id)}}">{{$published_blog->category_name }}</a>

                        <a href="{{url('blog-details/'.$published_blog ->blog_id)}}" target="_parent"><img src="{{$published_blog->blog_image }}" alt="image" width="400"/></a>

                        <p>{{$published_blog->blog_short_description }}</p>
                        
                        <p><a href="{{url('blog-details/'.$published_blog ->blog_id)}}">24 Comments</a> | <a href="{{url('blog-details/'.$published_blog ->blog_id)}}">Continue reading...</a>                </p>
                    </div>
                    @endforeach
                    <div class="cleaner"></div>
                </div>
            </div>
 
 
 
 @endsection
 