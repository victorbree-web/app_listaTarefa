@extends('layout/main')

@section('title', ('Tarefas Pendentes'))


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
								<h4>Tarefas pendentes</h4>
								<hr />
								@foreach($tarefas as $tarefa)

								@if($tarefa->status == 0)
								<div class="row mb-3 d-flex align-items-center tarefa">
									<div class="col-sm-6">{{$tarefa->nome}}</div>
									<div class="col-sm-3"><small>
									@if($tarefa->status == 0)
										pendente 	
									@endif
									</small></div>
									@if ($tarefa->status == 0)
									<div class="col-sm-3 mt-2 d-flex justify-content-between">

										<form action="/destroy_tarefa/{{$tarefa->id}}" method="post">
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-danger  fas fa-trash-alt fa-sm"></button>
										</form>

										
										<a href="/event/edit/{{ $tarefa->id }}" class="btn btn-info fas fa-edit fa-sm text-light"></a>
									
										
									</div>

									@endif
								</div>
								@endif
								@endforeach

							</div>
						</div>
					</div>
				</div>

            @endsection
			