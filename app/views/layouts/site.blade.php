<!DOCTYPE html>
<html lang="en">
@include('site.includes.header')


<body>

@include('site.includes.topMenu')



  <!-- Page Content goes here -->
  <div class="section" style="margin:0px;">
    <div class="search-category">
      <div class="row">
        <div class="col m3">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="{{asset('img/card/head.jpg')}}">
            </div>
          </div>
           
        </div>
        <div class="col m9">
            <h5>কৃষি</h5>
            <p>আমাদের অর্থনীতিতে কৃষির অবদান অনস্বীকার্য। কৃষকদের প্রায় প্রতিদিনই বীজ, ফসল ও জমি সংক্রান্ত কোনো না কোনো সমস্যায় পড়তে হয়। সর্বসাধারণকে তথ্য ও আনুষঙ্গিক সেবা প্রদানের উদ্দেশ্যে পরিচালিত ইউনিয়ন তথ্য ও সেবাকেন্দ্র থেকে কৃষকদেরকে যথাসময়ে সঠিক তথ্য সরবরাহ করার উদ্দেশ্যেই জাতীয় ই-তথ্যকোষের কৃষি পাতাটি। বিভিন্ন সরকারি ও বেসরকারি প্রতিষ্ঠানসমূহ তাদের তৈরি ও প্রকাশিত গবেষণাধর্মী কৃষিবিষয়ক তথ্যাদি স্বতঃস্ফূর্তভাবে পরিবেশন করে তথ্যকোষের কৃষি বিভাগকে সমৃদ্ধিতে সহায়তা করেছেন। এই বিভাগে কৃষিবিষয়ক তথ্যাদি টেক্সট, অডিও, ভিডিও, এনিমেশন এবং ছবি আকারে পাওয়া যাবে।</p>
        </div>
      </div>

    </div>
    <div class="row">
      
       <!-- Start Side Content -->
		@include('site.includes.sideBar')

      <!-- End side content -->
       <!-- view content -->

    <div class="col s12 m9">
      <div class="view-content">
        
        <!-- search division -->
        @include('site.includes.searchBar')
        
        <!-- end search end category -->
        @yield('content')
        

      </div>      
    </div>

    <!-- end view content -->
   
      
    </div> 

    <!-- end side content  -->

      
  </div>

  <!-- end page layout -->
  

            



@include('site.includes.footer')
@yield('script')


</body>
</html>
