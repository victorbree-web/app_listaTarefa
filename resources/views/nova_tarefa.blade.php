@extends('layout/main')

@section('title', ('Nova Tarefa'))

@section('content')

		<div class="container app">
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
						<li class="list-group-item"><a href="/">Tarefas pendentes</a></li>
						<li class="list-group-item active"><a href="/nova_tarefa">Nova tarefa</a></li>
						<li class="list-group-item"><a href="/todas_tarefas">Todas tarefas</a></li>
					</ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Nova tarefa</h4>
								<hr />

								<form method="POST" action="/criar_tarefa" >
								@csrf
									<div class="form-group">
										<label>Descrição da tarefa:</label>
										<input type="text" id="nome" name="nome" class="form-control" placeholder="Exemplo: Lavar o carro">
									</div>

									<button type="submit" class="btn btn-success">Cadastrar</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				@endsection