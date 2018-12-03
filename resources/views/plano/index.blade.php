@extends('layouts.app')

@section('content')
	<h1>Listar Planos de Sensores</h1>
	@if(auth()->user()->ic_nivel_usuario == 1)
		<p><a
	        href="/admin/planos/form"
	        class="btn btn-primary">Inserir Planos de Sensores</a>
		</p>
	@endif
	<table class="table table-striped">
	    <thead>
	        <tr>
	            <th scope="col">Nome</th>
	            <th scope="col">Valor</th>
	            <th scope="col" colspan="2">Ações</th>
	        </tr>
	    </thead>
	    <tbody>
	    	@if(count($planoSensores) > 0)
		        @foreach($planoSensores as $plano)
		        <tr>
		            <td>{{ $plano->nm_plano_sensores }}</td>
		            <td>{{ $plano->vl_plano_sensores }}</td>

		            @if(auth()->user()->ic_nivel_usuario == 1)
			            <td><a href="/admin/planos/form/{{$plano->cd_plano_sensores}}" class="btn btn-secondary btn-sm">Editar</a></td>
			            <td><a href="/admin/planos/excluir/{{$plano->cd_plano_sensores}}" class="btn btn-danger btn-sm">Excluir</a></td>
			        @elseif($plano->fk_plano == null)
			        		<td colspan="2"><a href="/planos/assinar/{{$plano->cd_plano_sensores}}" class="btn btn-success btn-sm">Assinar</a></td>
			        @else
			        	<td colspan="2"><a href="/planos/cancelarAssinatura/{{$plano->cd_plano_sensores}}" class="btn btn-danger btn-sm">Cancelar assinatura</a></td>
			        @endif
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
