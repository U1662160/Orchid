@extends('user.dashboard.layout')

@section('dashboard.content')
<h3 class="help-block text-center"> confirmed Visits </h3>
<div class="alert">
  {{$confirmedVisits->links()}}
</div>
@foreach($confirmedVisits as $visit)
<div class="disabled ">
  @include('Visit.visitBlock')
</div>


  @endforeach
@endsection
