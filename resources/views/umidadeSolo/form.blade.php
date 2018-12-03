@extends('layouts.app')

@section('content')
	<form method="POST" action="{{ $action }}">
		{{ csrf_field() }}
		<label for="nr_umidade_solo">Número:</label>
		<input type="number" name="nr_umidade_solo"  value="{{ $nr_umidade_solo }}">
		<label for="dt_umidade_solo">Data Coleta:</label>
		<input type="date" name="dt_umidade_solo"  value="{{ $dt_umidade_solo }}">
		<input type="submit" name="Adicionar Umidade Solo" value="Gravar">
	</form>


@endsection
