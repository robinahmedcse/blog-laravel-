 
 
  <h4>Categories</h4>
 <ul class="templatemo_list">


     @foreach($publishedCategories as $publishedCategory)
     <li><a href="{{url('category-details/'.$publishedCategory-> category_id)}}">{{$publishedCategory-> category_name}}</a></li>
     @endforeach
 </ul>

   <div class="cleaner_h40"></div>
 
 
 