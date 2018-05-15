@extends('admin.partials.datatables')
@section('title', 'Tours')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Tours 
                <small>Listado</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active">Tours</li>
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
                        <!-- /.box-header -->

                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id Tour</th>
                                    <th>Tour</th>
                                    <th>E-mail</th>
                                    <th>Comment</th>
                                    <th>Estado</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comments as $comment)
                                    <tr>
                                        <td>{{$comment->id}}</td>
                                        <td>{{$comment->title}}</td>
                                        <td>{{$comment->email}}</td>
                                        <td>{{$comment->question}}</td>
                                        <td>&nbsp;&nbsp;&nbsp;
                                        	@if($comment->status == "")
                                        	<a href="" style="color:red;"><span class="ion-email-unread"></span></a>
                                        	@else
                                        	<a href="" style="color:green;"><span class="ion-email"></span></a>
                                        	@endif 
                                        	&nbsp;&nbsp;&nbsp;
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Id Tour</th>
                                    <th>Tour</th>
                                    <th>E-mail</th>
                                    <th>Comment</th>
                                    <th>Estado</th>              
                                </tr>
                                </tfoot>
                            </table>
                    
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