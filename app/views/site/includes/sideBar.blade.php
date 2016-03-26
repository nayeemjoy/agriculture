<div class="col s12 m3 category">
        


               
                

  <ul class="collapsible" data-collapsible="accordion">
    @foreach($categories as $category)
    <li>   
      <div class="collapsible-header">{{$category->name}}</div>
      <div class="collapsible-body">
          <div class="collection">
              @foreach($category->sub_categories as $sub_category)
                 <a data-catId="{{$category->id}}" data-subId = "{{$sub_category->id}}" href="" class="collection-item categoryId">{{$sub_category->name}}({{$sub_category->total}})</a>
              @endforeach
          </div>
      </div>     
    </li>
   @endforeach
    
  </ul>

  <div class="row">
        <div class="col s12">
          <div class="card">
            <div class="card-image">
              <img src="http://materializecss.com/images/sample-1.jpg">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
    </div>

        

</div>