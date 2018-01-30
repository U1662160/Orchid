<?php

namespace Orchid\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = [
      'title','subject','host_id','visitor_id','date','start_on','end_on','refrence','status'
    ];

    protected $dates=[
      'date',
    ];
    protected $times =[
      'start_on','end_on',
    ];
}
