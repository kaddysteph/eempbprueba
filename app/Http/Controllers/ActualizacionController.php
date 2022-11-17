<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actualizacion;

class ActualizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actualizacions = Actualizacion::paginate();

        return view('actualizacion.ingreso', compact('actualizacions'))
            ->with('UsrUsuarioIdeem', (request()->input('page', 1) - 1) * $actualizacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actualizacion = new Actualizacion();
        return view('actualizacion.ingreso', compact('actualizacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actualizacion = Actualizacion::create($request->all());

        return redirect('actualizacion')
            ->with('success', 'created successfully.');
    }
}
