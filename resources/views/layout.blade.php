<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Red Hat APAC Services | Overview</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    
    @yield('stylesheets')
    
    {!! Minify::stylesheet(array('/css/animate.css', '/css/style.css')) !!}
    
</head>

<body class="fixed-sidebar">

<div id="wrapper">
    
    <!-- Sidebar start -->
    <nav class="navbar-default navbar-static-side" role="navigation">
        @include('common.sidebar')
    </nav>
    <!-- Sidebar end -->

    <!-- Page content start -->
    <div id="page-wrapper" class="gray-bg">
        @include('common.navbar')
        @yield('content')
    </div>
    <!-- Page content end -->
    
</div>

<!-- Mainly scripts -->
{!! Minify::javascript(array(
    '/js/jquery-2.1.1.js',
    '/js/plugins/metisMenu/jquery.metisMenu.js'
)) !!}
<script src="/js/bootstrap.min.js"></script>
<script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
{!! Minify::javascript('/js/inspinia.js') !!}

@yield('scripts')

<script type="text/javascript">
$(document).ready(function() {
    
    @yield('javascript')
        
});
</script>
</body>

</html>