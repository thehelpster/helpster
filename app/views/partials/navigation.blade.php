<html>
<head>
    <title>Nav Bar</title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom CSS -->
    <link href="/css/clean-blog.min.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/css/animate.css" rel="stylesheet" />

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Squad theme CSS -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/color/default.css" rel="stylesheet">
</head>
<body>       

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
        </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-left navbar-main-collapse">
        <div class="dropdown">
            <button type="button" class="btn btn-default navbar-btn dropdown-toggle" data-toggle="dropdown">Volunteer<b class="caret"></b></button>
                <ul class="nav navbar-nav dropdown-menu">
                    <li><a href="#">Search Volunteer!</a></li>
                </ul>
            <button type="button" class="btn btn-default navbar-btn dropdown-toggle" data-toggle="dropdown">Orgs<b class="caret"></b></button>
                <ul class="nav navbar-nav dropdown-menu">
                    <li><a href="#" class="dropdown-menu">Search Organizations!</a></li>
                </ul>
        </div>
    </div>
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
            @if (Auth::user())
            <li><a href="#">Log Out</a></li>
            @else
            <li><a href="#">Log In</a></li>
            <li><a href="#">Sign Up</a></li>
            @endif
    </ul>       
    </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

        <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.easing.min.js"></script>    
    <script src="/js/jquery.scrollTo.js"></script>
    <script src="/js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/js/custom.js"></script>
    @yield('bottom-script')
    </body>
</html> 