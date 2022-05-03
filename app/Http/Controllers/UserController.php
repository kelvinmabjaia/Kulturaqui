<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;

use App\Models\User;
use App\Models\Assinatura;
use App\Models\Pagamento;


class UserController extends Controller
{

    public function index()
    {
        //
    }

    public function login()
    {
        
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    { 
        return redirect( route('login') )->with('user.success', $request->name);

        $metodo = '';
        if( $request->payMethod == 'M' ){ $metodo = 'Mpesa'; }
        else 
        if ( $request->payMethod == 'C' ){ $metodo = 'Conta Movel'; }

        $pagamento = new Pagamento();
        $pagamento->fill([
            'metodo' => $metodo,
            'nrConta' => $request->nrConta
        ]);

        $pagamento->save();

        $user = new User();
        $user->fill([
            'role' => 1, // Assinante
            'kultestad_id' => 1, // Activo

            'name' => $request->name,
            'gender' => $request->genero,
            'birthday' => $request->dataNascimento,
            'phone' => $request->phno,
            'kultpais_id' => $request->pais,

            'kultpayme_id' => $pagamento->id,

            'email' => $request->email,
            'password' => Hash::make($request->psw),
        ]);
        $user->save();

        $assinatura = new Assinatura();
        $assinatura->fill([
            'kultplano_id' => $request->plano,
            'dataIni' => Carbon::now(),
            'dataFim' => Carbon::now(),
            'exp' => false
        ]);

        return redirect( route('login') )->with('user.success', $request->user_nome . " foi adicionado(a) com sucesso!");

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
