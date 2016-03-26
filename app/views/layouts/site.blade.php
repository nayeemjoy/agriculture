<!DOCTYPE html>
<html lang="en">
@include('site.includes.header')


<body>

@include('site.includes.topMenu')



  <!-- Page Content goes here -->
  <div class="section" style="margin:0px;">
  <!-- Page Layout here -->
    <!-- <div>
      khkjh
    </div> -->
  <!-- side content -->
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
