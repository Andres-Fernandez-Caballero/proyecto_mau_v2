<?php

namespace App\Http\Controllers;

use App\Models\Pintura;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class PinturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sections.pintura.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $pintura = new Pintura([
            'color_name' => $request->get('color_name'),
            'color_number' => $request->get('color_number'),
            'color_hex' => '#0000',
            'marca_id' => $request->get('marca_id'),
            'categoria_id' => 1
        ]);

        $pintura->save();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pintura  $pintura
     * @return \Illuminate\Http\Response
     */
    public function show(Pintura $pintura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pintura  $pintura
     * @return \Illuminate\Http\Response
     */
    public function edit(Pintura $pintura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pintura  $pintura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pintura $pintura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pintura  $pintura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pintura $pintura)
    {
        //
    }
}
