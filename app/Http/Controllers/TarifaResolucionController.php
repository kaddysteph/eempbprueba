<?php

namespace App\Http\Controllers;

use App\Models\TarifaResolucion;
use Illuminate\Http\Request;

/**
 * Class TarifaResolucionController
 * @package App\Http\Controllers
 */
class TarifaResolucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarifaResolucions = TarifaResolucion::paginate();

        return view('tarifa-resolucion.index', compact('tarifaResolucions'))
            ->with('TarifaResolucionId', (request()->input('page', 1) - 1) * $tarifaResolucions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tarifaResolucion = new TarifaResolucion();
        return view('tarifa-resolucion.create', compact('tarifaResolucion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $tarifaResolucion = TarifaResolucion::create($request->all());

        return redirect('tarifaresolucion')
            ->with('success', 'TarifaResolucion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $TarifaResolucionId
     * @return \Illuminate\Http\Response
     */
    public function show($TarifaResolucionId)
    {
        $tarifaResolucion = TarifaResolucion::find($TarifaResolucionId);

        return view('tarifa-resolucion.show', compact('tarifaResolucion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $TarifaResolucionId
     * @return \Illuminate\Http\Response
     */
    public function edit($TarifaResolucionId)
    {
        $tarifaResolucion = TarifaResolucion::find($TarifaResolucionId);

        return view('tarifa-resolucion.edit', compact('tarifaResolucion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TarifaResolucion $tarifaResolucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TarifaResolucion $tarifaResolucion)
    {
        request()->validate(TarifaResolucion::$rules);

        $tarifaResolucion->update($request->all());

        return redirect('tarifaresolucion')
            ->with('success', 'TarifaResolucion updated successfully');
    }

    /**
     * @param int $TarifaResolucionId
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($TarifaResolucionId)
    {
        $tarifaResolucion = TarifaResolucion::find($TarifaResolucionId)->delete();

        return redirect('tarifa-resolucions.index')
            ->with('success', 'TarifaResolucion deleted successfully');
    }
}
