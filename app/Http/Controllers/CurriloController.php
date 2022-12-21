<?php

namespace App\Http\Controllers;

use App\Models\Currilo;
use App\Models\Especialidade;
use Illuminate\Http\Request;

class CurriloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //trazer todos os curriculos
        $curriculos = Currilo::where('user_id', auth()->user()->id )->get();

        return view('administrativo.index', compact('curriculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especialidades = Especialidade::all();
        return view('administrativo.create', compact('especialidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'name_mother' => 'required',
            'name_father' => 'required',
            'date_birth' => 'required',
            'cpf' => 'required',
            'cidade' => 'required',
            'bairro' => 'required',
            'logradouro' => 'required',
            'cep' => 'required',
            'telefone' => 'required',
            'status' => 'required',
            'especialidade_id' => 'required',
            'experiencia' => 'required',
        ]);

        $curriculo = new Currilo();
        $curriculo->name = $request->name;
        $curriculo->name_mother = $request->name_mother;
        $curriculo->name_father = $request->name_father;
        $curriculo->date_birth = $request->date_birth;
        $curriculo->cpf = $request->cpf;
        $curriculo->cidade = $request->cidade;
        $curriculo->bairro = $request->bairro;
        $curriculo->logradouro = $request->logradouro;
        $curriculo->cep = $request->cep;
        $curriculo->telefone = $request->telefone;
        $curriculo->status = $request->status;
        $curriculo->especialidade_id = $request->especialidade_id;
        $curriculo->experiencia = $request->experiencia;
        $curriculo->user_id = auth()->user()->id;
        $curriculo->save();

        return redirect()->route('curriculo.index')->with('success', 'Currículo cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Currilo  $currilo
     * @return \Illuminate\Http\Response
     */
    public function show(Currilo $curriculo)
    {
        return view('administrativo.show', compact('curriculo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Currilo  $currilo
     * @return \Illuminate\Http\Response
     */
    public function edit(Currilo $currilo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Currilo  $currilo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Currilo $currilo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Currilo  $currilo
     * @return \Illuminate\Http\Response
     */
    public function destroy($currilo)
    {

        $c = Currilo::where('user_id', auth()->user()->id )
            ->where('id', $currilo)
            ->delete();

        return redirect()->route('curriculo.index')->with('success', 'Currículo excluído com sucesso!');
    }
}
