<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pais;

class PaisController extends Controller
{

    public function index()
    {
        return view('dashboard.pais.index');
    }

    public function create()
    {
        return view('dashboard.pais.create');
    }

    public function store(Request $request)
    {
        Pais::create([
            'sigla' => $request->sigla,
            'designac' => $request->pais
        ]);

        return redirect( route('pais.index') )->with('pais.create', "País acionado com sucesso: " . $request->pais);
    }

    public function show(Pais $pais)
    {
        return view('dashboard.pais.view')->with(compact('pais'));
    }

    public function edit(Pais $pais)
    {
        return view('dashboard.pais.edit')->with(compact('pais'));
    }

    public function update(Request $request, Pais $pais)
    {
        $pais->update([
            'sigla' => $request->sigla,
            'designac' => $request->pais,
        ]);

        return redirect( route('pais.index') )->with('pais.update', "País actualizado com sucesso: " . $request->pais);
    }

    public function destroy(Pais $pais)
    {
        $nome = $pais->designac;
        $pais->delete();
        return redirect( route('pais.index') )->with('pais.delete', "País eliminado com sucesso: " . $nome);
    }
}
