@extends('layouts.app')

@section('content')
    <div class='container'>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        Cargar Documento de Ley
                    </div>

                    <div class="card-body">
                        {!! Form::open(['route' => 'doc_legales.store', 'enctype' => 'multipart/form-data']) !!}

                            @include('admin.doc_legales.partial.form')

                        {!! Form::close() !!}
                    </div>

                    <div class="card-footer text-muted">
                        <a href="{{ route('doc_legales.index') }}">
                            <i class="far fa-arrow-alt-circle-left fa-lg"></i>REGRESAR
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
