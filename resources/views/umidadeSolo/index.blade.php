@extends('layouts.app')

@section('content')
	<h1>Listar dados umidadeSolos</h1>
	<p><a
	        href="/umidadeSolo/form"
	        class="btn btn-primary">Inserir Dados Umidade Solo</a>
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
	    	@if(count($umidadeSolos) > 0)
		        @foreach($umidadeSolos as $umidadeSolo)
		        <tr>
		            <td>{{ $umidadeSolo->nr_umidade_solo }}</td>
		            <td>{{ $umidadeSolo->dt_umidade_solo }}</td>
		            <td><a href="/umidadeSolo/form/{{$umidadeSolo->cd_umidade_solo}}" class="btn btn-secondary btn-sm">Editar</a></td>
		            <td><a href="/umidadeSolo/excluir/{{$umidadeSolo->cd_umidade_solo}}" class="btn btn-danger btn-sm">Excluir</a></td>
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
