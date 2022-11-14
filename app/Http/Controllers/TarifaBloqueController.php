<?php

namespace App\Http\Controllers;

use App\Models\TarifaBloque;
use Illuminate\Http\Request;

/**
 * Class TarifaBloqueController
 * @package App\Http\Controllers
 */
class TarifaBloqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarifaBloques = TarifaBloque::paginate();

        return view('tarifa-bloque.index', compact('tarifaBloques'))
            ->with('TarifaBloqueId', (request()->input('page', 1) - 1) * $tarifaBloques->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tarifaBloque = new TarifaBloque();
        return view('tarifa-bloque.create', compact('tarifaBloque'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $tarifaBloque = TarifaBloque::create($request->all());

        return redirect('tarifabloque')
            ->with('success', 'TarifaBloque created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $TarifaBloqueId
     * @return \Illuminate\Http\Response
     */
    public function show($TarifaBloqueId)
    {
        $tarifaBloque = TarifaBloque::find($TarifaBloqueId);

        return view('tarifa-bloque.show', compact('tarifaBloque'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $TarifaBloqueId
     * @return \Illuminate\Http\Response
     */
    public function edit($TarifaBloqueId)
    {
        $tarifaBloque = TarifaBloque::find($TarifaBloqueId);

        return view('tarifa-bloque.edit', compact('tarifaBloque'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TarifaBloque $tarifaBloque
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TarifaBloque $tarifaBloque)
    {
        request()->validate(TarifaBloque::$rules);

        $tarifaBloque->update($request->all());

        return redirect('tarifabloque')
            ->with('success', 'TarifaBloque updated successfully');
    }

    /**
     * @param int $TarifaBloqueId
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($TarifaBloqueId)
    {
        $tarifaBloque = TarifaBloque::find($TarifaBloqueId)->delete();

        return redirect('tarifabloque')
            ->with('success', 'TarifaBloque deleted successfully');
    }
}
