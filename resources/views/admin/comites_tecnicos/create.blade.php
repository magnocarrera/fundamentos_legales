@extends('layouts.app')

@section('content')
    <div class='container'>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        Cargar Categoría Comité Técnico
                    </div>

                    <div class="card-body">
                        {!! Form::open(['route' => 'comites_tecnicos.store']) !!}

                            @include('admin.comites_tecnicos.partial.form')

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
