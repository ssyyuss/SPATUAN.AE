<x-app-layout>
    @section('content')
    <body class="main-layout">
  </div>

    <div id="content">
        <section class="slider_section">
            <div class="banner_main">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mapimg">
                            <div class="text-bg">
                                <h1 class="black">Christmas <br> <strong class="white_bold">Promo</strong><br></h1>
                                <a href="{{ route('product') }}">shop now <i class='fa fa-angle-right'></i></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="text-img">
                                <figure>
                                    <img src="images/Header giff.gif"/>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- discount -->
        <div class="container">
            <div id="myCarousel" class="carousel slide banner_Client" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="carousel-caption text">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                        <div class="img_bg">
                                            <h3>Cuci 6 Pasang Sepatu <br> <strong class="black_nolmal">Hanya Bayar 5 Pasang</strong></h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                        <div class="img_bg">
                                            <figure><img src="images/sepatu kotor 1.png" /></figure>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="carousel-caption text">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                        <div class="img_bg">
                                            <h3>Aniversary Discount<br> <strong class="black_nolmal">Cuci 2 Bayar 1 Pasang</strong></h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                        <div class="img_bg">
                                            <figure><img src="images/sepatu kotor 3.png" /></figure>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="carousel-caption text">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                        <div class="img_bg">
                                            <h3>Promo Tahun Baru <br> <strong class="black_nolmal">gratis 1 setiap pencucian 3 pasang</strong></h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                        <div class="img_bg">
                                            <figure><img src="images/sepatu kotor 2.png" /></figure>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end discount -->
        <!-- trending -->
        <div class="trending">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="title">
                            <h2>Trending <strong class="white_bold">Treatment</strong></h2>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margitop">
                        <div class="trending-box">
 
                            <figure><img src="images/deep clean.jpg" /></figure>
                            <h3>Deep Clean</h3>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="trending-box">
                            <figure><img src="images/white shoes.jpg" /></figure>
                            <h3>White Shoes Treatment</h3>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margitop">
                        <div class="trending-box">
 <!-- #region -->                            <figure><img src="images/fast clean.jpg" /></figure>
                            <h3>Fast Clean</h3>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end trending -->

        <!-- our brand -->
        <div class="brand">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
            </div>
        </div>
        

        
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });

        });
    </script>


</body>
    @endsection
</x-app-layout>
