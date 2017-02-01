<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    protected $fillable = ['subject','detail','color','state','user_id'];

    //Relacion con la tabla de reactivos
    public function getReagents()
    {
        return $this->hasMany('App\Reagent');
    }
    //Relacion con la tabla user
    public function getUser()
    {
        $this->belongsTo('App\User');
    }
}
