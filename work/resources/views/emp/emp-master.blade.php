<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Users</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('/properties/emp properties')}}/images/icons/favicon.ico">

    <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Open+Sans:300,400,600,700,800','Poppins:300,400,500,600,700','Segoe Script:300,400,500,600,700' ] }
        };
        (function(d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = '{{asset('/public/public')}}/assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Open+Sans:300,400,600,700,800','Poppins:300,400,500,600,700','Segoe Script:300,400,500,600,700' ] }
        };
        (function(d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = '{{asset('/public/public')}}/assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('/properties/emp properties')}}/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('/properties/emp properties')}}/css/style.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/properties/emp properties')}}/vendor/fontawesome-free/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>




</head>
<body style="background: radial-gradient( #4CA1AF, #E0FFFF)">
<div class="page-wrapper">
    
    <!-- body -->
    @yield('body')
    <!-- End body -->
</div><!-- End .page-wrapper -->



<!-- Plugins JS File -->
<script src="{{asset('/properties/emp properties')}}/js/jquery.min.js"></script>
<script src="{{asset('/properties/emp properties')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/properties/emp properties')}}/js/plugins.min.js"></script>

<!-- Main JS File -->
<script src="{{asset('/properties/emp properties')}}/js/main.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

</body>
</html>
