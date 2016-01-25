       <div class="navbar" role="navigation">
            {{-- <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
            </div> --}}
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
                    <li class="selected"><a href="{{{ action('EventsController@index')}}}">Events</a></li>
                    @else
                    <li><a href="{{{ action('EventsController@index')}}}">Events</a></li>
                    @endif
          <li class= "hidden-xs hidden-sm">
            {{-- <a rel="home" href="index.html"><img class="logo" src="img/logo.png" width="200" alt="logo"></a> --}}
          </li>
                    @if(Request::is('organization.index'))
                    <li class="selected"><a href="{{{ action('OrganizationsController@index')}}}">Organizations</a></li>
                    @else
                    <li><a href="{{{ action('OrganizationsController@index')}}}">Organizations</a></li>
                    @endif
                    <li>
                        @if(!Auth::user())
                        <a href="{{{ action('UsersController@create')}}}">Sign Up</a></li>
                        @endif
                    <li>
                         @if(!Auth::user())
                            <a href="{{{ action('UsersController@login')}}}">Login</a></li>
                         @else
                         <a href="{{{ action('UsersController@logout')}}}">Logout</a>
                        @endif
                    <li><a href="{{{ action('HomeController@contact')}}}">Contact</a></li>
                </ul>
            </div>
        </div>