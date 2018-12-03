@extends('layouts.app')

@section('content')
	<form method="POST" action="{{ $action }}">
		{{ csrf_field() }}
		<label for="nm_plano_sensores">Nome:</label>
		<input type="text" name="nm_plano_sensores"  value="{{ $nm_plano_sensores }}" required>
		<label for="vl_plano_sensores">Valor do Plano:</label>
		<input type="text" name="vl_plano_sensores"  value="{{ $vl_plano_sensores }}" required>
		<label for="fk_umidade_solo">Umidade Solo:</label>
		<select name="fk_umidade_solo" required>
	        <option {{(isset($umidadeSolos) ? '' : 'selected="selected"')}}></option>
	        @foreach($umidadeSolos as $umidadeSolo)
	        	<option value="{{$umidadeSolo->cd_umidade_solo}}" {{($umidadeSolo->cd_umidade_solo == $fk_umidade_solo) ? 'selected="selected"' : ''}}>{{$umidadeSolo->nr_umidade_solo}} </option>
	        @endforeach
	    </select>
	    <label for="fk_chuva">Chuva:</label>
	    <select name="fk_chuva" required>
	        <option {{(isset($chuvas) ? '' : 'selected="selected"')}}></option>
	        @foreach($chuvas as $chuva)
	        	<option value="{{$chuva->cd_chuva}}" {{($chuva->cd_chuva == $fk_chuva) ? 'selected="selected"' : ''}}>{{$chuva->nr_chuva}}</option>
	        @endforeach
	    </select>
		<input type="submit" name="Adicionar Plano Sensores" value="Gravar">
	</form>


@endsection
