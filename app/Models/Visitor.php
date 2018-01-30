<?php

namespace Orchid\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable=[
      'fname','lname','email','mobile','position','avatar','company_id',
    ];

    

}
