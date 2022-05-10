<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;

use App\Models\User;
use App\Models\Role;
use App\Models\Assinatura;
use App\Models\Pagamento;


class UserController extends Controller
{

    public function index()
    {
        return view('dashboard.user.index');
    }

    public function login()
    {

        $x = App\Models\Teatro::with(['rates' => function ($query) {
             $query->avg('nota');
        }])->first();

        return dd($x);

        if(Auth::user()->role == 1  ){
            return view('kult.index');
        } else if(Auth::user()->role == 2){
            return dd('Anunciante');
        } else if(Auth::user()->role == 3){
            return dd('Colaborador');
        } else if(Auth::user()->role == 4){
            return view('dashboard.index');
        }
    }

    public function create()
    {
        return view('dashboard.user.create');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->fill([
            'role' => $request->nivel, 
            'kultestad_id' => $request->estado, 

            'name' => $request->nome,
            'gender' => $request->genero,
            'birthday' => $request->dataNascimento,
            'phone' => $request->phno,
            'kultpais_id' => $request->pais,

            'email' => $request->email,
            'password' => Hash::make($request->psw),
        ]);
        $user->save();

        $role = Role::where('id', $request->nivel)->first();

        return redirect( route('user.index') )->with('user.create', "Utilizador criado: " . $request->nome . " | ". $role->designac);
    }

    public function register(Request $request)
    { 
        //return redirect( route('login') )->with('user.success', $request->name);

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

    public function editStatus(User $user)
    {
        $user = User::with('roles', 'estado')->where('id', $user->id)->first();
        return view('dashboard.user.status')->with(compact('user'));
    }

    public function updateStatus(Request $request, User $user)
    {
        $user->update([
            'kultestad_id' => $request->user_estado,
        ]);

        return redirect( route('user.index') )->with('user.status.update', "Estado do(a) " . $user->name . " atualizado!");
    }

    public function destroy($id)
    {
        //
    }
}
