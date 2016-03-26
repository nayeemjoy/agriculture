<!-- Navbar goes here -->
<header>
  <nav class="light-green lighten-3">
    <div class="nav-wrapper">
      <a href="#" class="left"><img src="{{asset('img/logo.png')}}"></a>
      <a href="#" data-activates="mobile-nav" class="right button-collapse"><i class="mdi-navigation-more-vert"></i></a>
      <ul class="right">
        @if(!Auth::check())
          <li><a href="{{route('login')}}"><span style="font-size:130%;color:;">লগ ইন</span></a></li>
        @else
          <li><a href="{{route('dashboard')}}"><span style="font-size:130%;color:;">এডমিন</span></a></li>
          <li><a href="{{route('logout')}}"><span style="font-size:130%;color:;">লগ আউট</span></a></li>

        @endif
       <!--<li><a href="#">SIGN IN</a></li> --> 
      </ul>
      <div class="left mysearch col s4 l6">
        <form id="keywordSearch">
          <div class="input-field light-green lighten-5 lighten-1">
            <input name="keyword" type="search" id="search-field" class="field" requ placeholder="শব্দ দিয়ে অনুসন্ধান করুন " maxlength="">
            <label for="search-field">  <i class="mdi-action-search"></i></label>
            <i class="mdi-navigation-close close"></i>
          </div>
        </form>
      </div>
    </div>
  </nav>
<!-- 
  <ul class="side-nav" id="mobile-nav">
    <li><a href="#">Link 1</a></li>
    <li><a href="#">Link 2</a></li>
    <li><a href="#">Link 3</a></li>
  </ul> -->

</header>