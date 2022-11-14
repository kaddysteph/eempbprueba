@extends('layouts.app')

@section('template_title')
    Tarifa Resolucion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Resolucion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tarifaresolucion.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                      
                                        
										<th>ID</th>
										<th>Descripcion</th>
										<th>Fecha Inicial</th>
										<th>Fecha Final</th>
										<th>Estado</th>
										<th>Observacion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tarifaResolucions as $tarifaResolucion)
                                        <tr>
                                            
                                            
											<td>{{ $tarifaResolucion->TarifaResolucionId }}</td>
											<td>{{ $tarifaResolucion->TarifaResolucionDescripcion }}</td>
											<td>{{ $tarifaResolucion->TarifaResolucionFechaInicial }}</td>
											<td>{{ $tarifaResolucion->TarifaResolucionFechaFinal }}</td>
											<td>{{ $tarifaResolucion->TarifaResolucionEstado }}</td>
											<td>{{ $tarifaResolucion->TarifaResolucionObservacion }}</td>

                                            <td>
                                                <form action="{{ route('tarifaresolucion.destroy',$tarifaResolucion->TarifaResolucionId) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tarifaresolucion.show',$tarifaResolucion->TarifaResolucionId) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tarifaresolucion.edit',$tarifaResolucion->TarifaResolucionId) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $tarifaResolucions->links() !!}
            </div>
        </div>
    </div>
@endsection
