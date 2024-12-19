<x-app-layout>
    @section('content')
    <div class="container">
        <div class="title">
            <h2>Update Contact <strong class="white_bold">Membership</strong></h2>
        </div>
        <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
            @csrf
            @method('PUT')

            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="{{ $contact->name }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" value="{{ $contact->email }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $contact->phone }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="message" class="col-sm-2 col-form-label">Message</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="message" name="message" rows="4" required>{{ $contact->message }}</textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
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
