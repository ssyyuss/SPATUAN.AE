<x-app-layout>
    @section('content')
    <body class="main-layout">
   
        <div class="wrapper">

            

    <div class="sidebar">
     <!-- Sidebar  -->
    <nav id="sidebar">

        <div id="dismiss">
            <i class="fa fa-arrow-left"></i>
        </div>

        <ul class="list-unstyled components">
            
            <li class="active"> <a href="index.html">Home</a></li>
            <li> <a href="about.html">About</a></li>
            <li> <a href="{{ route('product') }}">Pricelist</a></li>

        </ul>

    </nav>
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
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="carousel-caption text">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                        <div class="img_bg">
                                            <h3>LOKASI<br> <strong class="black_nolmal">Jl. Nori no 28/34 Kota Madiun</strong></h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                        <div class="img_bg">
                                            <figure><a href="https://maps.app.goo.gl/FXoHzApRB1LDwweA7" target="_blank"><img src="images/maps2.png" /></figure>
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
                                            <figure><img src="images/maps.png" /></figure>
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
                                            <figure><img src="images/maps" /></figure>
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
        
        @if(Auth::check())
        <div class="contact">
            <div class="container-fluid padddd">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="title">
                            <h2>Become our <strong class="white_bold">Member</strong></h2>
                        </div>
                    </div>
                </div>
                
                {{-- Error Handling --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
        
                {{-- Success Message --}}
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
        
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
                        <div class="map_section">
                            <div id="map"></div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
                        <form id="memberForm" class="main_form" method="POST" action="{{ route('contact.store') }}" 
                              onsubmit="return validateForm()">
                            @csrf
                            @method('POST')
                            
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" 
                                           placeholder="Name" 
                                           type="text" 
                                           name="name" 
                                           id="name"
                                           value="{{ old('name') }}"
                                           required 
                                           minlength="2" 
                                           maxlength="50"
                                           pattern="^[a-zA-Z\s]+$"
                                           title="Name can only contain letters and spaces">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" 
                                           placeholder="Email" 
                                           type="email" 
                                           name="email" 
                                           id="email"
                                           value="{{ old('email') }}"
                                           required 
                                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                           title="Please enter a valid email address">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" 
                                           placeholder="Phone" 
                                           type="tel" 
                                           name="phone" 
                                           id="phone"
                                           value="{{ old('phone') }}"
                                           required 
                                           pattern="^(0)8[1-9][0-9]{6,10}$"
                                           title="Phone number format (e.g., 08123456789)">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="textarea" 
                                              placeholder="Address" 
                                              name="message" 
                                              id="message"
                                              required 
                                              minlength="10" 
                                              maxlength="500"
                                              title="Address must be between 10-500 characters">{{ old('message') }}</textarea>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="send">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        <script>
        function validateForm() {
            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const phone = document.getElementById('phone');
            const message = document.getElementById('message');
        
            // Prevent XSS by encoding input
            function escapeHtml(unsafe) {
                return unsafe
                    .replace(/&/g, "&amp;")
                    .replace(/</g, "&lt;")
                    .replace(/>/g, "&gt;")
                    .replace(/"/g, "&quot;")
                    .replace(/'/g, "&#039;");
            }
        
            // Additional client-side validation
            if (name.value.trim().length < 2) {
                alert('Name must be at least 2 characters long');
                return false;
            }
        
            if (!/^[a-zA-Z\s]+$/.test(name.value)) {
                alert('Name can only contain letters and spaces');
                return false;
            }
        
            if (!/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/.test(email.value)) {
                alert('Please enter a valid email address');
                return false;
            }
        
            if (!/^(\+62|62|0)8[1-9][0-9]{6,10}$/.test(phone.value)) {
                alert('Please enter a valid Indonesian phone number');
                return false;
            }
        
            if (message.value.trim().length < 10) {
                alert('Message must be at least 10 characters long');
                return false;
            }
        
            // Sanitize inputs
            name.value = escapeHtml(name.value);
            email.value = escapeHtml(email.value);
            phone.value = escapeHtml(phone.value);
            message.value = escapeHtml(message.value);
        
            return true;
        }
        </script>
        @endif

</body>
    @endsection
</x-app-layout>
