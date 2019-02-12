@extends('layouts.dashboard')

@section('contenido')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Documentos</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab">Vigentes</a>
                    </li>
                    <li><a href="#profile" data-toggle="tab">Vencidos</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="home">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-lg-11"><h4></h4></div>
                                <div class="col-lg-1">
                                    <button id="addDocumento" type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#mDocumento"><span class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table style="width:100%" class="table table-striped" id="dataTablesexample">
                                <thead>
                                    <tr>
                                        <th class="text-center" hidden>id</th>
                                        <th class="text-center">nombre</th>
                                        <th class="text-center">descripción</th>
                                        <th class="text-center">vigencia</th>
                                        <th class="text-center">acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($documents as $document)
                                        <tr>
                                            <td class="text-center" hidden>{{ $document->id }}</td>
                                            <td data-myName="hello" class="text-center">{{ $document->name }}</td>
                                            <td class="text-center">{{ $document->description }}</td>
                                            <td class="text-center">{{ $document->life }}</td>
                                            <td align="center">
                                                <div class="col-lg-2"> 
                                                </div>                                             
                                                <div class="col-lg-2">
                                                    <button id="viewDocumento" type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#mVDocumento"><span class="glyphicon glyphicon-search"></span></button>
                                                </div>
                                                <div class="col-lg-2">
                                                    <button id="editDocumento" type="button" class="btn btn-warning btn-block" data-mydescription="{{ $document->description }}" data-mylife="{{ $document->life }}" data-myid="{{ $document->id }}" data-myname="{{ $document->name }}" data-toggle="modal" data-target="#mEDocumento"><span class="glyphicon glyphicon-pencil"></span></button>
                                                </div>
                                                <div class="col-lg-2">
                                                    <button id="deleteDocumento" type="button" class="btn btn-danger btn-block" data-myid="{{ $document->id }}" data-toggle="modal" data-target="#mDDocumento"><span class="glyphicon glyphicon-trash"></span></button>
                                                </div>
                                                <div id="bDownload" class="col-lg-2">
                                                    <a href="">
                                                        <button id="downloadDocumento" type="button" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-download-alt"></span></button>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="profile">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-lg-11"><h4></h4></div>
                                <div class="col-lg-1">
                                    <button id="addDocumento2" type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#mDocumento"><span class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table style="width:100%" class="table table-striped" id="dataTablesexample2">
                                <thead>
                                    <tr>
                                        <th class="text-center" hidden>id</th>
                                        <th class="text-center">nombre</th>
                                        <th class="text-center">descripción</th>
                                        <th class="text-center">vigencia</th>
                                        <th class="text-center">accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($documents as $document)
                                        <tr>
                                            <td class="text-center" hidden>{{ $document->id }}</td>
                                            <td class="text-center">{{ $document->name }}</td>
                                            <td class="text-center">{{ $document->description }}</td>
                                            <td class="text-center">{{ $document->life }}</td>
                                            <td align="center">
                                                <div class="col-lg-2"> 
                                                </div>                                             
                                                <div class="col-lg-2">
                                                    <button id="viewDocumento2" type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#mVDocumento"><span class="glyphicon glyphicon-search"></span></button>
                                                </div>
                                                <div class="col-lg-2">
                                                    <button id="editDocumento2" type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#mEDocumento"><span class="glyphicon glyphicon-pencil"></span></button>
                                                </div>
                                                <div class="col-lg-2">
                                                    <button id="deleteDocumento2" type="button" class="btn btn-danger btn-block"><span class="glyphicon glyphicon-trash"></span></button>
                                                </div>
                                                <div id="bDownload" class="col-lg-2">
                                                    <a href="">
                                                        <button id="downloadDocumento2" type="button" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-download-alt"></span></button>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal para AGREGAR DOCUMENTOS -->
<div class="modal fade" id="mDocumento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Nuevo Documento</h4>
        </div>
        <div class="modal-body">
            <form method="post" action="{{ url('admin/documents') }}" >
                {{ csrf_field() }}
                <label>* nombre</label>
                <input class="form-control" type="text" id="name" name="name"><br>
                <label>* vigencia</label>
                <input type="date" class="form-control" id="life" name="life"><br>
                <label>descripción</label>
                <textarea rows="4" cols="50" class="form-control" id="description" name="description"></textarea><br>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning">aceptar</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>

<!-- Modal para EDITAR DOCUMENTOS -->
<div class="modal fade" id="mEDocumento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"> Editar Documento</h4>
        </div>
        <div class="modal-body">
            <form method="post" action="{{ url('admin/documents','update') }}" >
                {{ csrf_field() }}
                <input type="hidden" id="id2" name="id2" value=""><br>
                <label>nombre</label>
                <input class="form-control" type="text" id="name2" name="name2" ><br>
                <label>vigencia</label>
                <input type="date" class="form-control" id="life2" name="life2" ><br>
                <label>descripción</label>
                <textarea rows="4" cols="50" class="form-control" id="description2" name="description2"></textarea><br>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning">guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>

<!-- Modal para ELIMINAR DOCUMENTOS -->
<div class="modal fade" id="mDDocumento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"> Desea Eliminar el Documento?</h4>
        </div>
        <div class="modal-body">
            <form method="post" action="{{ url('admin/documents','delete') }}" >
                {{ csrf_field() }}
                <input type="hidden" id="id4" name="id4" value=""><br>
                <div class="text-right">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">cancelar</button>
                    <button type="submit" class="btn btn-danger">eliminar</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>



<!-- Modal para VISUALIZAR DOCUMENTOS -->
<div class="modal fade" id="mVDocumento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
</div>

@endsection
