@extends('admin.partials.datatables')
@section('title', 'Categorias')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Categorías
                <small>Listado</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('')}}/admin"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active">Categorías</li>
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
                            <a href="{{route('categories.create')}}" class="btn btn-info">Nueva Categoría &nbsp; <span class="fa fa-plus-circle"></span></a>
                        </div>
                        <!-- /.box-header -->

                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Categoría</th>
                                    <th>Icono</th>
                                    <th>Acción</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td><td>
                                            @if($category->icon == '' | $category->icon == NULL)
                                                <span class="label label-warning">"Sin icono"</span>
                                            @else
                                                @if(substr($category->icon, 0, 3) == 'fa-')
                                                    <span class="label label-success">"<i class="fa {{$category->icon}}"></i>"</span>
                                                @else
                                                    <span class="label label-danger">No existe: "{{$category->icon}}"</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td>&nbsp;&nbsp;&nbsp;<a href="{{route('categories.edit', $category->id)}}" style="color:#2f99ff;"><span class="ion-edit"></span></a> &nbsp;&nbsp;&nbsp; <a href="{{route('admin.categories.destroy', $category->id)}}" onclick="return confirm('¿Estas seguro de querer eliminar categoría?')" style="color:#ff7677;"><span class="ion-close-circled"></span></a></td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Categoría</th>
                                    <th>Icono</th>
                                    <th>Acción</th>
                                </tr>
                                </tfoot>
                            </table>
                            {!! $categories->render() !!}
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

