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

      var baseUrl = '{{asset('/')}}';


      $.ajax({

      method: "GET",
      url: (baseUrl+"posts"),
      dataType  : 'json',
      success: function(response){

        console.log(response);
        
        if(response.code==200){

            var first_page = response.data.from;
            var last_page = response.data.to;
            var current_page = response.data.current_page;
            var pagination = $('#pagination');
            
            $('<li class="waves-effect"><a href="' + (first_page-1) + '"><i class="material-icons">chevron_left</i></a></li>').prependTo(pagination);

            for(first_page;first_page<=last_page;first_page++){
               
                if(first_page==current_page){
                   $('<li class="active"><a href="'+ first_page + '">'+ first_page +'</a></li>').appendTo(pagination);
                }
                else{
                  $('<li class="waves-effect"><a href="'+ first_page + '">'+ first_page +'</a></li>').appendTo(pagination);
                }
                
            }
            $('<li class="waves-effect"><a href="' + (last_page+1) + '"><i class="material-icons">chevron_right</i></a></li>').appendTo(pagination);

          $.each( response.data.data, function( i , obj ) {
               makeCards(obj);
           });
        }
       



        
      },
      error: function(){
         console.log("sorry you request cannot be processed");
      }

    });

      function makeCards(post){

        


           $('<div class="card">'
            + '<div class="row">'
            +  '<div class="col s12 m3 card-image">'
            +   '<div class="card-image">'
            +   '<a href="' + ('details/' + post.id) +'"><img src="{{asset("site/dhan.JPG")}}"></a>'
            +   ' </div>'  
            +  '</div>'
            +  '<div class="col s12 m9 card-content">'
            +  '<h5 style="margin:0;"><a href = "' + ('details/'+ post.id) + '">' + post.title + '</a></h5>'
            +  '<hr>'
            +  '<p>' + post.description +  '...</p>'
            + '</div></div>'
            + '<div class="card-action">'
            + '<a href="#">Uploaded Date : ' + post.updated_at + '</a>'
            //+ '<a href="#">Seen : 212</a>'
           // + '<a href="#">Uploader : Shafin Sunny</a>'
            +  '<div style="float:right;color:#e57373;margin-right:1%;">'
            // + '<i class="small material-icons grade">grade</i>'
            +'</div></div></div>').prependTo('#posts');

                   
       


        

      }
      
  });

</script>
@stop