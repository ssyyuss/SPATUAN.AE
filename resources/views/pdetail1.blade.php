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
                                <figure><img src="images/deep clean.jpg" alt="#" /></figure>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 product_detail_side">
                            <div class="abotext_box">
                                <div class="product-heading">
                                    <h2>Deep Clean</h2>
                                </div>
                                <div class="product-detail-side">
                                    </span><span class="new-price">Rp. 30.000</span>
                                </div>
                                <div class="detail-contant">
                                    <p>Deep clean adalah layanan pembersihan menyeluruh yang memastikan sepatu Anda bersih dari luar dan dalam. Proses ini mencakup pembersihan bagian luar dengan produk khusus, serta pembersihan insole untuk menghilangkan kotoran dan bau. Kami juga membersihkan upper dan midsole dengan hati-hati agar tetap awet, serta tali sepatu yang sering terabaikan. Dengan layanan deep clean dari Spatuan, Anda akan mendapatkan sepatu yang tidak hanya terlihat bersih, tetapi juga terawat dengan baik di setiap bagiannya.
                                        <br><span class="stock">SEMUA JENIS SEPATU</span>
                                    </p>
                                    <form class="cart" method="post" action="dc cart.html">
                                        <div class="quantity">
                                            <input step="1" min="1" max="255" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" type="number">
                                        </div>
                                        <button type="submit" class="bt_main">Add to cart
                                        <script>
                                            document.querySelector('.bt_main').addEventListener('click', function (event) {
                                                event.preventDefault();
                                                const product = {
                                                    name: 'Deep Clean',
                                                    price: 30000,
                                                    quantity: document.querySelector('input[name="quantity"]').value,
                                                    image: 'images/deep clean.jpg'
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
                                                <p>Deep Clean Sepatu: Perawatan Menyeluruh untuk Sepatu Anda

                                                    Deep clean adalah layanan pembersihan menyeluruh yang dirancang untuk memastikan sepatu Anda tidak hanya terlihat bersih dari luar, tetapi juga terawat dengan baik di bagian dalam. Proses ini mencakup beberapa tahap penting yang menjamin kebersihan dan keawetan sepatu Anda.
                                                    
                                                    <br><br>- Pembersihan Bagian Luar
                                                    
                                                    Pembersihan bagian luar sepatu adalah langkah pertama yang sangat penting. Kami menggunakan produk pembersih khusus yang aman untuk berbagai jenis bahan, seperti kulit, kanvas, dan suede. Dengan teknik yang tepat, kami menghilangkan noda, debu, dan kotoran yang menempel di permukaan sepatu, sehingga sepatu Anda kembali bersinar.
                                                    
                                                    <br><br>- Pembersihan Insole
                                                    
                                                    Insole atau alas dalam sepatu sering kali menjadi tempat penumpukan kotoran dan bau tidak sedap. Dalam layanan deep clean kami, insole akan dicopot dan dibersihkan secara menyeluruh. Kami menggunakan bahan pembersih yang efektif untuk membunuh bakteri dan menghilangkan bau, sehingga memberikan kenyamanan saat dipakai.
                                                    
                                                    <br><br>- Pembersihan Upper
                                                    
                                                    Bagian upper sepatu, yang mencakup bagian atas dan samping, juga mendapatkan perhatian khusus. Kami membersihkan setiap sudut dan celah untuk memastikan tidak ada kotoran yang tersisa. Proses ini membantu menjaga warna dan tekstur bahan agar tetap awet dan menarik.
                                                    
                                                    <br><br>- Pembersihan Midsole
                                                    
                                                    Midsole adalah bagian penting dari sepatu yang berfungsi sebagai penyangga dan bantalan. Kami membersihkan midsole dengan hati-hati untuk menghilangkan noda dan kotoran yang dapat mempengaruhi performa sepatu. Dengan midsole yang bersih, Anda dapat merasakan kenyamanan maksimal saat beraktivitas.
                                                    
                                                    <br><br>- Pembersihan Laces
                                                    
                                                    Laces atau tali sepatu sering kali menjadi bagian yang terabaikan dalam proses pembersihan. Namun, kami percaya bahwa detail kecil sangat penting. Laces akan dicopot dan dibersihkan secara menyeluruh agar tidak hanya terlihat bersih tetapi juga berfungsi dengan baik.
                                                    
                                                    <br><br>- Kesimpulan
                                                    
                                                    Dengan layanan deep clean dari Spatuan, Anda tidak hanya mendapatkan sepatu yang bersih secara visual, tetapi juga perawatan menyeluruh yang memastikan setiap komponen sepatu Anda dalam kondisi terbaik. Percayakan perawatan sepatu Anda kepada kami dan nikmati hasil yang memuaskan!
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
