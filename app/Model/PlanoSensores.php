<?php

namespace greentech\Model;

use Illuminate\Database\Eloquent\Model;

class PlanoSensores extends Model
{
    protected $table = 'plano_sensores';
    protected $primaryKey = 'cd_plano_sensores';
    public $timestamps = false;

    protected $fillable = ['nm_plano_sensores', 'vl_plano_sensores', 'fk_umidade_solo', 'fk_chuva'];

    public function chuva()
    {
        return $this->hasMany('greentech\Model\Chuva');
    }

    public function umidadeSolo()
    {
        return $this->hasMany('greentech\Model\UmidadeSolo');
    }

    public function usuarioPlano()
    {
        return $this->belongsToMany('greentech\Model\UsuarioPlano');
    }
}
