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
      var updateAbleUrl = null;

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


      function make_pagination(current_page,last_page){

        var pagination = $('#pagination');

         if((last_page - current_page)==4){

                for(var i=current_page;i<=last_page;i++){

                    $('<li class="waves-effect"><a class="paginId" href="" data-page='+i+'>'+ i +'</a></li>').appendTo(pagination);
                }

            }else if((last_page - current_page)<4){
                    
                  var count = 0;
                 for(var i=last_page;i>=1;i--){
                     
                     if(count==5)break;

                     $('<li class="waves-effect"><a class="paginId" href="" data-page='+i+'>'+ i +'</a></li>').prependTo(pagination);
                     count++;
                 }
            }
            else if((last_page - current_page)>4){

                var count = 0;
                 for(var i=current_page;i<=last_page;i--){
                     
                     if(count==5)break;

                     $('<li class="waves-effect"><a class="paginId" href="" data-page='+i+'>'+ i +'</a></li>').appendTo(pagination);
                     count++;
                 }

            }

            if((last_page+1)<=last_page){

              $('<li class="waves-effect pagin"><a class="paginId" href="" data-page='+i+'><i class="material-icons">chevron_right</i></a></li>').appendTo(pagination);

            }
             
            
            $('.paginId').on('click',function(e){

               e.preventDefault();
               
               
               var page = $(this).data('page');
               console.log(updateAbleUrl+page);
               ajax_call(updateAbleUrl+page);

            });

      }
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

      $('.categoryId').on('click',function(e){
          e.preventDefault();

          var catId = $(this).data('catid');
          var subId = $(this).data('subid');

          var category_search_Url = (baseUrl+"search/category/"+catId+'/'+subId);

          ajax_call(category_search_Url);
          updateAbleUrl = category_search_Url+"?page=";
          
          
      });

      function ajax_call(currentUrl){

          $.ajax({

              method: "GET",
              url: currentUrl,
              dataType  : 'json',
              success: function(response){

                console.log(response);
                
                if(response.code==200){

                    var first_page = response.data.from;
                    var last_page = response.data.last_page;
                    var current_page = response.data.current_page;
                                  
                   
                  $('#posts').empty();

                  $.each( response.data.data, function( i , obj ) {
                       makeCards(obj);
                   });

                  $('#pagination').empty();
                  if(response.data.data.length!=0)
                  make_pagination(current_page,last_page,currentUrl);
                }
               
              
              },
              error: function(){
                 console.log("sorry you request cannot be processed");
              }

          });
      }




       
      
  });

</script>
@stop