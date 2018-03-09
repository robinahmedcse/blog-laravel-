 <h4>Friends</h4>

<?php 

                 $recent_blogs=DB::table('blogs')
                     ->orderBy('hite_count','desc')
                     ->take(2)
                     ->get(); 
 ?>
 
 
                <ul class="templatemo_list">
                     @foreach($recent_blogs as $recent_blogs)
                      <li><a href="{{url('blog-details/'.$recent_blogs ->blog_id)}}">{{$recent_blogs-> blog_title}}</a>&nbsp({{$recent_blogs-> hite_count}})</li>
                      @endforeach
                </ul>