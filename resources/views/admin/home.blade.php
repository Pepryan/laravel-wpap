<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.head')
</head>

<body>
    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>

    <!-- Main sidebar menu -->
    <nav class="main-menu">
        <div class="main-menu-inner">
            <!-- Side icon menu -->
            <ul>
                <li class="main-logo">
                    <a href="dashboard.html"><img src="{{asset('/images/logos/square-violet.svg')}}" alt=""></a>
                </li>
                <li class="side-icon is-active" data-child-menu="dashboard-menu">
                    <i class="sl sl-icon-speedometer"></i>
                </li>
                <li class="side-icon" data-child-menu="documents-menu">
                    <i class="sl sl-icon-docs"></i>
                </li>
                <li class="side-icon" data-child-menu="business-menu">
                    <i class="sl sl-icon-briefcase"></i>
                </li>
                <li class="side-icon" data-child-menu="misc-menu">
                    <i class="sl sl-icon-graph"></i>
                </li>
            </ul>
            <!-- /Side icon menu -->

            <!-- Profile wrapper -->
            <ul class="profile">
    @include('admin.profile')
            </ul>
            <!-- /Profile wrapper -->

        </div>
    </nav>
    <!-- /Main sidebar menu -->

    <!-- Child push sidebar menu -->
    <nav class="child-menu">
        <div class="child-menu-inner">
            <!-- Child menu header -->
            <ul>
                <li class="child-header">
                    <div class="sidebar-title">Navigation</div>
                    <a id="close-child-menu" href="#" class="menu-wrapper">	
                            <span class="icon-box-toggle ef-4"> 	
                                <span class="rotate">
                                    <i class="icon-line-top">  	 </i>
                                    <i class="icon-line-center">  </i>
                                    <i class="icon-line-bottom">  </i> 
                                </span>
                            </span>
                        </a>
                </li>
            </ul>
            <!-- /Child menu header -->
    @include('admin.sidebarmenu')
    </nav>
    <!-- /Child push sidebar menu -->

    <!-- Top Navbar -->
    <nav class="nav dashboard-nav has-shadow">
        <div class="container is-fluid">
            <!-- Nav left -->
            <div class="nav-left">
                <!-- Reader mode switch -->
                <div class="nav-item reader-switch is-hidden-desktop is-hidden-tablet">
                    <div class="field">
                        <input id="reader-mode-switch" type="checkbox" name="reader-mode-switch" class="switch is-outlined is-primary is-small">
                        <label id="reader-mode-toggle" for="reader-mode-switch"></label>
                    </div>
                </div>
                <!-- Reader mode switch -->
                <!-- /Nav left -->

                <!-- Nav right -->
                <div class="nav-right nav-menu">
                    <!-- Logout button -->
                    <div class="nav-item nav-icon logout-button">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                                <i class="sl sl-icon-power"></i>
                                            </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                    <!-- /Logout button -->
                </div>
                <!-- /Nav right -->
            </div>
    </nav>
    <!-- /Top Navbar -->

    <!-- Main dashboard container -->
    <div id="dashboard-wrapper" class="columns">
        <div class="column"></div>
        <div class="content column is-11">

            <!-- Breadcrumbs -->
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li>Dashboard</li>
                    <li>@yield('breadcumb')</li>
                </ul>
            </nav>
            <!-- /Breadcrumbs -->

            <!-- Dashboard Wrapper -->
            <div class="dashboard-wrapper">

                <div class="columns">
                    <div class="column">
                        <!-- Main content -->
                        <div id="main-dashboard" class="section-wrapper">
                            <!-- Dashboard content -->
                            <div class="columns dashboard-columns">

                                <!-- YOUR CONTENT COLUMNS GO HERE -->
                                @yield('content')

                            </div>
                            <!-- /Dashboard content -->
                        </div>
                        <!-- /Main content -->
                    </div>
                    <!-- /Main view -->
                </div>
            </div>
            <!-- /Dashboard Wrapper -->
        </div>
        <div class="column">
        </div>
    </div>
    <!-- Main dashboard container -->

    <!-- /Main -->

    <!-- Footer -->
    <footer class="footer">
    @include('admin.footer')
    </footer>
    <!-- /Footer -->
    @include('admin.javascript')
</body>


</html>