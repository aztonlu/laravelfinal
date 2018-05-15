@extends('admin.partials.datatables')
@section('title', 'Articulos')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Articulos 
                <small>Listado</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active">Articulos</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    @include('flash::message')
                </div>
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <a href="{{route('articles.create')}}" class="btn btn-info">Nuevo Articulo &nbsp; <span class="fa fa-plus-circle"></span></a>
                        </div>
                        <!-- /.box-header -->

                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Usuario</th>
                                    <th>Fecha</th>
                                    <th>Titulo</th>
                                    <th>Articulo</th>
                                    <th>Blog</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($articles as $article)
                                    <tr>
                                        <td>{{$article->id}}</td>
                                        @foreach($users as $user)
                                        @if($user->id == $article->user_id)
                                        <td>{{$user->name}}</td>
                                        @endif
                                        @endforeach
                                        <td>{{$article->user_id}}</td>
                                        <td>{{$article->date}}</td>
                                        <td>{{$article->title}}</td>
                                        <td>{{$article->description}}</td>
                                        @foreach($blogs as $blog)
                                        @if($blog->id == $article->blog_id)
                                        <td>{{$blog->name}}</td>
                                        @endif
                                        @endforeach
                                            <td>&nbsp;&nbsp;&nbsp;<a href="{{route('articles.edit', $article->id)}}" style="color:#2f99ff;"><span class="ion-edit"></span></a> &nbsp;&nbsp;&nbsp; <a href="{{route('admin.articles.destroy', $article->id)}}" onclick="return confirm('¿Estas seguro de querer eliminar el articulo?')" style="color:#ff7677;"><span class="ion-close-circled"></span></a></td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Usuario</th>
                                    <th>Fecha</th>
                                    <th>Titulo</th>
                                    <th>Articulo</th>  
                                    <th>Blog</th>
                                </tr>
                                </tfoot>
                            </table>
                            {!! $articles->render() !!}
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

@endsection