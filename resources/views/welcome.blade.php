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
                                                <th>Nº Norma</th>
                                                <th>Año</th>
                                                <th>Decreto</th>
                                                <th>Descripción</th>
                                                <th>Ver</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nº Norma</th>
                                                <th>Año</th>
                                                <th>Decreto</th>
                                                <th>Descripción</th>
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
                                                <th>Nº Norma</th>
                                                <th>Año</th>
                                                <th>Decreto</th>
                                                <th>Descripción</th>
                                                <th>Ver</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                            <tr>
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

