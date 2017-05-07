@extends('Layout.index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">FUNCIONARIOS</h3>
                    <div class="actions pull-right">
                        <i class="fa fa-chevron-down"></i>
                        <i class="fa fa-times"></i>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="dataTables_filter">
                                <label>
                                    FILTRAR: <input type="search" class="form-control input-sm" aria-controls="example">
                                </label>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <div class="panel-heading">
                            <div class="actions pull-right">
                                <i class="fa fa-chevron-down"></i>
                                <i class="fa fa-times"></i>
                            </div>
                        </div>
                        <thead>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>CEDULA</th>
                        <th>CARGO</th>
                        <th>DADO DE BAJA</th>
                        <th>SELECCION</th>
                        </thead>
                        @foreach($funcionarios as $funcionario)
                        <tbody>
                         <td>{{$funcionario->id}}</td>
                         <td>{{$funcionario->nombre}}</td>
                         <td>{{$funcionario->apellido}}</td>
                         <td>{{$funcionario->cedula}}</td>
                         <td>{{$funcionario->cargos_id}}</td>
                         <td>{!!Form::checkbox('dado de baja','dado_de_baja',$funcionario ->dado_de_baja,false)!!}</td>
                         <td>{!!Form::checkbox('seleccion','seleccion',false)!!}</td>
                         </tbody>
                        @endforeach
                    </table>
                 </div>
            </div>
        </div>
    </div>
    <div>
        <div>
            {!! Form::open(['url' => ['/FuncionariosCrear'],'method'=>'GET'] ) !!}
            {!!Form::submit('CREAR',['class'=>'btn btn-primary'])!!}
            {!! Form::Close() !!}
            {!! Form::open(['url' => ['/'],'method'=>'GET'] ) !!}
            {!!Form::submit('ACTUALIZAR',['class'=>'btn btn-primary'])!!}
            {!! Form::Close() !!}
            {!!Form::submit('DAR DE BAJA',['class'=>'btn btn-primary'])!!}
        </div>
    </div>
@endsection