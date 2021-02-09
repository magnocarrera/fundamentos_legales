@extends('layouts.app')

@section('content')
    <div class='container'>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        Editar Categoría Comité Técnico
                    </div>

                    <div class="card-body">
                        {!! Form::model($regulation, ['route' => ['regulaciones.update', $regulation->id], 'method' => 'PUT']) !!}
                            @include('admin.regulaciones.partial.form')
                            <input type="hidden" name="id" value="{{ $regulation->id }}">
                        {!! Form::close() !!}
                    </div>

                    <div class="card-footer text-muted">
                        <a href="{{ route('regulaciones.index') }}">
                            <i class="far fa-arrow-alt-circle-left fa-lg"></i>REGRESAR
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
