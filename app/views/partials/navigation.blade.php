    <div class="header container">
      <div class="visible-xs visible-sm col-xs-12 col-sm-12 text-center sm-logo">
        <a rel="home" href="index.html">
          {{-- <img src="img/logo.png" width="200" alt="logo"> --}}
        </a>
      </div>
    </div>
        <div class="navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    @if(Request::is('/'))
                      <li class="selected"><a href="{{{ action('HomeController@showWelcome')}}}">Home</a></li>
                    @else
                      <li><a href="{{{ action('HomeController@showWelcome')}}}">Home</a></li>
                    @endif
                    @if(Request::is('about'))
                      <li class="selected"><a href="{{{action('HomeController@about')}}}">About</a></li>
                    @else
                    <li><a href="{{{action('HomeController@about')}}}">About</a></li>
                   @endif
                    @if(Request::is('events.index'))
                    <li class="selected"><a href="{{{ action('EventsController@showEvents')}}}">Events</a></li>
                    @else
                    <li><a href="{{{ action('EventsController@showEvents')}}}">Events</a></li>
                    @endif
          <li class= "hidden-xs hidden-sm">
            {{-- <a rel="home" href="index.html"><img class="logo" src="img/logo.png" width="200" alt="logo"></a> --}}
          </li>
                    <li><a href="{{{ action('OrganizationsController@showOrganizations')}}}">Organizations</a></li>
                    <li>
                        @if(!Auth::user())
                        <a href="{{{ action('UsersController@signup')}}}">Sign Up</a></li>
                        @endif
                    <li>
                         @if(!Auth::user())
                            <a href="{{{ action('UsersController@makeLogin')}}}">Login</a></li>
                         @else
                         <a href="{{{ action('UsersController@Logout')}}}">Logout</a>
                        @endif
                    <li><a href="{{{ action('HomeController@contact')}}}">Contact</a></li>
                </ul>
            </div>
        </div>