@extends('Layout.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">ESTADISTICAS</h3>
                    <div class="actions pull-right">
                        <i class="fa fa-chevron-down"></i>
                        <i class="fa fa-times"></i>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <div class="panel-heading">
                            <div class="actions pull-right">
                                <i class="fa fa-chevron-down"></i>
                                <i class="fa fa-times"></i>
                            </div>
                        </div>
                        {!!Form::open()!!}
                        <div class="form-group">
                        {!!Form::label('TIPO','TIPO DE ESTADISTICAS:')!!}
                        <p></p>
                        <div class="btn btn-primary">
                            {!!Form::select('TIPOS DE ESTADISTICAS:',array(
                             'F'=>'FUNCIONARIOS',
                             'AREAS'=>'AREAS',
                            ))!!}
                         </div>
                         </div>
                         <div class="from-control">
                         {!!Form::label('DESDE','DESDE:')!!}
                         {!!Form::text('desde',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
                         {!!Form::label('HORAI','HORA DE INICIO:')!!}
                         {!!Form::text('horainicio',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
                         </div>
                         <div class="from-control">
                         {!!Form::label('HASTA','HASTA:')!!}
                         {!!Form::text('hasta',null,['class'=>'form-control','placeholder'=>'Usuario'])!!}
                         {!!Form::label('HORAF','HORA DE FIN:')!!}
                         {!!Form::text('horafin',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
                         </div>
                         {!!Form::submit('Crear',['class'=>'btn btn-primary'])!!}
                         {!!Form::submit('Imprimir',['class'=>'btn btn-primary'])!!}
                         {!!Form::close()!!}
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 26/04/2017
 * Time: 9:16 AM
 */
?>