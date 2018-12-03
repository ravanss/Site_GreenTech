@extends('layouts.app')

@section('content')
	<form method="POST" action="{{ $action }}">
		{{ csrf_field() }}
		<label for="nr_chuva">Número:</label>
		<input type="number" name="nr_chuva"  value="{{ $nr_chuva }}">
		<label for="dt_chuva">Data Coleta:</label>
		<input type="date" name="dt_chuva"  value="{{ $dt_chuva }}">
		<input type="submit" name="Adicionar chuva" value="Gravar">
	</form>


@endsection
