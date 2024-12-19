
        <div class="main-layout">
            <div class="wrapper">


                <!-- Sidebar -->
                <nav id="sidebar">
            <div id="dismiss">
                <i class="fa fa-arrow-left"></i>
            </div>
            <ul class="list-unstyled components">
                <li class="{{ request()->routeIs('dashboard') || request()->routeIs('/') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}" wire:navigate>Home</a>
                </li>
                <li class="{{ request()->routeIs('about') || request()->routeIs('/') ? 'active' : '' }}">
                    <a href="{{ route('about') }}" wire:navigate>About</a>
                </li>
                <li class="{{ request()->routeIs('product') || request()->routeIs('/') ? 'active' : '' }}">
                    <a href="{{ route('product') }}" wire:navigate>Pricelist</a>
                </li>
                
                @auth
                    @if(auth()->user()->hasRole('admin'))
                        <li class="{{ request()->routeIs('contacts') || request()->routeIs('/') ? 'active' : '' }}">
                            <a href="{{ route('contacts.index') }}" wire:navigate>Review</a>
                        </li>
                    @endif

                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="button-lg">Logout</button>
                        </form>
                    </li>
                @endauth
                
                @guest
                    <li>
                        <form method="GET" action="{{ route('login') }}">
                            <button type="submit" class="button-lg">Login</button>
                        </form>
                    </li>
                @endguest
            </ul>
        </nav>



                <!-- Header -->
                <header>
                    <div class="header">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-3 logo_section">
                                    <div class="full">
                                        <div class="center-desk">
                                            <div class="logo">
                                                <a href="{{ route('dashboard') }}" wire:navigate>
                                                    <img src="images/Logo Spatuan.png" alt="#">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="right_header_info">
                                        <ul>
                                            <li>
                                                <a href="{{ route('profile') }}" wire:navigate>
                                                    <img style="margin-right: 15px;" src="icon/profile icon.png" alt="#">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('cart') }}" wire:navigate>
                                                    <img style="margin-right: 15px;" src="icon/cart icon.png" alt="#">
                                                </a>
                                            </li>
                                            <li>
                                                <button type="button" id="sidebarCollapse">
                                                    <img src="icon/navigasi list.png" alt="#">
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- Main Content -->
                <div id="content">
                    <main>
                        
                    </main>
                </div>
            </div>
        </div>

        <!-- Footer -->

        <script>
        document.addEventListener('DOMContentLoaded', function () {
        // Toggle sidebar when the sidebarCollapse button is clicked
        document.getElementById('sidebarCollapse').addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('active');
            });

        // Dismiss sidebar when the dismiss (left arrow) button is clicked
        document.getElementById('dismiss').addEventListener('click', function () {
            document.getElementById('sidebar').classList.remove('active');
            });
        });
        </script>
