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
                    @if(Request::is('events'))
                    <li class="selected"><a href="{{{ action('EventsController@index')}}}">Events</a></li>
                    @else
                    <li><a href="{{{ action('EventsController@index')}}}">Events</a></li>
                    @endif
          <li class= "hidden-xs hidden-sm">
            {{-- <a rel="home" href="index.html"><img class="logo" src="img/logo.png" width="200" alt="logo"></a> --}}
          </li>
                    @if(Request::is('organization'))
                    <li class="selected"><a href="{{{ action('OrganizationsController@index')}}}">Organizations</a></li>
                    @else
                    <li><a href="{{{ action('OrganizationsController@index')}}}">Organizations</a></li>
                    @endif
                    
                        @if(!Auth::user())
                          @if(Request::is('users/create'))
                        <li class="selected"><a href="{{{ action('UsersController@create')}}}">Sign Up</a></li>
                        @else
                        <li><a href="{{{ action('UsersController@create')}}}">Sign Up</a></li>
                          @endif
                        @endif
                    
                         @if(!Auth::user())
                            @if(Request::is('users/login'))
                           <li class="selected"> <a href="{{{ action('UsersController@login')}}}">Login</a></li>
                           @else
                           <li> <a href="{{{ action('UsersController@login')}}}">Login</a></li>
                            @endif
                         @else
                          @if(Request::is('users'))
                         <li class="selected"><a href="{{{ action('UsersController@index')}}}">Profile</a></li>
                          @else
                          <li><a href="{{{ action('UsersController@show')}}}">Profile</a></li>
                          @endif
                         <li><a href="{{{ action('UsersController@logout')}}}">Logout</a></li>
                        @endif
                    @if(Request::is('contact'))
                    <li class="selected"><a href="{{{ action('HomeController@contact')}}}">Contact</a></li>
                    @else
                    <li><a href="{{{ action('HomeController@contact')}}}">Contact</a></li>
                    @endif
                </ul>
            </div>
        </div>