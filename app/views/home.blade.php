@extends('layouts.site')
@section('content')
        
        <div id="posts">
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

      $.ajax({

      method: "GET",
      url: (baseUrl+"posts"),
      dataType  : 'json',
      success: function(response){

        console.log(response);
        
        if(response.code==200){

            var first_page = response.data.from;
            var last_page = response.data.last_page;
            var current_page = response.data.current_page;
            
            
           make_pagination(current_page,last_page);

            //$('<li class="waves-effect"><a href="' + (first_page-1) + '"><i class="material-icons">chevron_left</i></a></li>').prependTo(pagination);                      

          $.each( response.data.data, function( i , obj ) {
               makeCards(obj);
           });

          updateAbleUrl = baseUrl+"posts?page=";
        }
       



        
      },
      error: function(){
         console.log("sorry you request cannot be processed");
      }

    });




       
      
  });

</script>
@stop