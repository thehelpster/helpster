    <!DOCTYPE html>
<html lang="en">
<head>
    <title>Helpster</title>
    
    <!-- Add CSRF Token as a meta tag in your head -->
    <meta name="csrf-token" content="{{{ csrf_token() }}}">


    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Helpster</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/helpster.css">
    
    <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/demo.css" />
    <link rel="stylesheet" href="/css/testimonial.css" />
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="favicon.ico" >
    <link rel="icon" href="favicon.ico" >
    <link rel="icon" type="image/gif" href="animated_favicon1.gif">

    @yield('top-script')
</head>
<body>
	@include('partials.navigation')
    <div class="body-content"> 
       @if(Session::has('successMessage'))
        {{{Session::get('successMessage')}}}
        @endif
    @yield('content')
    </div>

    @include('partials.footer')

    <!-- script references -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/jquery.validate.laravel.js"></script>
    <script src="/js/jquery.validate.bootstrap.popover.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/nav-hover.min.js"></script>
    <script type="text/javascript" src="/js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>

    @yield('bottom_script')
</body>
</html>