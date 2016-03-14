<div class="col s12 m3 category">
        


               
                

  <ul class="collapsible" data-collapsible="accordion">
    @foreach($categories as $category)
    <li>   
      <div class="collapsible-header">{{$category->name}}</div>
      <div class="collapsible-body">
          <div class="collection">
              @foreach($category->sub_categories as $sub_category)
                 <a data-catId="{{$category->id}}" data-subId = "{{$sub_category->id}}" href="" class="collection-item categoryId">{{$sub_category->name}}</a>
              @endforeach
          </div>
      </div>     
    </li>
   @endforeach
    
  </ul>

        

</div>