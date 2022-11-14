@extends('layouts.app')

@section('template_title')
    Tarifa Bloque
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Bloque') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tarifabloque.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Nombre</th>
										<th>Codigo</th>
										<th>Condicion</th>
										<th>Observacion</th>
										<th>Kwh Inicial</th>
										<th>Kwh Final</th>
										<th>Demanda inicial</th>
										<th>Participacion Punta</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tarifaBloques as $tarifaBloque)
                                        <tr>
                                            
                                            
											<td>{{ $tarifaBloque->TarifaBloqueId }}</td>
											<td>{{ $tarifaBloque->TarifaBloqueNombre }}</td>
											<td>{{ $tarifaBloque->TarifaBloqueCodigo }}</td>
											<td>{{ $tarifaBloque->TarifaBloqueCondicion }}</td>
											<td>{{ $tarifaBloque->TarifaBloqueObservacion }}</td>
											<td>{{ $tarifaBloque->TarifaBloqueKwhInicial }}</td>
											<td>{{ $tarifaBloque->TarifaBloqueKwhFinal }}</td>
											<td>{{ $tarifaBloque->TarifaBloqueDemandaInicial }}</td>
											<td>{{ $tarifaBloque->TarifaBloqueParticipacionPunta }}</td>

                                            <td>
                                                <form action="{{ route('tarifabloque.destroy',$tarifaBloque->TarifaBloqueId) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tarifabloque.show',$tarifaBloque->TarifaBloqueId) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tarifabloque.edit',$tarifaBloque->TarifaBloqueId) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $tarifaBloques->links() !!}
            </div>
        </div>
    </div>
@endsection
