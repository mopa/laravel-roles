<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //
    protected $guarded = [];

    public function departamentos()
    {
      return $this->belongsToMany(Departamento::class);
    }

}
