@extends('admin.partials.datatables')
@section('title', 'Sub-categorías')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Sub-categorías
                <small>Listado</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('')}}/admin"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active">Sub-categorías</li>
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
                            <a href="{{route('subcategories.create')}}" class="btn btn-info">Nueva Sub-categoría &nbsp; <span class="fa fa-plus-circle"></span></a>
                        </div>
                        <!-- /.box-header -->

                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Subcategoría</th>
                                    <th>Categoría</th>
                                    <th>Acción</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($subcategories as $subcategory)
                                    <tr>
                                        <td>{{$subcategory->id}}</td>
                                        <td>{{$subcategory->name}}</td>
                                        <td><span class="text-blue"><strong><i class="fa {{$subcategory->category->icon}}"></i> {{$subcategory->category->name}}</strong></span></td>
                                        <td>
                                            <a href="{{route('subcategories.edit', $subcategory->id)}}" style="color:#2f99ff;"><span class="ion-edit"></span></a>
                                            &nbsp;&nbsp;
                                            <a href="{{route('admin.subcategories.destroy', $subcategory->id)}}" onclick="return confirm('¿Estas seguro de querer eliminar subcategoría?')" style="color:#ff7677;"><span class="ion-close-circled"></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Subcategoría</th>
                                    <th>Categoría</th>
                                    <th>Acción</th>
                                </tr>
                                </tfoot>
                            </table>
                            {!! $subcategories->render() !!}
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

