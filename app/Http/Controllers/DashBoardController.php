<?php

namespace Orchid\Http\Controllers;

use Illuminate\Http\Request;
use Orchid\Models\User;
use Auth;


class DashBoardController extends Controller
{
    public function index(){
      $user = Auth::user();
      return view('user.dashboard.index',compact('user'));
    }

  
}
