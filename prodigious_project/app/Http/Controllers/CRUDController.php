<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;

class CRUDController extends Controller
{
    
    public function index()
    {
        $cruds = Crud::all()->toArray();
        
        return view('crud.index', compact('cruds'));
    }

    public function create()
    {
        return view('crud.create');
    }

    public function store(Request $request)
    {
        $crud = new Crud([
          'name' => $request->get('name'),
          'cpf' => $request->get('cpf'),
          'email' => $request->get('email'),
          'nasc' => ($request->get('nasc')),
		  'descricao' => $request->get('descricao'),
		  'arquivo' => $request->file('arquivo')
		  
        ]);

        $crud->save();
        return redirect('/crud');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $crud = Crud::find($id);
        
        return view('crud.edit', compact('crud','id'));
    }

    public function update(Request $request, $id)
    {
        $crud = Crud::find($id);
        $crud->name = $request->get('name');
        $crud->cpf = $request->get('cpf');
        $crud->email = $request->get('email');
		$crud->nasc = $request->get('nasc');
		$crud->descricao = $request->get('descricao');
		$crud->arquivo = $request->get('arquivo');
        $crud->save();
        return redirect('/crud');
    }

    public function destroy($id)
    {
        $crud = Crud::find($id);
      $crud->delete();

      return redirect('/crud');
    }
}