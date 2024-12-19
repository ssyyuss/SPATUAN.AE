<x-app-layout>
    @section('content')
    
   <div class="main-layout">
    <div class="wrapper">
        

    <div class="black">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow sm:rounded-lg p-6">
                {{-- <h3 class="text-lg font-bold mb-4">Update Profile Information</h3> --}}
                <livewire:profile.update-profile-information-form />
            </div>
    
            <div class="bg-white shadow sm:rounded-lg p-6 mt-6">
                {{-- <h3 class="text-lg font-bold mb-4">Update Password</h3> --}}
                <livewire:profile.update-password-form />
            </div>
    
            <div class="bg-white shadow sm:rounded-lg p-6 mt-6">
                {{-- <h3 class="text-lg font-bold mb-4 text-red-500">Delete Account</h3> --}}
                <livewire:profile.delete-user-form />
            </div>
        </div>
    </div>
    </div>
</div>


    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
    </head>
    
    <body>
    
        <!-- Javascript -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    
        <!-- Inline Scripts -->
        <script>
            $(document).ready(function () {
                // Sidebar behavior
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                    $('.overlay').toggleClass('active');
                });
                $('#dismiss, .overlay').on('click', function () {
                    $('#sidebar').removeClass('active');
                    $('.overlay').removeClass('active');
                });
    
                // Fancybox
                $(".fancybox").fancybox({
                    openEffect: "none",
                    closeEffect: "none",
                });
    
                // Zoom effect
                $(".zoom").hover(
                    function () {
                        $(this).addClass('transition');
                    },
                    function () {
                        $(this).removeClass('transition');
                    }
                );
            });
        </script>
    </body>
    
    @endsection
</x-app-layout>