@extends('layouts.app')

@section('template_title')
    Tarifa Cargo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cargos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tarifacargos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        
                                        
										<th>Resolucion</th>
										<th>Bloque</th>
										<th>Cargo por consumidor</th>
										<th>Cargo por energia</th>
										<th>Cargo unitario por potencia maxima</th>
										<th>Cargo unitario por potencia contratada</th>
										<th>Cargo unitario por energia en punta</th>
										<th>Cargo unitario por energia intermedia</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tarifaCargos as $tarifaCargo)
                                        <tr>
                                
                                            
											<td>{{ $tarifaCargo->$TarifaResolucion_TarifaResolucionId }}</td>
											<td>{{ $tarifaCargo->TarifaBloque_TarifaBloqueId }}</td>
											<td>{{ $tarifaCargo->CargoxConsumidor }}</td>
											<td>{{ $tarifaCargo->CargoxEnergia }}</td>
											<td>{{ $tarifaCargo->CargoUnitarioxPotenciaMaxima }}</td>
											<td>{{ $tarifaCargo->CargoUnitarioxPotenciaContratada }}</td>
											<td>{{ $tarifaCargo->CargoUnitarioxEnergiaenPunta }}</td>
											<td>{{ $tarifaCargo->CargoUnitarioxEnergiaIntermedia }}</td>

                                            <td>
                                                <form action="{{ route('tarifacargos.destroy',$tarifaCargo->TarifaResolucion_TarifaResolucionId, $tarifaCargo->TarifaBloque_TarifaBloqueId) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tarifacargos.show',$tarifaCargo->TarifaResolucion_TarifaResolucionId,$tarifaCargo->TarifaBloque_TarifaBloqueId) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tarifacargos.edit',$tarifaCargo->TarifaResolucion_TarifaResolucionId,$tarifaCargo->TarifaBloque_TarifaBloqueId) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tarifaCargos->links() !!}
            </div>
        </div>
    </div>
@endsection
