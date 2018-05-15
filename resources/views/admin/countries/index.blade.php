@extends('admin.partials.datatables')
@section('title', 'Paises')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Paises
                <small>Listado</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('')}}/admin"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active">Paises</li>
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
                            <a href="{{route('countries.create')}}" class="btn btn-info">Nuevo país &nbsp; <span class="fa fa-plus-circle"></span></a>
                        </div>
                        <!-- /.box-header -->

                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>País</th>
                                    <th>Acción</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($countries as $country)
                                    <tr>
                                        <td>{{$country->id}}</td>
                                        <td>{{$country->name}}</td>
                                        <td><a href="{{route('countries.edit', $country->id)}}" style="color:#2f99ff;"><span class="ion-edit"></span></a> &nbsp;&nbsp;&nbsp; <a href="{{route('admin.countries.destroy', $country->id)}}" onclick="return confirm('¿Estas seguro de querer eliminar país?')" style="color:#ff7677;"><span class="ion-close-circled"></span></a></td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>País</th>
                                    <th>Acción</th>
                                </tr>
                                </tfoot>
                            </table>
                            {!! $countries->render() !!}
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

