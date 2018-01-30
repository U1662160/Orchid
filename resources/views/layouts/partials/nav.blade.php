<nav class="navbar navbar-default navbar-static-top help-block">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
              Orchid Visitors System
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right help-block">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            <li>
                              <a href="{{route('home')}}"> Home</a>
                            </li>
                            <li>
                              <a href="#"> My Page</a>
                            </li>
                            <li>
                              <a href="#"> My Visitors</a>
                            </li>
                        </ul>
                    </li>
                    @role('admin')
                    <li>
                      <a href="{{route('dashboard')}}"> DashBoard</a>
                    </li>
                    @endrole

                    <li>
                      <a href="{{route('visits.all')}}"> Show All Visits</a>
                    </li>
                    <li>
                      <a href="{{route('visit.create')}}"> Create a new Visit</a>
                    </li>

                    <li> <a href="{{route('visitor.all')}}"> All Visitors</a></li>
                    <li> <a href="{{route('visitor.create')}}"> Add New Visitor</a></li>


                @endguest
            </ul>
        </div>
    </div>
</nav>
