<!DOCTYPE html>
<html lang="en">

<!--begin::Head-->

<head>
    <base href="">
    <meta charset="utf-8" />
    <title>Recipeat</title>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Recipeat') }}</title>

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--end::Fonts-->

    <!--begin::keencss-->
    <link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('keen/login-1.css') }}" rel="stylesheet" />
    <link href="{{ asset('keen/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">
    <!--end::keencss-->

    @stack('styles')

    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="assets/media/logos/logo-5.png" />
</head>
<!--end::Head-->

<!--begin::Body-->
<body id="kt_body"
    class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-minimize-hoverable">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        @yield('content')
    </div>
    <!--end::Main-->

    <script>
        var HOST_URL = "https://preview.keenthemes.com/keen/theme/tools/preview";
    </script>

    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3E97FF",
                        "secondary": "#E5EAEE",
                        "success": "#08D1AD",
                        "info": "#844AFF",
                        "warning": "#F5CE01",
                        "danger": "#FF3D60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#DEEDFF",
                        "secondary": "#EBEDF3",
                        "success": "#D6FBF4",
                        "info": "#6125E1",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };
    </script>

    <!--end::Global Config-->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>

</body>
<!--end::Body-->

</html>
