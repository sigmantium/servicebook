<nav class="navbar navbar-inverse navbar-fixed-top" style="z-index:100000;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">ServiceBook</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            @if (Auth::user())
                <ul class="nav navbar-nav" role="tablist">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">New<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{action('ServicesController@create')}}">Booking</a></li>
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
                            <li class="dropdown-submenu dropdown">
                                <a href="cusLabel" class="dropdown-toggle" data-toggle="dropdown" role="button" id="cusLabel" aria-expanded="false">Customers <i class="glyphicon glyphicon-chevron-right"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="cusLabel">
                                    <li role="presentation"><a href="{{action('CompaniesController@index')}}" role="menuitem">Companies</a></li>
                                    <li role="presentation"><a href="{{action('DepartmentsController@index')}}" role="menuitem">Departments</a></li>
                                    <li role="presentation"><a href="{{action('ContactsController@index')}}" role="menuitem">Contacts</a></li>
                                    <li role="presentation"><a href="{{action('FleetsController@index')}}" role="menuitem">Fleets</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Vehicles <i class="glyphicon glyphicon-chevron-right"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a tabindex="-1" href="{{action("VehiclesController@vehicleMakes")}}">Vehicle Makes</a></li>
                                    <li><a href="{{action("VehiclesController@vehicleModels")}}">Vehicle Models</a></li>
                                    <li><a href="{{action("VehiclesController@scheduleKMs")}}">Schedule KMs</a></li>
                                    <li><a href="{{action("VehiclesController@scheduleTimes")}}">Schedule Times</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Inventory <i class="glyphicon glyphicon-chevron-right"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a tabindex="-1" href="{{action("InventoryController@itemTypes")}}">Item Types</a></li>
                                    <li><a href="{{action("WarehousesController@index")}}">Warehouses</a></li>
                                    <li><a href="{{action("InventoryController@index")}}">Inventory</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Service <i class="glyphicon glyphicon-chevron-right"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a tabindex="-1" href="{{action("ServicesController@serviceStatuses")}}">Service Statuses</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a href="{{action("UsersController@index")}}">Users</a></li>
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
<script>
    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
        // Avoid following the href location when clicking
        event.preventDefault();
        // Avoid having the menu to close when clicking
        event.stopPropagation();
        // If a menu is already open we close it
        $('ul.dropdown-menu [data-toggle=dropdown]').parent().removeClass('open');
        // opening the one you clicked on
        $(this).parent().addClass('open');
    });
</script>