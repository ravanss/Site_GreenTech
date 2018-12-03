@extends('layouts.app')

@section('content')
	<h1>Listar dados chuvas</h1>
	<p><a
	        href="/chuva/form"
	        class="btn btn-primary">Inserir Dados Chuva</a>
	</p>

	<table class="table table-striped">
	    <thead>
	        <tr>
	            <th scope="col">Número</th>
	            <th scope="col">Data Coleta</th>
	            <th scope="col" colspan="2">Ações</th>
	        </tr>
	    </thead>
	    <tbody>
	    	@if(count($chuvas) > 0)
		        @foreach($chuvas as $chuva)
		        <tr>
		            <td>{{ $chuva->nr_chuva }}</td>
		            <td>{{ $chuva->dt_chuva }}</td>
		            <td><a href="/chuva/form/{{$chuva->cd_chuva}}" class="btn btn-secondary btn-sm">Editar</a></td>
		            <td><a href="/chuva/excluir/{{$chuva->cd_chuva}}" class="btn btn-danger btn-sm">Excluir</a></td>
		        </tr>
		        @endforeach
		    @else
				<tr>
					<td colspan="4">Nenhum registro encontrado!</td>
				</tr>
			@endif
		</tbody>
	</table>


@endsection
