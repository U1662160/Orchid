@extends('user.dashboard.layout')

@section('dashboard.content')

<div class="alert">

  {{$visits->links()}}
</div>

@foreach($visits as $visit)

@include('Visit.visitBlock')
@endforeach

@endsection
