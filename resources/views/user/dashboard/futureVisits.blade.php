@extends('user.dashboard.layout')

@section('dashboard.content')
<h3 class="help-block text-center"> Upcoming Visits </h3>
<div class="alert">
  {{$futureVisits->links()}}
</div>
@foreach($futureVisits as $visit)
@include('Visit.visitBlock')

@endforeach
@endsection
