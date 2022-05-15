<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Teatro;

class TeatroController extends Controller
{
    public function index()
    {
        return view('dashboard.teatro.index');
    }

    public function create()
    {
        return view('dashboard.teatro.create');
    }

    public function store(Request $request)
    {
        $teatro = new Teatro();
        $teatro->fill([
            'user_id' => \Auth::user()->id,
            'titulo' => $request->titulo, 
            'kultcateg_id' => $request->categ,
            'dataLanc' => $request->dataLanc,
            'durac' => $request->durac,
            'idd' => $request->restri,
            'link' => $request->link,
            'link_trailer' => $request->link_alt,
            'descrica' => $request->descri,
            'views' => 0,
            'kultestad_id' => 1,
        ]);

        if($request->hasfile('thumb')){
            $file = $request->file('thumb');
            $exe = $file->getClientOriginalExtension();
            $filename = time().'.'.$exe;
            $file->move('uploads/teatro/', $filename);

            $teatro->imgThumb = $filename;
        }

        $teatro->save();

        return redirect( route('teatro.index') )->with('teatro.create', "Teatro acionado com sucesso: " . $request->tearo);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
