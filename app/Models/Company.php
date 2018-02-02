<?php

namespace Orchid\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function visitor(){
      return $this->hasMany(\Orchid\Models\Visitor::class);
    }
}
