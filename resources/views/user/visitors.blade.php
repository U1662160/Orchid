@extends('user.dashboard.layout')

@section('dashboard.content')

<div class="alert">

  {{$visitors->links()}}
</div>

@foreach($visitors as $visitor)

@include('Visitor.visitorBlock')
@endforeach

@endsection
