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
        //
    }

    public function store(Request $request)
    {
        //
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
