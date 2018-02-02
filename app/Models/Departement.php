<?php

namespace Orchid\Models;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
  protected $fillable=[
    'name',
  ];

  public function user(){
    return $this->hasMany(Orchid\Models\User::class);
  }
}
