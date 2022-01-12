<div id="defaultmenu" class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
        <!-- standard drop down -->
        <li class="{{ (request()->is('home/dashboard')) ? 'active' : '' }}">
            <a href="{{route('home_dashboard')}}" >
                Home</a>
        </li>
        <!-- end standard drop down -->
        <!-- standard drop down -->
        <li class="{{ (request()->is('products*')) ? 'active' : '' }}">
            <a href="{{route('products.index')}}" > Products</a>
            <!-- end dropdown-menu -->
        </li>
        <!-- end standard drop down -->
        <!-- standard drop down -->
        <li class="{{ (request()->is('category')) ? 'active' : '' }}">
            <a href="{{route('category.index')}}" > Category</a>
        </li>
        <!-- end standard drop down -->
        <!-- standard drop down -->
        <li class="{{ (request()->is('employee')) ? 'active' : '' }}">
            <a href="#" > Employee</a>
            <!-- end dropdown-menu -->
        </li>
        <!-- end standard drop down -->
        <!-- standard drop down -->
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Forms <b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="forms-layout.html"> Form Layout </a></li>
                <li><a href="forms-switchery.html"> Form Switchery </a></li>
                <li><a href="forms-components.html"> Form Components </a></li>
                <li><a href="forms-validation.html"> Form Validation </a></li>
                <li><a href="forms-wizard.html"> Form Wizard </a></li>
            </ul>
            <!-- end dropdown-menu -->
        </li>
        <!-- end standard drop down -->
        <!-- standard drop down -->
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Charts <b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="charts-flot.html"> Flot Chart </a></li>
                <li><a href="charts-morris.html"> Morris Chart </a></li>
            </ul>
            <!-- end dropdown-menu -->
        </li>
        <!-- end standard drop down -->
        <!-- standard drop down -->
        <li class="{{ (request()->is('calender')) ? 'active' : '' }}">
            <a href="{{route('calender')}}" > Calendar </a>
        </li>
        <!-- end standard drop down -->
        <!-- standard drop down -->
        <li>
            <a href="ui-widgets.html"> Widgets </a>
        </li>
        <!-- end standard drop down -->
        <!-- standard drop down -->
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Mail <b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="mail-inbox.html"> Inbox </a></li>
                <li><a href="mail-compose.html"> Compose Mail </a></li>
                <li><a href="mail-mailview.html"> View Mail </a></li>
            </ul>
            <!-- end dropdown-menu -->
        </li>
        <!-- end standard drop down -->
        <!-- standard drop down -->
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Maps <b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="maps-gmap.html"> Google Map </a></li>
                <li><a href="maps-vectormap.html"> Vector Map </a></li>
            </ul>
            <!-- end dropdown-menu -->
        </li>
        <!-- end standard drop down -->
        <!-- standard drop down -->
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Menu Levels <b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Second Level</a></li>
                <li><a href="#">Second Level</a></li>
                <li class="dropdown-submenu">
                    <a href="#">Second Level</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a href="#">Third Level</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Fourth Level</a></li>
                                <li><a href="#">Fourth Level</a></li>
                            </ul>
                        </li>
                        <!-- end dropdown-submenu -->
                        <li><a href="#">Third Level</a></li>
                        <li><a href="#">Third level</a></li>
                    </ul>
                    <!-- end dropdown-menu -->
                </li>
                <li><a href="#">Creattica</a></li>
            </ul>
            <!-- end dropdown-menu -->
        </li>
        <!-- end standard drop down -->
    </ul>
    <!-- end nav navbar-nav -->
</div>
