<?php

namespace Orchid\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class StaffController extends Controller
{
   public function getPermissions(User $user){
     $permissions = $user->permissions->get();
     return view ('staff.permissions');
   }
}
