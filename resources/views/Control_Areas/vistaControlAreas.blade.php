@extends('Layout.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">CONTROL DE AREAS</h3>
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
                        <th>CONTROL</th>
                        </thead>
                        @foreach($puertas as $puerta)
                        <tbody>
                        <td>{{$puerta ->nombre}}</td>
                        <td>{!!Form::submit('ABRIR PUERTA',['class'=>'btn btn-primary'])!!}</td>
                        </tbody>
                        @endforeach
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
 * Time: 8:43 AM
 */
?>