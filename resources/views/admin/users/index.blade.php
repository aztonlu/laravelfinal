@extends('admin.partials.datatables')
@section('title', 'Usuarios')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Usuarios
                <small>Listado</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active">Usuarios</li>
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
                            <a href="{{route('users.create')}}" class="btn btn-info">Nuevo usuario &nbsp; <span class="fa fa-plus-circle"></span></a>
                        </div>
                        <!-- /.box-header -->

                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombres</th>
                                    <th>E-mail</th>
                                    <th>Contraseña</th>
                                    <th>Idioma</th>
                                    <th>Tipo</th>
                                    <th>Acción</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td><span class="label label-danger"><span class="fa fa-lock"></span>&nbsp; Privado</span></td>
                                        <td>{{$user->language}}</td>
                                        <td>
                                            @if($user->type == 'admin')
                                                <span class="label label-success">Administrador</span>
                                            @else
                                                <span class="label label-warning">Miembro</span>
                                            @endif
                                        </td>
                                        <td>&nbsp;&nbsp;&nbsp;<a href="{{route('users.edit', $user->id)}}" style="color:#2f99ff;"><span class="ion-edit"></span></a> &nbsp;&nbsp;&nbsp; <a href="{{route('admin.users.destroy', $user->id)}}" onclick="return confirm('¿Estas seguro de querer eliminar usuario?')" style="color:#ff7677;"><span class="ion-close-circled"></span></a></td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombres</th>
                                    <th>E-mail</th>
                                    <th>Contraseña</th>
                                    <th>Tipo</th>
                                    <th>Acción</th>
                                </tr>
                                </tfoot>
                            </table>
                            {!! $users->render() !!}
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

