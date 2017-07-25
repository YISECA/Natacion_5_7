<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
   protected $table = 'NATACION_5-7_2017';
   protected $primaryKey = 'id';
   protected $fillable = ['localidad','horarios'];

  public function localidades()
   {
       return $this->belongsTo('App\Localidad','localidad');
   }
   public function horarioss()
   {
       return $this->belongsTo('App\Horario','horario');
   }

}



