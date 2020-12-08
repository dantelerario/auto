<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalogoauto;
use App\Auto;

class CatalogoautoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogoautos = Catalogoauto::all();

        return view('catalogoauto.index', compact('catalogoautos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catalogoauto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $data = $request->all();

        $newcatalogoauto = new Catalogoauto();
        $newcatalogoauto->nome = $data['nome'];
        $newcatalogoauto->colore = $data['colore'];
        $newcatalogoauto->cilindrata = $data['cilindrata'];
        $newcatalogoauto->potenza = $data['potenza'];
        $newcatalogoauto->misuraruote = $data['misuraruote'];
        $newcatalogoauto->tipologia = $data['tipologia'];
        $newcatalogoauto->kmLitro = $data['kmLitro'];
        $saved = $newcatalogoauto->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Catalogoauto $catalogoauto)
    {


        return view('catalogoauto.show', compact('catalogoauto'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Catalogoauto $catalogoauto)
    {
        return view('catalogoauto.edit', compact('catalogoauto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catalogoauto $catalogoauto)
    {
        $data = $request->all();
        $catalogoauto->update($data);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catalogoauto $catalogoauto)
    {
        $catalogoauto->delete();
    }
}
