<?php

namespace Orchid\Http\Controllers;

use Illuminate\Http\Request;
use Orchid\Models\User;
use Orchid\Models\Visitor;
use Auth;


class StaffController extends Controller
{
 public function index(){
     $user = Auth::user();
     return view('user.dashboard.index',compact('user'));
 }

  public function getMyDetails(User $user){
   return view('user.dashboard.details',compact('user'));
   }
   public function getMyDepartement(User $user){
     return ($user->departement()->first());
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
      $visitors = $user->visitors()->paginate(3);
      return view('user.visitors',compact('visitors'));
    }

    public function myFutureVisits(User $user){
      $futureVisits = $user->futureVisits()->paginate(3);
      return view('user.dashboard.futureVisits',compact('futureVisits'));
    }

    public function myPastVisits(User $user){
      $pastVisits = $user->pastVisits()->paginate(3);
      return view('user.dashboard.pastVisits',compact('pastVisits'));
    }

    public function myPendingVisits(User $user){
      $pendingVisits = $user->pendingVisits()->paginate(3);
      return view('user.dashboard.pendingVisits',compact('pendingVisits'));
    }

    public function myConfirmedVisits(User $user){
      $confirmedVisits = $user->confirmedVisits()->paginate(3);
      return view('user.dashboard.confirmedVisits',compact('confirmedVisits'));
    }

    public function getAddVisitor(){
      return view('user.addVisitor');
    }

    public function postAddVisitor(Request $request)
    {
      $this->validate($request,[
          'fname'=>'required|max:50|min:3',
          'lname'=>'required|max:50|min:3',
          'email'=>'required|email',
          'mobile'=>'required',
          'position'=>'required',
          'company'=>'required',
        ]);
    $newVisitor =  Visitor::create([
       'fname'=>$request->input('fname'),
       'lname'=>$request->input('lname'),
       'email'=>$request->input('email'),
       'mobile'=>$request->input('mobile'),
       'position'=>$request->input('position'),
       'company_id'=>$request->input('company'),
     ]);
    Auth::user()->visitors()->save($newVisitor);
     return redirect()->back()->with('success','New visitor added');
    }

    public function getAddVisit(Visitor $visitor){
      return view('user.addVisit',compact('visitor'));
    }


  // ADD visit to selected visitor
    // public function postAddVisit(Request $request)
    // {
    //   $this->validate($request,[
    //       'title'=>'required|max:255|unique:visits',
    //       'subject'=>'required|max:255',
    //       // 'host'=>'required',
    //       // 'visitor'=>'required',
    //       'date'=>'required|date | after:today',
    //       'start'=> 'required',
    //       'end'=>'required| after:start',
    //   ]);
    //  Visit::create([
    //    'title'=>$request->input('title'),
    //    'subject'=>$request->input('subject'),
    //     'user_id'=>Auth::user()->id,
    //    'visitor_id'=>$request->input('visitor'),
    //    'date'=>$request->input('date'),
    //    'start_on'=>$request->input('start'),
    //    'end_on'=>$request->input('end'),
    //    'status'=>'pending',
    //    'refrence'=>uniqid('Sky'),
    //  ]);
    //
    //  return redirect()->back()->with('success','New visit added');
    // }

}#
