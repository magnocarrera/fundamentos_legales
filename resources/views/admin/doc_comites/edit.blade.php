@extends('layouts.app')

@section('content')
    <div class='container'>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        Editar Documento de Norma
                    </div>
                    <div class="card-body">
                        {!! Form::model($doc_comite, ['route' => ['doc_comites.update', $doc_comite], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
                            @include('admin.doc_comites.partial.form')
                            <input type="hidden" name="id" value="{{ $doc_comite->id }}">
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
@endsection
