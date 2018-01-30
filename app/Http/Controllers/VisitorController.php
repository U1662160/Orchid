<?php

namespace Orchid\Http\Controllers;

use Illuminate\Http\Request;

use Orchid\Models\Visitor;


class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $visitors = visitor::orderby('fname')->paginate(6);
      return view('visitor.all',compact('visitors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('visitor.create');
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
          'fname'=>'required|max:50|min:3',
          'lname'=>'required|max:50|min:3',
          'email'=>'required|email',
          'mobile'=>'required',
          'position'=>'required',
          'company'=>'required',
        ]);
     visitor::create([
       'fname'=>$request->input('fname'),
       'lname'=>$request->input('lname'),
       'email'=>$request->input('email'),
       'mobile'=>$request->input('mobile'),
       'position'=>$request->input('position'),
       'company_id'=>$request->input('company'),
     ]);
     return redirect()->back()->with('success','New visitor added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
