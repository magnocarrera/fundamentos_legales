@extends('layouts.app')

@section('content')
    <div class='container'>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        Listado de Normas
                        <div class="float-right">
                            <a href="{{ route('regulaciones.create') }}">
                                <button type="button" class="btn btn-primary">Agregar Categoría de Normativa Legal</button>
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="20%">ID</th>
                                    <th width="60%">Nombre</th>
                                    <th width="10%">Editar</th>
                                    <th width="10%">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($regulations as $regulation)
                                <tr>
                                    <td>{{ $regulation->id }}</td>
                                    <td>{{ $regulation->name }}</td>
                                    <td width="18px">
                                        <a href="{{ route('regulaciones.edit', $regulation->id) }}" class="btn btn-sm btn-default">
                                            Editar
                                        </a>
                                    </td>
                                    <td width="10px">
                                          {!! Form::open(['route' => ['regulaciones.destroy', $regulation->id], 'method' => 'DELETE']) !!}
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
