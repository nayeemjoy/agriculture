@extends('layouts.site')
@section('content')
        <div id="posts">
          <div class="card">
            <div>
               <div class="card-image">
              <img src="{{asset($post->photo)}}" height="400px;">
              <span class="card-title">{{$post->title}}</span>
            </div>
            </div>
            <div class="card-content">
              <p>{{$post->description}}</p>
            </div>
            <div class="card-action">
              <a href="#">Uploaded Date : {{$post->created_at}}</a>
            </div>
       </div>
        </div>
        <!-- card -->
      

        <!-- end card -->


        <!-- card -->
        

        <!-- end card -->

        <div class="row">
          <div class="col s12 m12">
            <ul class="pagination" id="pagination">
              
            </ul>
          </div>
        </div>
        
@stop
@section('script')
<script type="text/javascript">
  $(document).ready(function(){
      // $('.cart').hide();
      $(".button-collapse").sideNav();
      $('.modal-trigger').leanModal();
      $('.collapsible').collapsible({
        accordion : false 
      });
      $('select').material_select();  
      
  });

</script>
@stop