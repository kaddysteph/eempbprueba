@extends('layouts.app')

@section('template_title')
    Usr Usuario Documento Id
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Usr Usuario Documento Id') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('usr-usuario-documento-ids.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Usrdoctoidentificacionid</th>
										<th>Usrdoctoidentificacion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usrUsuarioDocumentoIds as $usrUsuarioDocumentoId)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $usrUsuarioDocumentoId->UsrDoctoIdentificacionId }}</td>
											<td>{{ $usrUsuarioDocumentoId->UsrDoctoIdentificacion }}</td>

                                            <td>
                                                <form action="{{ route('usr-usuario-documento-ids.destroy',$usrUsuarioDocumentoId->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('usr-usuario-documento-ids.show',$usrUsuarioDocumentoId->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('usr-usuario-documento-ids.edit',$usrUsuarioDocumentoId->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $usrUsuarioDocumentoIds->links() !!}
            </div>
        </div>
    </div>
@endsection
