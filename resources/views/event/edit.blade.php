@extends('layout/main')

@section('title', ('Editar Tarefa'))

@section('content')

<div class="container app">
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
						<li class="list-group-item active"><a href="/">Tarefas pendentes</a></li>
						<li class="list-group-item"><a href="/nova_tarefa">Nova tarefa</a></li>
						<li class="list-group-item"><a href="/todas_tarefas">Todas tarefas</a></li>
					</ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Editando tarefa "{{$event->nome}}"</h4>
								<hr />

				<form method="POST" action="/update/{{$event->id}}">
								@csrf
								@method('PUT')
									<div class="form-group">
										<label>Nome da tarefa:</label>
										<input type="text" id="nome" name="nome" class="form-control" value="{{$event->nome}}">
									</div>
									<div class="form-group">
									<label>Tarefa completa ?</label>
									<select name="status" id="status" class="form-group">
									<option value="0">Não</option>
									<option value="1">Sim</option>
									</select>
									</div>

									<button type="submit" class="btn btn-success">Atualizar</button>
								</form>
								</div>
						</div>
					</div>
				</div>



@endsection