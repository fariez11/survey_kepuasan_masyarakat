<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surveior extends Model
{
      protected $fillable = [
      'nik','tgl','tahun','jam','gender','age','pen','pek','jen','created_at'
  ];
}
