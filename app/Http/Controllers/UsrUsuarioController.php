<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\UsrUsuario;
use App\Models\UsrUsuarioTelefono;
use App\Models\UsrUsuarioDocumentoId;
use Illuminate\Http\Request;

/**
 * Class UsrUsuarioController
 * @package App\Http\Controllers
 */
class UsrUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usrUsuario = new UsrUsuario();
        $usrUsuarioTelefono = new UsrUsuarioTelefono();
        $documento = UsrUsuarioDocumentoId::pluck('UsrDoctoIdentificacion', 'UsrDoctoIdentificacionId');
        return view('usr-usuario.create', compact('usrUsuario', 'documento', 'usrUsuarioTelefono'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usrUsuario = new UsrUsuario();
        $usrUsuarioTelefono = new UsrUsuarioTelefono();
        $documento = UsrUsuarioDocumentoId::pluck('UsrDoctoIdentificacion', 'UsrDoctoIdentificacionId');
        return view('usr-usuario.create', compact('usrUsuario','documento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $usuario = new UsrUsuario();
        $usuario->UsrUsuarioNombres = $request->UsrUsuarioNombres;
        $usuario->UsrUsuarioApellidos = $request->UsrUsuarioApellidos;
        $usuario->UsrUsuarioDireccion = $request->UsrUsuarioDireccion;
        $usuario->UsrUsuarioDocumentoId_UsrDoctoIdentificacionId = $request->UsrUsuarioDocumentoId_UsrDoctoIdentificacionId;
        $usuario->UsrUsuarioNumeroIdentificacion = $request->UsrUsuarioNumeroIdentificacion;
        $usuario->UsrUsuarioNIT = $request->UsrUsuarioNIT;
        $usuario->users_id = Auth::user()->id;
        $usuario->save();
        $telefono = new UsrUsuarioTelefono();
        $telefono->UsrUsuarioTelefono = $request->UsrUsuarioTelefono;
        $telefono->UsrUsuario_UsrUsuarioIdeem = $usuario->id;
        $telefono->save();



        return view('actualizacion.ingreso')
            ->with('success', 'UsrUsuario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($UsrUsuarioIdeem)
    {
        $usrUsuario = UsrUsuario::find($UsrUsuarioIdeem);

        return view('usr-usuario.show', compact('usrUsuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usrUsuario = UsrUsuario::find($id);

        return view('usr-usuario.edit', compact('usrUsuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  UsrUsuario $usrUsuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsrUsuario $usrUsuario)
    {
        request()->validate(UsrUsuario::$rules);

        $usrUsuario->update($request->all());

        return redirect()->route('usr-usuarios.index')
            ->with('success', 'UsrUsuario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $usrUsuario = UsrUsuario::find($id)->delete();

        return redirect()->route('usr-usuarios.index')
            ->with('success', 'UsrUsuario deleted successfully');
    }
}
