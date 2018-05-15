@extends('admin.partials.main')
@section('title', 'Escritorio')

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Escritorio
                <small>Panel de control</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Escritorio</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                @if(Auth::user()->type == "admin")
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>01</h3>
                            <p>Registrar usuario</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{route('users.index')}}" class="small-box-footer">Entrar al módulo <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                @endif
                <!-- ./col -->
                <!-- REGISTRAR PAISES -->
                <!--<div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <!--<div class="small-box bg-orange">
                        <div class="inner">
                            <h3>00</h3>
                            <p>Registrar países</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-flag"></i>
                        </div>
                        <a href="{{route('users.index')}}" class="small-box-footer">Entrar al módulo <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-maroon">
                        <div class="inner">
                            <h3>00</h3>
                            <p>Agregar categorias</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bookmark"></i>
                        </div>
                        <a href="{{route('categories.index')}}" class="small-box-footer">Entrar al módulo <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>00</h3>
                            <p>Agregar Tour</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-map"></i>
                        </div>
                        <a href="{{route('tours.index')}}" class="small-box-footer">Entrar al módulo <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <!--<div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <!--<div class="small-box bg-teal">
                        <div class="inner">
                            <h3>00</h3>
                            <p>Agregar precios</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-cash"></i>
                        </div>
                        <a href="#" class="small-box-footer">Entrar al módulo <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <!--<div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <!--<div class="small-box bg-red-gradient">
                        <div class="inner">
                            <h3>00</h3>
                            <p>Atender reservas</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-email"></i>
                        </div>
                        <a href="#" class="small-box-footer">Entrar al módulo <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-lime-active">
                        <div class="inner">
                            <h3>00</h3>
                            <p>Testimonios</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-chatbox-working"></i>
                        </div>
                        <a href="{{route('testimonials.index')}}" class="small-box-footer">Entrar al módulo <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-purple">
                        <div class="inner">
                            <h3>00</h3>
                            <p>Agregar blog</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-book"></i>
                        </div>
                        <a href="{{route('blogs.index')}}" class="small-box-footer">Entrar al módulo <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-fuchsia">
                        <div class="inner">
                            <h3>00</h3>
                            <p>Agregar artículo</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-paper"></i>
                        </div>
                        <a href="{{route('articles.index')}}" class="small-box-footer">Entrar al módulo <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-light-blue-gradient">
                        <div class="inner">
                            <h3>00</h3>
                            <p>Comentarios</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-chatbubbles"></i>
                        </div>
                        <a href="{{route('comments.index')}}" class="small-box-footer">Entrar al módulo <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3>00</h3>
                            <p>Agregar boletín</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-send"></i>
                        </div>
                        <a href="{{route('newsletters.index')}}" class="small-box-footer">Entrar al módulo <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>00</h3>
                            <p>Administrar galerías</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-camera"></i>
                        </div>
                        <a href="{{route('galleries.index')}}" class="small-box-footer">Entrar al módulo <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>00</h3>
                            <p>Administrar tags</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-location"></i>
                        </div>
                        <a href="{{route('tags.index')}}" class="small-box-footer">Entrar al módulo <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!--<div class="col-lg-3 col-xs-6">-->
                    <!-- small box -->
                    <!--<div class="small-box bg-navy">
                        <div class="inner">
                            <h3>00</h3>
                            <p>Administrar slider's</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-easel"></i>
                        </div>
                        <a href="#" class="small-box-footer">Entrar al módulo <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <!--ULTIMOS CAMBIOS - FUNCIONES TIME STAMP CON REGISTRO DE USUARIOS? -->

                <!--<div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <!--<div class="small-box bg-olive-active">
                        <div class="inner">
                            <h3>00</h3>
                            <p>Ultimos cambios</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-loop"></i>
                        </div>
                        <a href="#" class="small-box-footer">Entrar al módulo <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection