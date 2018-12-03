<?php

namespace greentech\Http\Controllers;

use greentech\Model\PlanoSensores;
use greentech\Model\UmidadeSolo;
use greentech\Model\Chuva;
use greentech\Model\UsuarioPlano;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlanoSensoresController extends Controller
{
    public function index()
    {
        //$planoSensores = PlanoSensores::all();
        $planoSensores = DB::table('plano_sensores')
            ->leftJoin('usuario_plano', 
                'plano_sensores.cd_plano_sensores', '=', 'usuario_plano.fk_plano')
            ->get();
            //UsuarioPlano::where('fk_usuario', auth()->user()->id);

        $vars = [
            'planoSensores' => $planoSensores,
        ];
        return view('plano.index', $vars);
    }

    public function form($id = null)
    {
        $umidadeSolos = UmidadeSolo::all();
        $chuvas = Chuva::all();
        if (is_null($id)) {
            $vars = [
                'nm_plano_sensores' => null,
                'vl_plano_sensores' => null,
                'fk_umidade_solo' => null,
                'fk_chuva' => null,
                'umidadeSolos' => $umidadeSolos,
                'chuvas' => $chuvas,
                'action' => '/admin/planos/adiciona',
            ];
        } else {
            $plano_sensores = PlanoSensores::find($id);
            $vars = [
                'nm_plano_sensores' => $plano_sensores->nm_plano_sensores,
                'vl_plano_sensores' => $plano_sensores->vl_plano_sensores,
                'fk_umidade_solo' => $plano_sensores->fk_umidade_solo,
                'fk_chuva'=> $plano_sensores->fk_chuva,
                'umidadeSolos' => $umidadeSolos,
                'chuvas' => $chuvas,
                'action' => '/admin/planos/alterar/' . $plano_sensores->cd_plano_sensores,
            ];
        }
        return view('plano.form', $vars);
    }
    public function adiciona(Request $request)
    {
        PlanoSensores::create($request->all());
        return redirect('/planos');
    }
    public function alterar(Request $request, $id)
    {
        PlanoSensores::find($id)->update($request->all());
        return redirect('/planos');
    }

    public function excluir($id)
    {
        PlanoSensores::find($id)->delete();
        return redirect('/planos');
    }
    public function assinar($id)
    {
        UsuarioPlano::create([
            'fk_usuario' => auth()->user()->id,
            'fk_plano' => $id,
        ]);
         
        return redirect('/planos');
    }

    public function cancelarAssinatura($id)
    {
        UsuarioPlano::where([
            ['fk_usuario', '=', auth()->user()->id],
            ['fk_plano', '=', $id]
        ])->delete();
        return redirect('/planos');
    }
}
