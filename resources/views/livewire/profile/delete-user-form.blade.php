<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Livewire\Volt\Component;

new class extends Component
{
    public string $password = '';

    /**
     * Delete the currently authenticated user.
     */
    public function deleteUser(Logout $logout): void
    {
        $this->validate([
            'password' => ['required', 'string', 'current_password'],
        ]);

        tap(Auth::user(), $logout(...))->delete();

        $this->redirect('/', navigate: true);
    }
}; ?>
        <head>
<section class="black">
    <header>
        <h2 class="black">
            {{ __('Delete Account') }}
        </h2>

        <p class="black">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Delete Account') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->isNotEmpty()" focusable>
        <form wire:submit="deleteUser" class="black">

            <h2 class="black">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="black">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="black">
                <x-input-label for="password" value="{{ __('Password') }}" class="black" />

                <x-text-input
                    wire:model="password"
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->get('password')" class="black" />
            </div>

            <div class="black">
                <x-secondary-button x-on:click="$dispatch('close')" class="black">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="black">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>



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

    </x-modal>
</section>
