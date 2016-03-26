    <!--footer start-->
    <footer class="site-footer">
          <div class="text-center">
              2013 &copy; FlatLab by VectorLab.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
    <!--footer end-->

</section>

  	{{ HTML::script('js/jquery.js') }}
  	{{ HTML::script('js/bootstrap.min.js') }}
  	{{ HTML::script('js/jquery.dcjqaccordion.2.7.js', array('class' => 'include')) }}
  	{{ HTML::script('js/jquery.scrollTo.min.js') }}
  	{{ HTML::script('js/jquery.nicescroll.js') }}
  	{{ HTML::script('js/respond.min.js') }}
    {{ HTML::script('js/slidebars.min.js') }}
  	{{ HTML::script('js/common-scripts.js') }}
  	@yield('script')
  	{{ HTML::script('js/custom.js') }}
    <script type="text/javascript">
      var baseUrl = '{{asset('/')}}';
      $(document).on('ready', function() {
        
$('#category').on('change',function(){

          var category_id = $(this).val();


          $.ajax({

              method: "GET",
              url: (baseUrl+"admin/subcategory/"+category_id),
              dataType  : 'json',
              success: function(response){

                console.log(response);
                
                if(response.code==200){
                    var items="";

                    $('#subcategory').empty();
                    $.each( response.data.categories, function( i , obj ) {
                        $('<option value='+obj.id+'>'+obj.name+'</option>').appendTo('#subcategory');
                   });

                    
                    
                }
               



                
              },
              error: function(){
                 console.log("sorry you request cannot be processed");
              }

            });
      });
     

      

    });
      
    </script>

    

