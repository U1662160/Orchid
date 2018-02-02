<?php

namespace Orchid\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Models\User;

class Visitor extends Model
{
    protected $fillable=[
      'fname','lname','email','mobile','position','avatar','company_id',
    ];

    public function hosts(){
      return $this->belongsToMany(Orchid\Models\User::class,'users_visitors');
    }
 public function company(){
   return $this->belongsTo(\Orchid\Models\Company::class);
 }
}
