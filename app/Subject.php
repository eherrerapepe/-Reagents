<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    protected $fillable = ['subject','detail','color','state','user_id'];

    //Relaciones entre tablas
    public function getSubjects()
    {
        return $this->hasMany('App\Reagent');
    }
}
