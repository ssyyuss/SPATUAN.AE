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
                                    <figure><img src="images/white shoes.jpg" alt="#" /></figure>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 product_detail_side">
                                <div class="abotext_box">
                                    <div class="product-heading">
                                        <h2>White Shoes Treatment</h2>
                                    </div>
                                    <div class="product-detail-side">
                                        <span class="new-price">Rp. 30.000</span>
                                    </div>
                                    <div class="detail-contant">
                                        <p>White Shoes Treatment adalah layanan khusus untuk menjaga sepatu putih tetap bersih, cerah, dan terawat. Proses ini mencakup pembersihan mendalam bagian luar, insole, upper, midsole, hingga tali sepatu dengan teknik dan produk yang aman. Kami memastikan sepatu putih Anda bebas dari noda, debu, dan bau, sehingga tampil seperti baru. Percayakan sepatu putih Anda kepada Spatuan untuk hasil maksimal!
                                            <br><span class="stock">SEMUA JENIS SEPATU</span>
                                        </p>
                                        <form class="cart" method="post" action="shop-cart.html">
                                            <div class="quantity">
                                                <input step="1" min="1" max="255" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" type="number">
                                            </div>
                                            <button type="submit" class="bt_main">Add to cart
                                                <script>
                                                    document.querySelector('.bt_main').addEventListener('click', function (event) {
                                                        event.preventDefault();
                                                        const product = {
                                                            name: 'White Shoes Treatment',
                                                            price: 30000,
                                                            quantity: document.querySelector('input[name="quantity"]').value,
                                                            image: 'images/white shoes.jpg'
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
                                                    <p>White Shoes Treatment: Perawatan Menyeluruh untuk Sepatu Putih Anda
                                                        <br>White Shoes Treatment adalah layanan deep clean khusus untuk sepatu putih Anda. Dengan pendekatan menyeluruh, kami memastikan sepatu putih Anda bersih sempurna, tetap cerah, dan awet terawat, baik di luar maupun dalam. 
                                                        
                                                        <br><br>- Pembersihan Bagian Luar
                                                        
                                                        <br>Kami membersihkan bagian luar sepatu putih Anda menggunakan produk pembersih khusus yang aman untuk bahan seperti kulit, kanvas, atau sintetis. Teknik kami menghilangkan noda, debu, dan kotoran yang menempel tanpa merusak warna putih alami sepatu Anda.
                                                        
                                                        <br><br>- Pembersihan Insole
                                                        
                                                        <br>Bagian dalam sepatu sering kali menjadi tempat bau dan kotoran tersembunyi. Kami mencopot insole dan membersihkannya secara menyeluruh dengan bahan khusus yang membasmi bakteri dan menghilangkan bau, memberikan kenyamanan ekstra saat dipakai.
                                                        
                                                        <br><br>- Pembersihan Upper
                                                        
                                                        <br>Bagian atas (upper) dan bantalan tengah (midsole) sepatu putih Anda akan dibersihkan dengan teknik detail. Kami memastikan tidak ada kotoran yang tertinggal di setiap celah, sehingga warna putih tetap terjaga, tekstur bahan awet, dan sepatu tampak baru.
    
                                                        <br><br>- Pembersihan Laces
                                                        
                                                        <br>Tali sepatu putih Anda juga tidak luput dari perhatian. Kami membersihkan dan memutihkan laces agar kembali tampak bersih sempurna, melengkapi perawatan sepatu Anda.
                                                        
                                                        <br><br>- Kesimpulan
                                                        
                                                        <br>White Shoes Treatment dari Spatuan adalah solusi terbaik untuk menjaga sepatu putih Anda tetap bersih, cerah, dan tahan lama. Dengan perawatan yang teliti, sepatu Anda akan selalu siap mendukung penampilan terbaik Anda setiap hari!     
                                                        <br>Cara ngerun p
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
