@extends('user.dashboard.layout')

@section('dashboard.content')
<h3 class="help-block text-center"> Upcoming Visits </h3>
<div class="alert">
  {{$pastVisits->links()}}
</div>
@foreach($pastVisits as $visit)
<div class="disabled ">
  @include('Visit.visitBlock')
</div>


  @endforeach
@endsection
