<!DOCTYPE html>
<html>
<head>
    <title>IPO Saudi</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('icon_fonts_assets/font-awesome/css/font-awesome.min.css')}}" async defer>
    <link href="{{ asset('bower_components/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="{{ asset('bower_components/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet">
    <link href="{{ asset('bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css')}}" rel="stylesheet">
    <link href="{{ asset('bower_components/slick-carousel/slick/slick.css')}}" rel="stylesheet">
    <link href="{{ asset('css/pretty.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/main.css?version=4.5.0')}}" rel="stylesheet">
     <link href="{{ asset('css/custom.css')}}" rel="stylesheet">
    <link href="{{ asset('css/custom-dashboard-style.css')}}" rel="stylesheet">
    <link href="{{ asset('bower_components/toastr/toastr.min.css')}}" rel="stylesheet">
    <link href="{{ asset('bower_components/dropify/dropify.min.css')}}" rel="stylesheet">
    <link href="{{ asset('bower_components/dropzone/dropzone.min.css')}}" rel="stylesheet">
    <link href="{{ asset('icon_fonts_assets/feather/style.css')}}" rel="stylesheet">
    @yield('styles')
</head>
<body class="menu-position-side menu-side-left full-screen">
    <div class="all-wrapper with-side-panel solid-bg-all">
        <div class="layout-w">
            @include('components.includes.mobile-menu')
            @include('components.includes.side-menu')
            <div class="content-w">
                @include('components.includes.top-bar')
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('bower_components/moment/moment.js')}}"></script>
    <script src="{{ asset('bower_components/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{ asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{ asset('bower_components/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
    <script src="{{ asset('bower_components/ckeditor/ckeditor.js')}}"></script>
    <script src="{{ asset('bower_components/bootstrap-validator/dist/validator.min.js')}}"></script>
    <script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{ asset('bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{ asset('bower_components/editable-table/mindmup-editabletable.js')}}"></script>
    <script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{ asset('bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
    <script src="{{ asset('bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{ asset('bower_components/tether/dist/js/tether.min.js')}}"></script>
    <script src="{{ asset('bower_components/slick-carousel/slick/slick.min.js')}}"></script>
    <script src="{{ asset('bower_components/bootstrap/js/dist/util.js')}}"></script>
    <script src="{{ asset('bower_components/bootstrap/js/dist/alert.js')}}"></script>
    <script src="{{ asset('bower_components/bootstrap/js/dist/button.js')}}"></script>
    <script src="{{ asset('bower_components/bootstrap/js/dist/carousel.js')}}"></script>
    <script src="{{ asset('bower_components/bootstrap/js/dist/collapse.js')}}"></script>
    <script src="{{ asset('bower_components/bootstrap/js/dist/dropdown.js')}}"></script>
    <script src="{{ asset('bower_components/bootstrap/js/dist/modal.js')}}"></script>
    <script src="{{ asset('bower_components/bootstrap/js/dist/tab.js')}}"></script>
    <script src="{{ asset('bower_components/bootstrap/js/dist/tooltip.js')}}"></script>
    <script src="{{ asset('bower_components/bootstrap/js/dist/popover.js')}}"></script>
    <script src="{{ asset('js/demo_customizer.js?version=4.5.0')}}"></script>
    <script src="{{ asset('js/main.js?version=4.5.0')}}"></script>
    {{-- custom libraries  --}}
    <script src="{{ asset('bower_components/toastr/toastr.min.js')}}"></script>
    <script src="{{ asset('bower_components/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{ asset('bower_components/dropify/dropify.min.js')}}"></script>
    <script src="{{ asset('bower_components/dropzone/dropzone.min.js')}}"></script>
    <script src="{{ asset('js/custom/form.js')}}"></script>
    <script>
        Dropzone.autoDiscover = false;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function resetDropify(file = "") {
            drEvent = $('.dropify').data('dropify');
            drEvent.resetPreview();
            drEvent.clearElement();
            drEvent.settings.defaultFile = file;
            drEvent.destroy();
            drEvent.init();
        }

        $(document).ready(function() {
            $('.btn-delete').on('click', function(e) {
                var deleteButton =$(this);

                e.preventDefault();

                swal({
                    title: 'Are you sure?',
                    text: 'This record and it`s details will be permanantly deleted!',
                    icon: 'warning',
                    buttons: ["Cancel", "Yes!"],
                }).then(function(value) {
                    if (value) {
                        deleteButton.parent('form').submit();
                    }
                });
            });
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": true,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1500",
                "timeOut": "5000",
                "extendedTimeOut": "1500",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }

            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    toastr.error("{{ $error }}");
                @endforeach
            @endif

            @if(Session::has('success'))
                toastr.success("{{ Session::get('success') }}");
            @endif

            @if(Session::has('info'))
                toastr.info("{{ Session::get('info') }}");
            @endif

            @if(Session::has('warning'))
                toastr.warning("{{ Session::get('warning') }}");
            @endif

            $('.dropify').dropify();
        })
    </script>
     @yield('scripts')
</body>
</html>
