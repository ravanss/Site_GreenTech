<?php

namespace greentech\Http\Controllers;

use greentech\Model\Chuva;
use Illuminate\Http\Request;

class ChuvaController extends Controller
{
    public function index()
    {
        $chuvas = Chuva::all();
        $vars = [
            'chuvas' => $chuvas,
        ];
        return view('chuva.index', $vars);
    }

    public function form($id = null)
    {
        if (is_null($id)) {
            $vars = [
                'nr_chuva' => null,
                'dt_chuva' => null,
                'action' => '/chuva/adiciona',
            ];
        } else {
            $chuva = Chuva::find($id);
            $vars = [
                'nr_chuva' => $chuva->nr_chuva,
                'dt_chuva' => $chuva->dt_chuva,
                'action' => '/chuva/alterar/' . $chuva->cd_chuva,
            ];
        }
        return view('chuva.form', $vars);
    }
    public function adiciona(Request $request)
    {
        Chuva::create($request->all());
        return redirect('/chuva');
    }
    public function alterar(Request $request, $id)
    {
        Chuva::find($id)->update($request->all());
        return redirect('/chuva');
    }

    public function excluir($id)
    {
        Chuva::find($id)->delete();
        return redirect('/chuva');
    }
}
