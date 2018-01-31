@extends('layouts.app')
@section('title','My Page')
@section('content')

<div class="alert">
<h1>My page </h1>
</div>
<div class="row">
<div class="col-md-3 ">
 <div class="row well">
   <a href="#"> My profile </a>
   <hr>
   <a href="#" > Add/update Image </a>
 </div>
<h3 class="help-block"> Visits</h3>

 <div class="row well">
 <a href="#"> My Upcoming Visits  </a>
 <hr>
 <a href="#"> My passed Visits  </a>
<hr>
 <a href="#"> My Pending Visits  </a>
 </div>

<h3 class="help-block"> Visitors</h3>

 <div class="row well">
 <a href="#"> My Visitors </a>
 </div>
</div>
<div class="col-md-9">

 <div class="col-md-6  panel-info">
   <div class="panel-heading">
     Heading
   </div>
   <div class="panel-body">
     panel body
   </div>
 </div>


</div>

</div>


@endsection
