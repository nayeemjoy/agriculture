<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

                <!-- dashboard -->

                  <li>

                      <a href="{{ URL::route('dashboard') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  {{-- Task Manager --}}
                  <!-- <li>

                      <a href="#">
                          <i class="fa fa-tasks"></i>
                          <span>Task Manager</span>
                      </a>
                  </li> -->
                  {{-- Post Manager --}}
                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-tasks"></i>
                          <span>Post</span>
                      </a>
                      <ul class="sub">
                        <li><a href="{{ route('post.create') }}">Create New Post</a></li>   
                        <li><a href="{{ route('post.index') }}">All Posts</a></li>                    
                      </ul>
                  </li>


                  









              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>