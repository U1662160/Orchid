@extends('layouts.app')
@section('title','All Visitors')
@section('content')
 @if(!$visitors->count())
 <p class="help-block"> No visitors to Show </p>
 @endif
 <div class="row">
@foreach($visitors as $visitor)
@include('visitor.visitorBlock')
@endforeach

 </div>
@endsection
