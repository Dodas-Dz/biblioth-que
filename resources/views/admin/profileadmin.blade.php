@include('layouts.header')
<div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand font-weight-bold" href="javascript:void(0)">Profil Employé</a>
          </div>
       
        @include('layouts.bar')
      </nav>

      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">


        <div class="row">
            <div class="col-lg-12 col-md-12 ">
              <div class="card ">
                <div class="card-header card-header-warning " >
                  <h2 class="card-title text-center font-sans-serif">Mes Informations</h2>
                
                </div>
       

        
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                 
                     
                  
                    <tbody>
                      <tr class="  text-dark"> 
                       <div>
                       <div> <td class="font-weight-bold">Nom</td></div>
                       <div> <td>{{ Auth::user()->name }}</td></div>
                      </div>
                    
                        <td><a href="#"><i class="fa fa-edit" ></i></a></td>
                      </tr>
                      <tr class="  text-dark"> 
                       <div>
                       <div> <td class="font-weight-bold">Prénom</td></div>
                       <div> <td>{{ Auth::user()->prenom }}</td></div>
                      </div>
                    
                        <td><a href="#"><i class="fa fa-edit" ></i></a></td>
                      </tr>
                      <tr class="  text-dark"> 
                       <div>
                       <div> <td class="font-weight-bold">Email</td></div>
                       <div> <td>{{ Auth::user()->email }}</td></div>
                      </div>
                    
                        <td><a href="#"><i class="fa fa-edit" ></i></a></td>
                      </tr>
                      <tr class="  text-dark"> 
                       <div>
                       <div> <td class="font-weight-bold">Poste</td></div>
                       <div> <td>{{ Auth::user()->role }}</td></div>
                      </div>
                    
                        <td><a href="#"><i class="fa fa-edit" ></i></a></td>
                      </tr>
                    </tbody>
                  </table>
                  </div>
            </div>
        </div>
               
              </div>
                  <div>
              <button type="submit"  class="btn btn-primary pull-right" >
                      <a class=" fw-bold fs-1"
                         href="#"> 
                        <i class="fw-bold fs-2 fa fa-plus text-white ms- n2"> </i> </a>Enregistrer</button>
                   
                      </div>
            
           
      
                    
   
            
           
      
                    
                  
                
         
        </div>
      </div>


      
<script>    $(document).ready(function() {​​​​​​   
   $().ready(function() {​​​​​​     
    $sidebar = $('.sidebar');     
     $sidebar_img_container = $sidebar.find('.sidebar-background');     
      $full_page = $('.full-page');      
      $sidebar_responsive = $('body > .navbar-collapse');  
          window_width = $(window).width();      
      $('.fixed-plugin a').click(function(event) {​​​​​​  
           
     // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, 
     otherwise we set the  section active          if ($(this).hasClass('switch-trigger')) {​​​​​​     
            if (event.stopPropagation) {​​​​​​              event.stopPropagation();   
               }​​​​​​ else if (window.event) {​​​​​​              window.event.cancelBubble = true;    
               }​​​​​​          }​​​​​​        }​​​​​​);        $('.fixed-plugin .active-color span').click(function() {​​​​​​       
          $full_page_background = $('.full-page-background');          $(this).siblings().removeClass('active');    
              $(this).addClass('active');          var new_color = $(this).data('color');       
           if ($sidebar.length != 0) {​​​​​​            $sidebar.attr('data-color', new_color);      
             }​​​​​​          if ($full_page.length != 0) {​​​​​​            $full_page.attr('filter-color', new_color);   
                }​​​​​​          if ($sidebar_responsive.length != 0) {​​​​​​        
              $sidebar_responsive.attr('data-color', new_color);          }​​​​​​     
             }​​​​​​);        $('.fixed-plugin .background-color .badge').click(function() {​​​​​​   
                  $(this).siblings().removeClass('active');          $(this).addClass('active');  
                    var new_color = $(this).data('background-color');          if ($sidebar.length != 0) {​​​​​​    
                    $sidebar.attr('data-background-color', new_color);          }​​​​​​        }​​​​​​);     
               $('.fixed-plugin .img-holder').click(function() {​​​​​​         
              $full_page_background = $('.full-page-background');      
                  $(this).parent('li').siblings().removeClass('active');     
                   $(this).parent('li').addClass('active');        
                 var new_image = $(this).find("img").attr('src');  
                       if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {​​​​​​       
                    $sidebar_img_container.fadeOut('fast', function() {​​​​​​          
                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');     
                         $sidebar_img_container.fadeIn('fast');            }​​​​​​);          }​​​​​​        
                   if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {​​​​​​          
                   var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');          
                   $full_page_background.fadeOut('fast', function() {​​​​​​           
                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');       
                         $full_page_background.fadeIn('fast');            }​​​​​​);          }​​​​​​      
                       if ($('.switch-sidebar-image input:checked').length == 0) {​​​​​​          
                     var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');       
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src'); 



          $sidebar_img_container.css('background-image', 'url("' + new_image + '")');         
   $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');          }​​​​​​​​     
      if ($sidebar_responsive.length != 0) {​​​​​​​​      
        $sidebar_responsive.css('background-image', 'url("' + new_image + '")');    
        }​​​​​​​​        }​​​​​​​​);        $('.switch-sidebar-image input').change(function() {​​​​​​​​    
        $full_page_background = $('.full-page-background');      
      $input = $(this);          if ($input.is(':checked')) {​​​​​​​​        
      if ($sidebar_img_container.length != 0) {​​​​​​​​           
     $sidebar_img_container.fadeIn('fast');            
     $sidebar.attr('data-image', '#');            }​​​​​​​​    
           if ($full_page_background.length != 0) {​​​​​​​​       
          $full_page_background.fadeIn('fast');           
       $full_page.attr('data-image', '#');            }​​​​​​​​   
              background_image = true;          }​​​​​​​​ else {​​​​​​​​   
               if ($sidebar_img_container.length != 0) {​​​​​​​​   
                  $sidebar.removeAttr('data-image');        
              $sidebar_img_container.fadeOut('fast');       
             }​​​​​​​​            if ($full_page_background.length != 0) {​​​​​​​​   
                    $full_page.removeAttr('data-image', '#');        
                $full_page_background.fadeOut('fast');            }​​​​​​​​   
                   background_image = false;          }​​​​​​​​        }​​​​​​​​);    
               $('.switch-sidebar-mini input').change(function() {​​​​​​​​    
                 $body = $('body');          $input = $(this);    
                 if (md.misc.sidebar_mini_active == true) {​​​​​​​​       
                $('body').removeClass('sidebar-mini');            
            md.misc.sidebar_mini_active = false;          
              $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();   
                   }​​​​​​​​ else {​​​​​​​​            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');  
                       setTimeout(function() {​​​​​​​​              $('body').addClass('sidebar-mini');             
              md.misc.sidebar_mini_active = true;            }​​​​​​​​, 300);          }​​​​​​​​ 
                       // we simulate the window Resize so the charts will get updated in realtime. 
                        var simulateWindowResize = setInterval(function() {​​​​​​​​         
                   window.dispatchEvent(new Event('resize'));          }​​​​​​​​, 180);    
                       // we stop the simulation of Window Resize after the animations are completed  
                         setTimeout(function() {​​​​​​​​            clearInterval(simulateWindowResize);       
                    }​​​​​​​​, 1000);        }​​​​​​​​);      }​​​​​​​​);    }​​​​​​​​); 
                  
                  $(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});
 </script>



    