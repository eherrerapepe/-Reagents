<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reagent extends Model
{
    protected $table = 'reagents';
    protected $fillable = ['name_reagents','state_reagents','subject_id'];

    //Relación con la tabla subjects
    public function getReagents()
    {
        return $this->belongsTo('App\Subject');
    }
}
