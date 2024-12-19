<x-app-layout>
    @section('content')
<body class="main-layout">
  
    <div class="sidebar">
       <!-- Sidebar  -->
       <div class="sidebar">
          <!-- Sidebar  -->
         <nav id="sidebar">
 
             <div id="dismiss">
                 <i class="fa fa-arrow-left"></i>
             </div>
 
             <ul class="list-unstyled components">
                 
                 <li class="active"> <a href="index.html">Home</a></li>
                 <li> <a href="about.html">About</a></li>
                 <li> <a href="product.html">Pricelist</a></li>
                 <li> <a href="order_list.html">Order</a></li>
 
             </ul>
 
         </nav>
       </div>
   
   <div id="content">
    


<div class="about">
<div class="container">
  <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
      <div class="aboutimg">
      <h3>About us</h3>
      <p>Spatuan adalah layanan cuci sepatu profesional yang berkomitmen untuk menjaga kebersihan dan keindahan sepatu Anda. Dengan tim ahli dan teknik pembersihan yang canggih, kami memastikan setiap jenis sepatu, mulai dari kulit hingga kanvas, mendapatkan perawatan terbaik tanpa merusak bahan aslinya. Kami percaya bahwa sepatu yang bersih tidak hanya meningkatkan penampilan, tetapi juga memberikan rasa percaya diri. Percayakan perawatan sepatu Anda kepada Spatuan dan nikmati hasil yang segar dan tahan lama!</p>
      </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
      <div class="aboutimg">
      <figure><img src="images/Logo Gif 2.gif"/></figure>
      </div>
    </div>
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
