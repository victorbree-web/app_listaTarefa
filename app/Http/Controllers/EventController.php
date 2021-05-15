<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tarefa;


class EventController extends Controller
{
    public function index(){

        $tarefas = Tarefa::All();

        return view('index', ['tarefas' => $tarefas]);
    }

    public function nova_tarefa(){

        return view('nova_tarefa');
    }

    public function todas_tarefas(){

        $tarefas = Tarefa::All();

        return view('todas_tarefas', ['tarefas' => $tarefas]);
    }
    
    public function store(Request $request){

        $tarefa = new Tarefa;

        $tarefa->nome = $request->nome;
        $tarefa->status = 0;

        $tarefa->save();

        return redirect('/index');

    }

    public function destroy($id){
        Tarefa::findOrFail($id)->delete();

        return redirect('/index')->with('msg', 'tarefa deletada com sucesso');       

    }
}
