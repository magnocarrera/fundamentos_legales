@extends('layouts.app')

@section('content')
    <div class='container'>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        Cargar Norma COVENIN
                    </div>

                    <div class="card-body">
                        {!! Form::open(['route' => 'doc_comites.store', 'enctype' => 'multipart/form-data']) !!}

                            @include('admin.doc_comites.partial.form')

                        {!! Form::close() !!}
                    </div>

                    <div class="card-footer text-muted">
                        <a href="{{ route('doc_comites.index') }}">
                            <i class="far fa-arrow-alt-circle-left fa-lg"></i>REGRESAR
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @error('committe_id')
    sadsa
    @enderror
@endsection
