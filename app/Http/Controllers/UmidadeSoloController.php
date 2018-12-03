<?php

namespace greentech\Http\Controllers;

use greentech\Model\UmidadeSolo;
use Illuminate\Http\Request;

class UmidadeSoloController extends Controller
{
    public function index()
    {
        $umidadeSolos = UmidadeSolo::all();
        $vars = [
            'umidadeSolos' => $umidadeSolos,
        ];
        return view('umidadeSolo.index', $vars);
    }

    public function form($id = null)
    {
        if (is_null($id)) {
            $vars = [
                'nr_umidade_solo' => null,
                'dt_umidade_solo' => null,
                'action' => '/umidadeSolo/adiciona',
            ];
        } else {
            $umidadeSolo = UmidadeSolo::find($id);
            $vars = [
                'nr_umidade_solo' => $umidadeSolo->nr_umidade_solo,
                'dt_umidade_solo' => $umidadeSolo->dt_umidade_solo,
                'action' => '/umidadeSolo/alterar/' . $umidadeSolo->cd_umidade_solo,
            ];
        }
        return view('umidadeSolo.form', $vars);
    }
    public function adiciona(Request $request)
    {
        UmidadeSolo::create($request->all());
        return redirect('/umidadeSolo');
    }
    public function alterar(Request $request, $id)
    {
        UmidadeSolo::find($id)->update($request->all());
        return redirect('/umidadeSolo');
    }

    public function excluir($id)
    {
        UmidadeSolo::find($id)->delete();
        return redirect('/umidadeSolo');
    }
}
