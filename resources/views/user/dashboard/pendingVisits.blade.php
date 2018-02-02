@extends('user.dashboard.layout')

@section('dashboard.content')
<h3 class="help-block text-center"> Pending Visits </h3>
<div class="alert">
  {{$pendingVisits->links()}}
</div>
@foreach($pendingVisits as $visit)
<div class="disabled ">
  @include('Visit.visitBlock')
</div>


  @endforeach
@endsection
