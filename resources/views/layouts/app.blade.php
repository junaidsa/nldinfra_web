<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('public') }}/assets/" data-template="vertical-menu-template">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta charset="utf-8" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/ui/trumbowyg.min.css" integrity="sha512-Fm8kRNVGCBZn0sPmwJbVXlqfJmPC13zRsMElZenX6v721g/H7OukJd8XzDEBRQ2FSATK8xNF9UYvzsCtUpfeJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>NLDINFRA</title>

    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('public') }}/assets/svg/icons/Icon 512 x 512.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/fonts/flag-icons.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/libs/tagify/tagify.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/libs/bs-stepper/bs-stepper.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/libs/tagify/tagify.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/libs/sweetalert2/sweetalert2.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/css/pages/app-chat.css" />
    @yield('css')
    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('public') }}/assets/css/dataTables.min.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/css/pages/page-profile.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css">
    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/fonts/flag-icons.css" />
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/libs/select2/select2.css" />
    <!-- Helpers -->
    <script src="{{ asset('public') }}/assets/vendor/js/helpers.js"></script>


    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('public') }}/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('public') }}/assets/js/config.js"></script>
</head>

<body>

    <div class="container">
        <div class="">
            {{-- <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg> --}}
        </div>
    </div>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar {{ Auth::check() ? '' : 'layout-without-menu' }}">
        <div class="layout-container">
            @auth
                <!-- Menu -->
                @include('layouts.sidebar')
            @endauth
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('layouts.header')
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    @yield('main')
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl">
                            <div
                                class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                                <div>
                                    ©
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> made with by <b>DLSSR Info Teach</b>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('public') }}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/libs/node-waves/node-waves.js"></script>

    <script src="{{ asset('public') }}/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="{{ asset('public') }}/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->
    <!-- Vendors JS -->
    <!-- Vendors JS -->
    <script src="{{ asset('public') }}/assets/vendor/libs/cleavejs/cleave.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/libs/cleavejs/cleave-phone.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
    <!-- Page JS -->
    <script src="{{ asset('public') }}/assets/js/extended-ui-sweetalert2.js"></script>
    <!-- Vendors JS -->
    <script src="{{ asset('public') }}/assets/vendor/libs/tagify/tagify.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/libs/select2/select2.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
    @yield('link-js')

    <!-- Vendors JS -->
    <script src="{{ asset('public') }}/assets/vendor/libs/select2/select2.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <script src="{{ asset('public') }}/assets/js/main.js"></script>
    <script src="{{ asset('public') }}/assets/js/dashboards-crm.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/trumbowyg.min.js" integrity="sha512-YJgZG+6o3xSc0k5wv774GS+W1gx0vuSI/kr0E0UylL/Qg/noNspPtYwHPN9q6n59CTR/uhgXfjDXLTRI+uIryg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
            $('.textarea').trumbowyg();
        $.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
});
    </script>
    @yield('javascript')
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



<!-- / Navbar -->
