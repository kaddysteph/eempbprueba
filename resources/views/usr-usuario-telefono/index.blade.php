@extends('layouts.app')

@section('template_title')
    Usr Usuario Telefono
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Usr Usuario Telefono') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('usr-usuario-telefonos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Usrusuariotelefonoid</th>
										<th>Usrusuariotelefono</th>
										<th>Create At</th>
										<th>Update At</th>
										<th>Usrusuario Usrusuarioideem</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usrUsuarioTelefonos as $usrUsuarioTelefono)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $usrUsuarioTelefono->UsrUsuarioTelefonoId }}</td>
											<td>{{ $usrUsuarioTelefono->UsrUsuarioTelefono }}</td>
											<td>{{ $usrUsuarioTelefono->create_at }}</td>
											<td>{{ $usrUsuarioTelefono->update_at }}</td>
											<td>{{ $usrUsuarioTelefono->UsrUsuario_UsrUsuarioIdeem }}</td>

                                            <td>
                                                <form action="{{ route('usr-usuario-telefonos.destroy',$usrUsuarioTelefono->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('usr-usuario-telefonos.show',$usrUsuarioTelefono->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('usr-usuario-telefonos.edit',$usrUsuarioTelefono->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $usrUsuarioTelefonos->links() !!}
            </div>
        </div>
    </div>
@endsection
