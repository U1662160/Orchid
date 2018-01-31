@extends('layouts.app')
@section('title','my Visits')
@section('content')

<div class="alert">

  {{$visits->links()}}
</div>

@foreach($visits as $visit)

@include('Visit.visitBlock')
@endforeach

@endsection
