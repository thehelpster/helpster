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
