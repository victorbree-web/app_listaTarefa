<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){

        return view('index');
    }

    public function nova_tarefa(){

        return view('nova_tarefa');
    }

    public function todas_tarefas(){

        return view('todas_tarefas');
    }


}
