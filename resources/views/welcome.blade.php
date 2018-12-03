<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <style>
          body{
            background-image: url(fundo1.jpg);
            background-attachment: fixed;
            background-size: 100%;
            background-repeat: no-repeat;
            background-color: rgb( 0, 170, 125);
            padding-top: 160px;
          }

          .top-right-links{
            font: Arial;
            font: color rgb(255, 255, 255);
            color: rgb(255, 255, 255);
          }

          .bem-vindo{
            font: Arial;
            color: rgb(150, 150, 150);
            font-style: normal;
            font-weight: 600;
            font-stretch: normal;
          }

          .texto-welcome{
              color: rgb(255, 255, 255);
          }


        </style>
    </head>
    <body>
    <header>
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top justify-content-end ">
          <a class="navbar-brand" href="/home"><strong>GreenTech</strong></h2>
              <div class="container">
                  @if (Route::has('login'))
                      <div class="">
                          @auth
                              <a href="{{ url('/home') }}">Home</a>
                          @else
                              <a href="{{ route('login') }}">Login</a>

                              @if (Route::has('register'))
                                  <a href="{{ route('register') }}">Register</a>
                              @endif
                          @endauth
                      </div>
                  @endif
                </div>
          </nav>
      </header>
      <div class="container">
        <div class="row">
          <div class="bem-vindo">
            <div class="col-sm-12">
              <h3><strong>Seja bem vindo a GreenTech.</strong></h3>
            </div>
          </div>
        </div>
      </br>
        <div class="texto-welcome">
          <div class="row">
            <div class="col-sm-4">
              <p><strong>Utilizando o Iot no desenvolvimento de pantações e hortas domenticas.</strong></p>
            </div>
          </div>
          <br>
          <div class="texto-GreenTech">
            <div class="row">
              <div class="col-sm-8">
                 <p>A GreenTech é uma organização focada no desenvolivmento de soluções tecnologica de pequeno e medio porter.
                 Utilizando a IOT (Internet of things) com a utilização  de placas microcontroladoras é sensores que monitorar o ambiente em
                 conjuto a novas tecnologias de armazenamento de dados que proposiona um analise do ambiente.
                 Com os novo dados criamos aplicativos que auxiliar no controle e monitoramento trazendo informações importante as clientes</strong>.</p>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-sm-4">
              <p><strong>Registre-se em nosso site é conheça nossos planos é funcionalidades . </strong></p>
            </div>
          </div>
        </div>
      </div>
    </body>
</html>
