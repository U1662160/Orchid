@extends('layouts.app')
@section('title','My Page')
@section('content')

<div class="alert">
<h1 class="text-center help-block">My  Dashboard</h1>
</div>
<div class="row">
    <div class="col-md-3 ">
      <h3 class="help-block">Profile</h3>
      <div class="row well">
         <a href="{{route('user.details',Auth::user())}}"> Details </a>
         <hr>
         <a href="#" > Add/update Image </a>
       </div>
      <h3 class="help-block"> Visits</h3>

       <div class="row well">
         <a href="{{route('user.futureVisits',Auth::user())}}">  Upcoming Visits  </a>
          <hr>
            <a href="{{route('user.pastVisits',Auth::user())}}">  passed Visits  </a>
           <hr>
         <a href="{{route('user.pendingVisits',Auth::user())}}">  Pending Visits  </a>
         <hr>
         <a href="{{route('user.confirmedVisits',Auth::user())}}">  Confirmed Visits  </a>
         <hr>
         <a href="{{route('user.visits',Auth::user())}}">  All Visits  </a>
       </div>

      <h3 class="help-block"> Visitors</h3>
       <div class="row well">
         <a href="{{ route('user.visitors',Auth::user())}}">  Visitors </a>
          <hr>
         <a href="{{route('user.addVisitor')}}"> Add New Visitor </a>
       </div>
    </div>
    <div class="col-md-9">
     @yield('dashboard.content')
    </div>
     </div>
    </div>

</div>




@endsection
