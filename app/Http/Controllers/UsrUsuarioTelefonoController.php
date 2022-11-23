<?php

namespace App\Http\Controllers;

use App\Models\UsrUsuarioTelefono;
use App\Models\UsrUsuario;
use Illuminate\Http\Request;

/**
 * Class UsrUsuarioTelefonoController
 * @package App\Http\Controllers
 */
class UsrUsuarioTelefonoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usrUsuarioTelefonos = UsrUsuarioTelefono::paginate();

        return view('usr-usuario-telefono.index', compact('usrUsuarioTelefonos'))
            ->with('i', (request()->input('page', 1) - 1) * $usrUsuarioTelefonos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usrUsuarioTelefono = new UsrUsuarioTelefono();
        $usrUsuario->UsrUsuarioIdeem = $request->UsrUsuarioIdeem;
        return view('usr-usuario-telefono.create', compact('usrUsuarioTelefono'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(UsrUsuarioTelefono::$rules);

        $usrUsuarioTelefono = UsrUsuarioTelefono::create($request->all());

        return redirect()->route('usr-usuario-telefonos.index')
            ->with('success', 'UsrUsuarioTelefono created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usrUsuarioTelefono = UsrUsuarioTelefono::find($id);

        return view('usr-usuario-telefono.show', compact('usrUsuarioTelefono'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usrUsuarioTelefono = UsrUsuarioTelefono::find($id);

        return view('usr-usuario-telefono.edit', compact('usrUsuarioTelefono'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  UsrUsuarioTelefono $usrUsuarioTelefono
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsrUsuarioTelefono $usrUsuarioTelefono)
    {
        request()->validate(UsrUsuarioTelefono::$rules);

        $usrUsuarioTelefono->update($request->all());

        return redirect()->route('usr-usuario-telefonos.index')
            ->with('success', 'UsrUsuarioTelefono updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $usrUsuarioTelefono = UsrUsuarioTelefono::find($id)->delete();

        return redirect()->route('usr-usuario-telefonos.index')
            ->with('success', 'UsrUsuarioTelefono deleted successfully');
    }
}
