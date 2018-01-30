@extends('layouts.app')
@section('title',' All Visits')
@section('content')
 @if(!$visits->count())
 <h3 class="help-block"> No visits to show </h3>
 @else
 <div class="row">

 @foreach($visits as $visit)
@include('Visit.visitBlock')
@endforeach

</div>
 @endif
@endsection
