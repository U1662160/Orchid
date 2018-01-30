@extends('layouts.app')
@section('title',' Visit Details')
@section('content')
 @if(isset($visit))
@include('Visit.visitBlock')
 @endif
@endsection
