@extends('layouts.app')

@section('content')
<br>
<div class="">
  <p><strong>Veja algumas das funções do nosso site.</strong></p>
</div>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     <ul>
                        <li>
                            <a href="/chuva"> Gerenciar Chuva</a>
                        </li>
                        <li>
                            <a href="/umidadeSolo"> Gerenciar Umidade do Solo</a>
                        </li>
                         <li>
                            <a href="/planos"> Gerenciar Planos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
