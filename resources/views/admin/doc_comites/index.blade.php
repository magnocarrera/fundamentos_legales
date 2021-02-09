@extends('layouts.app')

@section('content')
    <div class='container'>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Listado de Normas COVENIN
                        <div class="float-right">
                            <a href="{{ route('doc_comites.create') }}">
                                <button type="button" class="btn btn-primary">Cargar Norma</button>
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table id="example1" class="hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="25%">Comite</th>
                                    <th width="10%">Nº_Norma</th>
                                    <th width="10%">Año</th>
                                    <th width="30%">Descripción</th>
                                    <th width="10%">Cod_Norma</th>
                                    <th width="15%">Tipo</th>
                                    <th>Ver</th>
                                    <th>Editar</th>
                                    <th>Borrar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($doc_comite as $comite)
                                    <tr>
                                        <td>{{ $comite->committe->comite }}</td>
                                        <td>{{ $comite->nro_norma }}</td>
                                        <td>{{ $comite->ano }}</td>
                                        <td>{{ $comite->descripcion }}</td>
                                        <td>{{ $comite->cod_norma }}</td>
                                        <td>{{ $comite->type }}</td>
                                        <td>
                                            <a href="{{ asset('storage/'.$comite->file) }}" target = "_blank">
                                                Ver
                                            </a>
                                        </td>
                                        <td width="10%">
                                            <a href="{{ route('doc_comites.edit', $comite->id) }}" class="btn btn-sm btn-default">
                                                <button class="btn btn-sm btn-primary">
                                                    Editar
                                                </button>
                                            </a>
                                        </td>
                                        <td width="10%">
                                            {!! Form::open(['route' => ['doc_comites.destroy', $comite->id], 'method' => 'DELETE']) !!}
                                              <button class="btn btn-sm btn-danger">
                                                  Borrar
                                              </button>
                                            {!! Form::close() !!}
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
@endsection
