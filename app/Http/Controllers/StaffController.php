<?php

namespace Orchid\Http\Controllers;

use Illuminate\Http\Request;
use Orchid\Models\User;
use Auth;


class StaffController extends Controller
{
 public function index(){
   $user = Auth::user();
   return view('user.page',compact('user'));
 }

   public function getPermissions(User $user){
     $permissions = $user->permissions->get();
     return view ('staff.permissions');
   }

public function MyVisits( User $user){
  $visits = $user->visits()->paginate(6);
  return view('user.myVisits',compact('visits'))->with('user',$user);
}

public function myVisitors(User $user){
  $visitors = $user->visitors()->paginate(6);
  return view('user.visitors',compact('visitors'));
}

}#
