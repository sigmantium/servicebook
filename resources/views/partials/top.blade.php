<nav class="navbar navbar-inverse navbar-fixed-top" style="z-index:100000;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">ServiceBook</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            @if (Auth::user())
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">New<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{action('ServicesController@create')}}">Booking</a></li>
                            <li><a href="{{action('CompaniesController@create')}}">Company</a></li>
                            <li><a href="{{action('ContactsController@create')}}">Contact</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reports<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Open Jobs</a></li>
                            <li><a href="#">Missing Order Numbers</a></li>
                            <li><a href="#">Unpaid Invoices</a></li>
                            <li><a href="#">Sales Report</a></li>
                            <li><a href="#">Service Report</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-submenu"><a href="#">Vehicles</a></li>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Vehicle Makes</a></li>
                                    <li><a href="#">Vehicle Models</a></li>
                                </ul>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            @endif
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}">Login</a></li>
                    <li><a href="{{ url('/auth/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
