@extends('layouts.app')
@section('title','my Visits')
@section('content')

<div class="alert">

  {{$visitors->links()}}
</div>

@foreach($visitors as $visitor)

@include('Visitor.visitorBlock')
@endforeach

@endsection
