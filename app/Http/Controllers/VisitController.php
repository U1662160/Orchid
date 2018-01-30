<?php

namespace Orchid\Http\Controllers;

use Illuminate\Http\Request;
use Orchid\Models\Visit;

class VisitController extends Controller
{

  public function __construct(){
    $this->middleware(['auth',]);
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $visits = visit::orderby('date','desc')->paginate(6);
      return view('visit.all',compact('visits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return  view('visit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
          'title'=>'required|max:255|unique:visits',
          'subject'=>'required|max:255',
          'host'=>'required',
          'visitor'=>'required',
          'date'=>'required|date | after:today',
          'start'=> 'required',
          'end'=>'required| after:start',
      ]);
     visit::create([
       'title'=>$request->input('title'),
       'subject'=>$request->input('subject'),
       'host_id'=>$request->input('host'),
       'visitor_id'=>$request->input('visitor'),
       'date'=>$request->input('date'),
       'start_on'=>$request->input('start'),
       'end_on'=>$request->input('end'),
       'status'=>'Waiting visitor`s confirmation',
       'refrence'=>uniqid('Sky'),
     ]);
     return redirect()->back()->with('success','New visit added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Visit $visit)
    {
        return view('visit.show',compact('visit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Visit $visit)
    {
      return view('Visit.update',compact('visit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visit $visit)
    {
      $this->validate($request,[
          'title'=>'required|max:255|unique:visits',
          'subject'=>'required|max:255',
          'host'=>'required',
          'visitor'=>'required',
          'date'=>'required|date | after:today',
          'start'=> 'required',
          'end'=>'required| after:start',
      ]);
     $visit->update([
       'title'=>$request->input('title'),
       'subject'=>$request->input('subject'),
       'host_id'=>$request->input('host'),
       'visitor_id'=>$request->input('visitor'),
       'date'=>$request->input('date'),
       'start_on'=>$request->input('start'),
       'end_on'=>$request->input('end'),
     ]);
     return redirect()->back()->with('success',' Visit details succssfully updated');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visit $visit)
    {
      $visit->delete();
    return view('home')->with('warn', ' You have deleted this visit ');
    }
}
