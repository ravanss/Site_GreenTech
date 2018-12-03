<?php

namespace greentech\Model;

use Illuminate\Database\Eloquent\Model;

class UmidadeSolo extends Model
{
    protected $table = 'umidade_solo';
    protected $primaryKey = 'cd_umidade_solo';

    protected $fillable = ['nr_umidade_solo', 'dt_umidade_solo'];

    public function plano()
    {
        return $this->belongsToMany('greentech\Model\PlanoSensores');
    }
}
