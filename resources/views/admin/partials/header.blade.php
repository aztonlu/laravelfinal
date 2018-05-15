
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="{{url('')}}/admin" class="logo">
            <img src="{{url('')}}/panel/dist/img/admint.png" style="width:100%;" alt="Admin">
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{url('')}}/{{ Auth::user()->routeImage }}" class="user-image" alt="User Image">
                            <span class="hidden-xs"> {{ Auth::user()->email}} <i class="fa fa-sign-out" style="margin-left: .4em;"></i></span>
                        </a>

                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{url('')}}/{{ Auth::user()->routeImage }}" class="img-circle" alt="User Image">

                                <p>
                                    {{ Auth::user()->name}}
                                    <small>{{ Auth::user()->type}}</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    @if(Auth::user()->language == "French")
                                    <div class="col-xs-12 text-center">
                                        <a href="#">French</a>
                                    </div>
                                    @endif
                                    @if(Auth::user()->language == "English")
                                    <div class="col-xs-12 text-center">
                                        <a href="#">English</a>
                                    </div>
                                    @endif
                                    @if(Auth::user()->language == "Italian")
                                    <div class="col-xs-12 text-center">
                                        <a href="#">Italian</a>
                                    </div>
                                    @endif
                                    @if(Auth::user()->language == "German")
                                    <div class="col-xs-12 text-center">
                                        <a href="#">German</a>
                                    </div>
                                    @endif
                                    @if(Auth::user()->language == "Admin")
                                    <div class="col-xs-12 text-center">
                                        <a href="#">Administrador</a>
                                    </div>
                                    @endif
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <!--<div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                </div>-->
                                <div class="pull-right">
                                    <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Salir</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>