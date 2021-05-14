@extends('layout/main')

@section('title', ('Todas Tarefas'))

@section('content')

		<div class="container app">
			<div class="row">
				<div class="col-sm-3 menu">
					<ul class="list-group">
						<li class="list-group-item"><a href="/index">Tarefas pendentes</a></li>
						<li class="list-group-item"><a href="/nova_tarefa">Nova tarefa</a></li>
						<li class="list-group-item active"><a href="/todas_tarefas">Todas tarefas</a></li>
					</ul>
				</div>

				<div class="col-sm-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Todas tarefas</h4>
								<hr />

								<div class="row mb-3 d-flex align-items-center tarefa">
									<div class="col-sm-9">Lavar o carro (status)</div>
									<div class="col-sm-3 mt-2 d-flex justify-content-between">
										<i class="fas fa-trash-alt fa-lg text-danger"></i>
										<i class="fas fa-edit fa-lg text-info"></i>
										<i class="fas fa-check-square fa-lg text-success"></i>
									</div>
								</div>

								<div class="row mb-3 d-flex align-items-center tarefa">
									<div class="col-sm-9">Passear com o cachorro (status)</div>
									<div class="col-sm-3 mt-2 d-flex justify-content-between">
										<i class="fas fa-trash-alt fa-lg text-danger"></i>
										<i class="fas fa-edit fa-lg text-info"></i>
										<i class="fas fa-check-square fa-lg text-success"></i>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				@endsection