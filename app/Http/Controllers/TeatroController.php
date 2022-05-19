<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Teatro;
use App\Models\Imagem;

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
            'idd' => $request->restri,
            'link' => $request->link,
            'link_trailer' => $request->link_alt,
            'descrica' => $request->descri,
            'views' => 0,
            'kultestad_id' => 1,
        ]);

        // Duração
            if($request->duracH || $request->duracH > 0){
                $durac = $request->duracH.'h '.$request->duracM.'m';
            } else {
                $durac = $request->duracM.'m';
            }
            $teatro->durac = $durac;
        // Duração

        // Imagem Capa
            if($request->hasfile('thumb')){
                $file = $request->file('thumb');
                $exe = $file->getClientOriginalExtension();
                $filename = time().'.'.$exe;
                $file->move('uploads/teatro/', $filename);

                $teatro->imgThumb = $filename;
            }
        // Imagem Capa

        $teatro->save();

        // Outras Imagens
            if($request->hasfile('img')){
                $imagens = $request->img;

                for($i=0; $i<count($imagens); $i++){
                    $file = $request->file('img')[$i];
                    $exe = $file->getClientOriginalExtension();
                    $filename = time().'.'.$exe;
                    $file->move('uploads/teatro/', $filename);

                    $img = new Imagem();
                    $img->src = $filename;

                    $teatro->imagens()->save($img);
                }
            }
        // Outras Imagens

        

        return redirect( route('teatro.index') )->with('teatro.create', "Peça Teatral acionada com sucesso: " . $request->titulo);
    }

    public function watch(Teatro $teatro){
        return view('kult.teatro.index')->with(compact('teatro'));
    }

    public function show(Teatro $teatro)
    {
        return view('dashboard.teatro.view')->with(compact('teatro'));
    }

    public function edit(Teatro $teatro)
    {
        return view('dashboard.teatro.edit')->with(compact('teatro'));
    }

    public function update(Request $request, Teatro $teatro)
    {
        $teatro->update([
            'titulo' => $request->titulo, 
            'kultcateg_id' => $request->categ,
            'dataLanc' => $request->dataLanc,
            'idd' => $request->restri,
            'link' => $request->link,
            'link_trailer' => $request->link_alt,
            'descrica' => $request->descri,
        ]);

        // Duração
            if($request->duracH || $request->duracH > 0){
                $durac = $request->duracH.'h '.$request->duracM.'m';
            } else {
                $durac = $request->duracM.'m';
            }
            $teatro->durac = $durac;
        // Duração

        // Imagem Capa
            if($request->hasfile('thumb')){
                $file = $request->file('thumb');
                $exe = $file->getClientOriginalExtension();
                $filename = time().'.'.$exe;
                $file->move('uploads/teatro/', $filename);

                $teatro->imgThumb = $filename;
            }
        // Imagem Capa
        
        return redirect( route('teatro.index') )->with('teatro.update', "Peça Teatral actualizada com sucesso: " . $request->titulo);
    }

    public function destroy($id)
    {
        //
    }
}
