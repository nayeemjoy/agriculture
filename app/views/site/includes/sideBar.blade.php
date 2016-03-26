<div class="col s12 m3 category">
        


               
                

  <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header teal" align="center">প্রকারভেদ</div>     
    </li>
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
              <img src="{{asset('img/card/card1.jpg')}}">
              <span class="card-title">ফল হওয়ার</span>
            </div>
            <div class="card-content">
              <p>গাছের উচ্চতা ৪৮-৫৪ ইঞ্চি। ফুল ও ফল হওয়ার সময়ও গাছের বৃদ্ধি হতে থাকে। প্রতি গাছে ৩০-৪০টি ফল ধরে। ফল গোল আকারের। রঙ হালকা লাল। ফলের চামড়ার উপরে শিরা দেখা যায়। প্রতিটি ফলের ওজন ৮০-৯০ গ্রাম। গাছ থেকে এক মাসের বেশি সময় ধরে ফল সংগ্রহ করা যায়। শীত মৌসুমে আগাম চাষ করা যা</p>
            </div>
            <div class="card-action">
              <!-- <a href="#">This is a link</a> -->
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="card">
            <div class="card-image">
              <img src="{{asset('img/card/card2.jpg')}}">
              <span class="card-title">ফল হওয়ার</span>
            </div>
            <div class="card-content">
              <p>গাছের উচ্চতা ৪৮-৫৪ ইঞ্চি। ফুল ও ফল হওয়ার সময়ও গাছের বৃদ্ধি হতে থাকে। প্রতি গাছে ৩০-৪০টি ফল ধরে। ফল গোল আকারের। রঙ হালকা লাল। ফলের চামড়ার উপরে শিরা দেখা যায়। প্রতিটি ফলের ওজন ৮০-৯০ গ্রাম। গাছ থেকে এক মাসের বেশি সময় ধরে ফল সংগ্রহ করা যায়। শীত মৌসুমে আগাম চাষ করা যা</p>
            </div>
            <div class="card-action">
              <!-- <a href="#">This is a link</a> -->
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="card">
            <div class="card-image">
              <img src="{{asset('img/card/card3.jpg')}}">
              <span class="card-title">ফল হওয়ার</span>
            </div>
            <div class="card-content">
              <p>গাছের উচ্চতা ৪৮-৫৪ ইঞ্চি। ফুল ও ফল হওয়ার সময়ও গাছের বৃদ্ধি হতে থাকে। প্রতি গাছে ৩০-৪০টি ফল ধরে। ফল গোল আকারের। রঙ হালকা লাল। ফলের চামড়ার উপরে শিরা দেখা যায়। প্রতিটি ফলের ওজন ৮০-৯০ গ্রাম। গাছ থেকে এক মাসের বেশি সময় ধরে ফল সংগ্রহ করা যায়। শীত মৌসুমে আগাম চাষ করা যা</p>
            </div>
            <div class="card-action">
              <!-- <a href="#">This is a link</a> -->
            </div>
          </div>
        </div>
    </div>

        

</div>