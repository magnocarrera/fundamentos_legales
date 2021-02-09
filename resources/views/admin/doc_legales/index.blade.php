@extends('layouts.app')

@section('content')
    <div class='container'>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Listado de Documentos Legales
                        <div class="float-right">
                            <a href="{{ route('doc_legales.create') }}">
                                <button type="button" class="btn btn-primary">Cargar Documento Legal</button>
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table id="example1" class="hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="30%">Categoría</th>
                                    <th width="10%">NºNorma</th>
                                    <th width="10%">Año</th>
                                    <th width="10%">Decreto</th>
                                    <th width="40%">Descripción</th>
                                    <th>Ver</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($regulations as $regulation)
                                    <tr>
                                        <td>{{ $regulation->regulation->name }}</td>
                                        <td>{{ $regulation->nro_norma }}</td>
                                        <td>{{ $regulation->ano }}</td>
                                        <td>{{ $regulation->decreto }}</td>
                                        <td>{{ $regulation->descripcion }}</td>
                                        <td>
                                            <a href="{{ asset('storage/'.$regulation->file) }}" target = "_blank">Ver</a>
                                        </td>
                                        <td width="10%">
                                            <a href="{{ route('doc_legales.edit', $regulation->id) }}" class="btn btn-sm btn-default">
                                                editar
                                            </a>
                                        </td>
                                        <td width="10%">
                                            {!! Form::open(['route' => ['doc_legales.destroy', $regulation->id], 'method' => 'DELETE']) !!}
                                              <button class="btn btn-sm btn-danger">
                                                  Eliminar
                                              </button>
                                            {!! Form::close() !!}
                                      </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $regulations->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
