@extends('layouts.app')

@section('content')
            <div class="content">
                <div class="container-fluid">
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <div class="list-group" id="myList" role="tablist">
                                <a class="list-group-item list-group-item-action active" data-toggle="list" href="#normas_covenin" role="tab">Normas COVENIN</a>
                                <a class="list-group-item list-group-item-action" data-toggle="list" href="#bases_legales" role="tab">Bases Legales</a>
                              </div>
                        </div>
                        <div class="col-10">
                            <div class="tab-content">
                                <!-- Panel de normas covenin -->
                                <div class="tab-pane active" id="normas_covenin" role="tabpanel">


                                    <table id="example1" class="hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Comite</th>
                                                <th>Nº Norma</th>
                                                <th>Año</th>
                                                <th>Descripción</th>
                                                <th>Cod-Norma</th>
                                                <th>Tipo</th>
                                                <th>Ver</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($documents as $comite)
                                                <tr>
                                                    <td>{{ $comite->committe->comite }}</td>
                                                    <td>{{ $comite->nro_norma }}</td>
                                                    <td>{{ $comite->ano }}</td>
                                                    <td>{{ $comite->descripcion }}</td>
                                                    <td>{{ $comite->cod_norma }}</td>
                                                    <td>{{ $comite->type }}</td>
                                                    <td>
                                                        <a href="{{ asset('storage/'.$comite->file) }}" target = "_blank">Ver</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Comite</th>
                                                <th>Nº Norma</th>
                                                <th>Año</th>
                                                <th>Descripción</th>
                                                <th>Cod-Norma</th>
                                                <th>Tipo</th>
                                                <th>Ver</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                                <!-- Panel de leyes -->
                                <div class="tab-pane" id="bases_legales" role="tabpanel">
                                    <table id="example2" class="hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Categoría</th>
                                                <th>Nº Norma</th>
                                                <th>Año</th>
                                                <th>Decreto</th>
                                                <th>Descripción</th>
                                                <th>Ver</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($legaldocuments as $regulation)
                                        <tr>
                                            <td>{{ $regulation->regulation->name }}</td>
                                            <td>{{ $regulation->nro_norma }}</td>
                                            <td>{{ $regulation->ano }}</td>
                                            <td>{{ $regulation->decreto }}</td>
                                            <td>{{ $regulation->descripcion }}</td>
                                            <td>
                                                <a href="{{ asset('storage/'.$regulation->file) }}" target = "_blank">Ver</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Categoría</th>
                                                <th>Nº Norma</th>
                                                <th>Año</th>
                                                <th>Decreto</th>
                                                <th>Descripción</th>
                                                <th>Ver</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
@endsection
