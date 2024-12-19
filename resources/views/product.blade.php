<x-app-layout>
    @section('content')
    <body class="main-layout">

  <div id="content">
      <div class="contactus">
   <div class="container-fluid">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="title">
                     <h2>Our Service</h2>
                    
                  </div>
               </div>
            </div>
          </div>
</div>
<div class="ourproduct">
  <div class="container">
     <div class="row product_style_3" ">
      <!-- product -->
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="full product">
          <div class="product_img">
            <div class="center"> <img src="images/deep clean.jpg" alt="#"/>
              <div class="overlay_hover"> <a class="add-bt" href="{{ route('pdetail1') }}">Lihat Detail Product</a> </div>
            </div>
          </div>
          <div class="product_detail text_align_center">
            <p class="product_price">Rp. 30.000 </p>
            <p class="product_descr">Deep Clean</p>
          </div>
        </div>
      </div>
      <!-- end product -->
      <!-- product -->
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="full product">
          <div class="product_img">
            <div class="center"> <img src="images/fast clean.jpg" alt="#"/>
              <div class="overlay_hover"> <a class="add-bt" href="{{ route('pdetail2') }}">Lihat Detail Product</a> </div>
            </div>
          </div>
          <div class="product_detail text_align_center">
            <p class="product_price">Rp. 20.000</p>
            <p class="product_descr">Fast Clean</p>
          </div>
        </div>
      </div>
      <!-- end product -->
      <!-- product -->
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="full product">
          <div class="product_img">
            <div class="center"> <img src="images/white shoes.jpg" alt="#"/>
              <div class="overlay_hover"> <a class="add-bt" href="{{ route('pdetail3') }}">Lihat Detail Product</a> </div>
            </div>
          </div>
          <div class="product_detail text_align_center">
            <p class="product_price">Rp. 35.000</p>
            <p class="product_descr">White Shoes Treatment</p>
          </div>
        </div>
      </div>
      <!-- end product -->
    </div>
  </div>
</div>

   <!-- Javascript files--> 
   <script src="js/jquery.min.js"></script> 
   <script src="js/popper.min.js"></script> 
   <script src="js/bootstrap.bundle.min.js"></script> 
   <script src="js/jquery-3.0.0.min.js"></script> 
   <script src="js/plugin.js"></script> 
   <!-- sidebar --> 
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
   <script src="js/custom.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  <script type="text/javascript">
     $(document).ready(function () {
         $("#sidebar").mCustomScrollbar({
             theme: "minimal"
         });

         $('#dismiss, .overlay').on('click', function () {
             $('#sidebar').removeClass('active');
             $('.overlay').removeClass('active');
         });

         $('#sidebarCollapse').on('click', function () {
             $('#sidebar').addClass('active');
             $('.overlay').addClass('active');
             $('.collapse.in').toggleClass('in');
             $('a[aria-expanded=true]').attr('aria-expanded', 'false');
         });
     });
   </script>


   <script>
      $(document).ready(function(){
      $(".fancybox").fancybox({
      openEffect: "none",
      closeEffect: "none"
      });
      
      $(".zoom").hover(function(){
      
      $(this).addClass('transition');
      }, function(){
      
      $(this).removeClass('transition');
      });
      });
      
   </script> 

</body>
    @endsection
</x-app-layout>
