<?php

namespace greentech\Model;

use Illuminate\Database\Eloquent\Model;

class UsuarioPlano extends Model
{
    protected $table = 'usuario_plano';
    //protected $primaryKey = 'cd_usuario_plano';

    protected $fillable = ['fk_usuario', 'fk_plano'];

    public function user()
    {
        return $this->hasOne('greentech\User');
    }

    public function plano()
    {
        return $this->hasOne('greentech\Model\PlanoSensores');
    }
}
