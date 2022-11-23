@extends('layouts.app')

@section('template_title')
    Usr Usuario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Usr Usuario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('actualizacion.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        <th>No</th>
                                        
										<th>Usrusuarioideem</th>
										<th>Usrusuarionombres</th>
										<th>Usrusuarioapellidos</th>
										<th>Usrusuariodireccion</th>
										<th>Usrusuarionumeroidentificacion</th>
										<th>Usrusuarionit</th>
										<th>Create At</th>
										<th>Update At</th>
										<th>Users Id</th>
										<th>Usrusuariodocumentoid Usrdoctoidentificacionid</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usrUsuario as $usrUsuario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $usrUsuario->UsrUsuarioIdeem }}</td>
											<td>{{ $usrUsuario->UsrUsuarioNombres }}</td>
											<td>{{ $usrUsuario->UsrUsuarioApellidos }}</td>
											<td>{{ $usrUsuario->UsrUsuarioDireccion }}</td>
											<td>{{ $usrUsuario->UsrUsuarioNumeroIdentificacion }}</td>
											<td>{{ $usrUsuario->UsrUsuarioNIT }}</td>
											<td>{{ $usrUsuario->create_at }}</td>
											<td>{{ $usrUsuario->update_at }}</td>
											<td>{{ $usrUsuario->users_id }}</td>
											<td>{{ $usrUsuario->UsrUsuarioDocumentoId_UsrDoctoIdentificacionId }}</td>

                                            <td>
                                                <form action="{{ route('usr-usuarios.destroy',$usrUsuario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('usr-usuarios.show',$usrUsuario->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('usr-usuarios.edit',$usrUsuario->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $usrUsuarios->links() !!}
            </div>
        </div>
    </div>
@endsection
