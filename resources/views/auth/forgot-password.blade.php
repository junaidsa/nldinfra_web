{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('public') }}/assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Forgot Password</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('public') }}/assets/img/favicon/favicon.ico" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/fonts/flag-icons.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/css/rtl/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/css/rtl/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/css/demo.css" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/libs/typeahead-js/typeahead.css" />
    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/libs/sweetalert2/sweetalert2.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="{{ asset('public') }}/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('public') }}/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('public') }}/assets/js/config.js"></script>
</head>

<body>
    <!-- Content -->
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- Forgot Password -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center mb-4 mt-2">
                            <a href="index.html" class="app-brand-link gap-2">
                                <img src="{{ asset('public') }}/assets/img/branding/logo.png" style="height: 50px"
                                    class="app-brand-logo">
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-1 pt-2">Forgot Password? 🔒</h4>
                        <p class="mb-4">Enter your email and we'll send you instructions to reset your password</p>
                        <form id="formAuthentication" class="mb-3" action="{{ route('processForgot.Password') }}"
                            method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" placeholder="Enter your email" autofocus />
                                @error('email')
                                    <span class="invalid-feedback " role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button class="btn btn-primary d-grid w-100">Send Reset Link</button>
                        </form>
                        <div class="text-center">
                            <a href="{{ url('/') }}" class="d-flex align-items-center justify-content-center">
                                <i class="ti ti-chevron-left scaleX-n1-rtl"></i>
                                Back to login
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Forgot Password -->
            </div>
        </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('public') }}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/libs/i18n/i18n.js"></script>
    <script src=".{{ asset('public') }}/assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->
    <!-- Vendors JS -->
    <script src="{{ asset('public') }}/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src=".{{ asset('public') }}/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
    <!-- Main JS -->
    <script src="{{ asset('public') }}/assets/js/main.js"></script>
    <!-- Page JS -->
    <script src="{{ asset('public') }}/assets/js/pages-auth.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
    <!-- Page JS -->
    <script src="{{ asset('public') }}/assets/js/extended-ui-sweetalert2.js"></script>


    @if (Session::get('success'))
        <script>
            $(document).ready(function() {
                Swal.fire({
                    title: 'Success',
                    text: '{{ Session::get('success') }}',
                    icon: 'success',
                    customClass: {
                        confirmButton: 'btn btn-success'
                    },
                    buttonsStyling: false
                });


            })
        </script>
    @endif
    @if (Session::get('error'))
        <script>
            Swal.fire({
                title: 'Error',
                text: '{{ Session::get('error') }}',
                icon: 'error',
                customClass: {
                    confirmButton: 'btn btn-danger'
                },
                buttonsStyling: false
            });
        </script>
    @endif
</body>

</html>
