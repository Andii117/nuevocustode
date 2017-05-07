@extends('Layout.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">GESTION DE AREAS</h3>
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
                        <th>NOMBRE</th>
                        <th>LLAVE(ENCRIPTADA)</th>
                        <th>IP</th>
                        <th>SELECCION</th>
                        <th>DADO DE BAJA</th>
                        <th>PUERTA ESPECIAL</th>
                        </thead>
                        @foreach($puertas as $puerta)
                        <tbody>
                        <td>{{$puerta ->nombre}}</td>
                        <td>{{$puerta ->llave_rfid}}</td>
                        <td>{{$puerta ->ip}}</td>
                        <td>
                        {!! link_to_route('puerta',$title='EDITAR',$parameters=$puerta->id,$atributes=['class'=>'btn btn-primary']) !!}
                        </td>
                        <td>{!!Form::checkbox('dado_baja', 'Dado de baja')!!}</td>
                        <td>{!!Form::checkbox('puerta_especial','puerta_especial',$puerta ->puerta_especial)!!}</td>
                        </tbody>
                        @endforeach
                        </table>
                </div>
            </div>
            <div>
                {!! Form::open(['url' => ['/GestionAreasCrear'],'method'=>'GET'] ) !!}
                {!!Form::submit('CRERA',['class'=>'btn btn-primary'])!!}
                {!! Form::Close() !!}
                {!!Form::submit('DADO DE BAJA',['class'=>'btn btn-primary'])!!}
            </div>
        </div>
    </div>


@endsection
<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 24/04/2017
 * Time: 8:37 AM
 */
?>



