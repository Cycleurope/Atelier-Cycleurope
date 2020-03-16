<!DOCTYPE html>
<html lang="en">
<head>
    @trixassets
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="{{ asset("adminto/assets/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("adminto/assets/css/icons.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("adminto/assets/css/app.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("adminto/assets/libs/quill/quill.core.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("adminto/assets/libs/quill/quill.bubble.css") }}" rel="stylesheet" type="text/css" />        
    <link href="{{ asset("adminto/assets/libs/quill/quill.snow.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("adminto/assets/libs/sweetalert2/sweetalert2.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("css/jquery-ui.min.css") }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('toastify/toastify.css') }}">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <title>L'Atelier Cycleurope</title>
    <style>
        .dataTables_filter {
            width: 100%;
        }
        .dataTables_filter label {
            box-sizing: border-box;
            width: 100%;
            display: block;
            text-align: left;
            padding: 0.5em 0 !important;
            font-weight: 600;
        }
        .dataTables_filter input {
            box-sizing: border-box;
            padding: 0.5em;
            width: 100%;
            display: block;
            margin: 0 !important;
            border: 1px solid #dddddd;
            background: #fafafa;
            border: radius: 0.15em;
            outline: none;
            font-size: 2em;
            font-weight: 600;
        }
    </style>
</head>
<body>
    @include('layouts.header.header-front')
    <div id="app" class="wrapper">
        <div class="container-fluid">
        @yield('content')
        </div>
    </div>  
    <script src="{{ asset('adminto/assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/multiselect/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/jquery-quicksearch/jquery.quicksearch.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/jquery-mask-plugin/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/katex/katex.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/libs/quill/quill.min.js') }}"></script>
    <script src="{{ asset('adminto/assets/js/pages/form-advanced.init.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script src="{{ asset('adminto/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

</body>
</html>