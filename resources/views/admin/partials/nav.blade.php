<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{url('')}}/{{ Auth::user()->routeImage }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-lime"></i> En línea</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">

            <li class="header">Módulos</li>

            <li><a href="{{route('admin.index')}}"><i class="fa fa-dashboard"></i> <span>Escritorio</span></a></li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Usuarios</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('users.index')}}"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                    <li><a href="{{route('users.create')}}"><i class="fa fa-circle-o"></i> Nuevo usuario +</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Editar mi perfil</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-map"></i> <span>Tours</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('countries.index')}}"><i class="fa fa-circle-o"></i> Países</a></li>
                    <li><a href="{{route('tours.index')}}"><i class="fa fa-circle-o"></i> Tours</a></li>
                    <li><a href="{{route('tours.create')}}"><i class="fa fa-circle-o"></i> Nuevo tour +</a></li>
                    <li><a href=""><i class="fa fa-circle-o"></i> Testimonios</a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Categorias
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('categories.index')}}"><i class="fa fa-circle-o text-aqua"></i> Categorias</a></li>
                            <li><a href="{{route('categories.create')}}"><i class="fa fa-circle-o text-aqua"></i> Nueva +</a></li>
                            <li><a href="{{route('subcategories.index')}}"><i class="fa fa-circle-o text-aqua"></i> Sub-categorias</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li><a href="#"><i class="fa fa-envelope"></i> <span>Reservas</span></a></li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file"></i>
                    <span>Páginas</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Páginas</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Nueva +</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bookmark"></i>
                    <span>Artículos</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Artículos</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Nuevo +</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Comentarios</a></li>
                </ul>
            </li>

            <li class="header">Herramientas</li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-paper-plane"></i>
                    <span>Boletínes</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Boletínes</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Nuevo +</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Subcriptores</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-camera"></i>
                    <span>Galería</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Galerías</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Nuevo +</a></li>
                </ul>
            </li>

            

            <li class="header">DOCS</li>

            <li><a href="#"><i class="fa fa-code text-lime"></i> <span>Documentación</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>