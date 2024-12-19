<x-app-layout>
    @section('content')
    
    <body class="main-layout">
        <div class="wrapper">

            
            <!-- loader  -->
            <div class="loader_bg">
                <!-- <div class="loader"><img src="images/loading.gif" alt="#" /></div> -->
                <div class="loader"><img src="images/Logo Gif 4.gif" alt="#" /></div>
            </div>
             <!-- end loader -->

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
                <div class="layout_padding-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="img_box">
                                    <figure><img src="images/fast clean.jpg" alt="#" /></figure>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 product_detail_side">
                                <div class="abotext_box">
                                    <div class="product-heading">
                                        <h2>Fast Clean</h2>
                                    </div>
                                    <div class="product-detail-side">
                                        <span class="new-price">Rp. 20.000</span>
                                        
                                      
                                    </div>
                                    <div class="detail-contant">
                                        <p>Fast Clean adalah layanan pencucian sepatu di Spatuan yang dirancang untuk Anda yang membutuhkan hasil bersih dalam waktu singkat. Dengan proses cepat namun tetap menjaga kualitas, sepatu Anda akan terlihat segar seperti baru. Layanan ini cocok untuk jenis sepatu yang memerlukan pembersihan ringan tanpa membersihkan bagian dalam sepatu. Percayakan perawatan sepatu Anda pada Spatuan untuk kebersihan maksimal tanpa kompromi waktu!
                                            <br><span class="stock">SEMUA JENIS SEPATU</span>
                                        </p>
                                        <form class="cart" method="post" action="{{ route('cart') }}">
                                            <div class="quantity">
                                                <input step="1" min="1" max="255" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" type="number">
                                            </div>
                                            <button type="submit" class="bt_main">Add to cart
                                                <script>
                                                    document.querySelector('.bt_main').addEventListener('click', function (event) {
                                                        event.preventDefault();
                                                        const product = {
                                                            name: 'Fast Clean',
                                                            price: 30000,
                                                            quantity: document.querySelector('input[name="quantity"]').value,
                                                            image: 'images/fast clean.jpg'
                                                        };
                                                        let cart = JSON.parse(localStorage.getItem('cart')) || [];
                                                        cart.push(product);
                                                        localStorage.setItem('cart', JSON.stringify(cart));
                                                        window.location.href = '{{ route('cart') }}';
                                                    });
                                                </script></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="full">
                                    <div class="tab_bar_section">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#description">Description</a> </li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div id="description" class="tab-pane active">
                                                <div class="product_desc">
                                                    <p>Fast Clean Sepatu: Solusi Cepat untuk Kebersihan Sepatu Anda.
                                                        <br><br>Fast Clean adalah layanan pembersihan sepatu praktis di Spatuan, dirancang untuk Anda yang menginginkan kebersihan maksimal dalam waktu singkat. Proses ini menyasar pembersihan ringan yang tetap menjaga keindahan dan kenyamanan sepatu Anda tanpa memakan banyak waktu.
                                                        
                                                        <br><br>- Pembersihan Bagian Luar
                                                        <br>Bagian luar sepatu akan dibersihkan dengan produk pembersih khusus yang aman untuk bahan sepatu seperti kanvas, kulit sintetis, dan bahan lainnya. Dengan teknik cepat namun efisien, noda dan kotoran ringan di permukaan sepatu dapat dihilangkan, menjadikan sepatu Anda kembali bersinar.
                                                        
                                                        <br><br>- Pembersihan Upper dan Midsole
                                                        <br>Bagian upper (atas sepatu) dan midsole (bantalan tengah) dibersihkan secara menyeluruh untuk memastikan sepatu terlihat segar. Proses ini dilakukan dengan hati-hati untuk mempertahankan kualitas bahan tanpa merusak struktur sepatu Anda.
                                                 
                                                        <br><br>- Kesimpulan
                                                        <br>Layanan Fast Clean di Spatuan adalah pilihan tepat untuk pembersihan cepat yang tetap memberikan hasil maksimal. Sepatu Anda akan terlihat bersih dan segar, siap untuk mendukung aktivitas Anda. Hemat waktu tanpa mengorbankan kualitas!
                                                        <br>
                                                        </p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
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

    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>


        </body>

        @endsection
</x-app-layout>
