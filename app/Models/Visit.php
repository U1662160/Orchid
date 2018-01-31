<?php

namespace Orchid\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = [
      'title','subject','user_id','visitor_id','date','start_on','end_on','refrence','status'
    ];

    protected $dates=[
      'date',
    ];
    protected $times =[
      'start_on','end_on',
    ];

  public function host(){
    return $this->belongsTo(Orchid\Models\User::class);
  }
}#
