<?php

namespace App\Http\Controllers;

use App\Models\TarifaCargo;
use App\Models\TarifaResolucion;
use App\Models\TarifaBloque;
use Illuminate\Http\Request;

/**
 * Class TarifaCargoController
 * @package App\Http\Controllers
 */
class TarifaCargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarifaCargos = TarifaCargo::paginate();

        return view('tarifa-cargo.index', compact('tarifaCargos'))
            ->with('TarifaResolucion_TarifaResolucionId', 'TarifaBloque_TarifaBloqueId', (request()->input('page', 1) - 1) * $tarifaCargos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tarifaCargo = new TarifaCargo();
        $resolucion = TarifaResolucion::pluck('TarifaResolucionDescripcion', 'TarifaResolucionId');
        $bloque = TarifaBloque::pluck('TarifaBloqueNombre', 'TarifaBloqueId');
        return view('tarifa-cargo.create', compact('tarifaCargo', 'resolucion', 'bloque'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $tarifaCargo = TarifaCargo::create($request->all());

        return redirect('tarifacargos')
            ->with('success', 'TarifaCargo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarifaCargo = TarifaCargo::find($id);

        return view('tarifa-cargo.show', compact('tarifaCargo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarifaCargo = TarifaCargo::find($id);
        $resolucion = TarifaResolucion::pluck('TarifaResolucionDescripcion', 'TarifaResolucionId');
        $bloque = TarifaBloque::pluck('TarifaBloqueNombre', 'TarifaBloqueId');

        return view('tarifa-cargo.edit', compact('tarifaCargo', 'resolucion', 'bloque'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TarifaCargo $tarifaCargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TarifaCargo $tarifaCargo)
    {
        request()->validate(TarifaCargo::$rules);

        $tarifaCargo->update($request->all());

        return redirect('tarifacargos')
            ->with('success', 'TarifaCargo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tarifaCargo = TarifaCargo::find($id)->delete();

        return redirect('tarifacargos')
            ->with('success', 'TarifaCargo deleted successfully');
    }
}
