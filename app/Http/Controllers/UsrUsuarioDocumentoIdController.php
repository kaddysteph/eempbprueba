<?php

namespace App\Http\Controllers;

use App\Models\UsrUsuarioDocumentoId;
use Illuminate\Http\Request;

/**
 * Class UsrUsuarioDocumentoIdController
 * @package App\Http\Controllers
 */
class UsrUsuarioDocumentoIdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usrUsuarioDocumentoIds = UsrUsuarioDocumentoId::paginate();

        return view('usr-usuario-documento-id.index', compact('usrUsuarioDocumentoIds'))
            ->with('i', (request()->input('page', 1) - 1) * $usrUsuarioDocumentoIds->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usrUsuarioDocumentoId = new UsrUsuarioDocumentoId();
        return view('usr-usuario-documento-id.create', compact('usrUsuarioDocumentoId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(UsrUsuarioDocumentoId::$rules);

        $usrUsuarioDocumentoId = UsrUsuarioDocumentoId::create($request->all());

        return redirect()->route('usr-usuario-documento-ids.index')
            ->with('success', 'UsrUsuarioDocumentoId created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usrUsuarioDocumentoId = UsrUsuarioDocumentoId::find($id);

        return view('usr-usuario-documento-id.show', compact('usrUsuarioDocumentoId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usrUsuarioDocumentoId = UsrUsuarioDocumentoId::find($id);

        return view('usr-usuario-documento-id.edit', compact('usrUsuarioDocumentoId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  UsrUsuarioDocumentoId $usrUsuarioDocumentoId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsrUsuarioDocumentoId $usrUsuarioDocumentoId)
    {
        request()->validate(UsrUsuarioDocumentoId::$rules);

        $usrUsuarioDocumentoId->update($request->all());

        return redirect()->route('usr-usuario-documento-ids.index')
            ->with('success', 'UsrUsuarioDocumentoId updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $usrUsuarioDocumentoId = UsrUsuarioDocumentoId::find($id)->delete();

        return redirect()->route('usr-usuario-documento-ids.index')
            ->with('success', 'UsrUsuarioDocumentoId deleted successfully');
    }
}
