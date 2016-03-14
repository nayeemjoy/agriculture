

  	{{ HTML::script('site/js/jquery-2.1.1.min.js') }}
  	{{ HTML::script('site/js/jquery-ui.min.js') }}
  	{{ HTML::script('site/js/materialize.min.js') }}

<script type="text/javascript">
	

	
	

      


      function make_pagination(current_page,last_page){

        var pagination = $('#pagination');
        var i = 1;
          if(current_page-2 > 1){
          	i = current_page-2;
          }
          j=i+5;
          next = current_page+1;
          prev = current_page-1;
          if (prev > 1) 
           	{
            	$('<li class="waves-effect pagin"><a class="paginId" href="" data-page='+prev+'><i class="material-icons">chevron_left</i></a></li>').appendTo(pagination);
            }
           while(i<j){
           		if(i>last_page)
           			break;
           		
           		$('<li class="waves-effect '+(i==current_page? "active":"")+'"><a class="paginId" href="" data-page='+i+'>'+ i +'</a></li>').appendTo(pagination);
                i++;
           }
           if (next < last_page) 
           	{
            	$('<li class="waves-effect pagin"><a class="paginId" href="" data-page='+next+'><i class="material-icons">chevron_right</i></a></li>').appendTo(pagination);
            }

         // if((last_page - current_page)==4){

         //        // for(var i=current_page;i<=last_page;i++){

         //        //     $('<li class="waves-effect"><a class="paginId" href="" data-page='+i+'>'+ i +'</a></li>').appendTo(pagination);
         //        // }

         //    }else if((last_page - current_page)<4){
                    
         //          var count = 0;
         //         for(var i=last_page;i>=1;i--){
                     
         //             if(count==5)break;

         //             $('<li class="waves-effect"><a class="paginId" href="" data-page='+i+'>'+ i +'</a></li>').prependTo(pagination);
         //             count++;
         //         }
         //    }
         //    else if((last_page - current_page)>4){

         //        var count = 0;
         //         for(var i=current_page;i<=last_page;i++){
                     
         //             if(count==5)break;

         //             $('<li class="waves-effect"><a class="paginId" href="" data-page='+i+'>'+ i +'</a></li>').appendTo(pagination);
         //             count++;
         //         }

         //    }

         //    if((last_page+1)<=last_page){


         //    }
             
            
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
            +   '<a href="' + ('details/' + post.id) +'"><img src="'+(baseUrl+post.photo)+'"></a>'
            +   ' </div>'  
            +  '</div>'
            +  '<div class="col s12 m9 card-content">'
            +  '<h5 style="margin:0;"><a href = "' + (baseUrl+'details/'+ post.id) + '">' + post.title + '</a></h5>'
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
</script>
    

