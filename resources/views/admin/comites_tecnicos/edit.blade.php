@extends('layouts.app')

@section('content')
    <div class='container'>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        Editar Comité Técnico
                    </div>

                    <div class="card-body">
                        {!! Form::model($committe, ['route' => ['comites_tecnicos.update', $committe->id], 'method' => 'PUT']) !!}
                            @include('admin.comites_tecnicos.partial.form')
                            <input type="hidden" name="id" value="{{ $committe->id }}">
                        {!! Form::close() !!}
                    </div>

                    <div class="card-footer text-muted">
                        <a href="{{ route('comites_tecnicos.index') }}">
                            <i class="far fa-arrow-alt-circle-left fa-lg"></i>REGRESAR
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
