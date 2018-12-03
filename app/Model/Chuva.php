<?php

namespace greentech\Model;

use Illuminate\Database\Eloquent\Model;

class Chuva extends Model
{
    protected $table = 'chuva';
    protected $primaryKey = 'cd_chuva';

    protected $fillable = ['nr_chuva', 'dt_chuva'];

    public function plano()
    {
        return $this->belongsToMany('greentech\Model\PlanoSensores');
    }
}
