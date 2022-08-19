<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class soal extends Model
{
    protected $fillable = [
      'id_soal','no_soal','soal','a','b','c','d','created_at'
  ];
}
