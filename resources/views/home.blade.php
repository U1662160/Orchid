
@extends('layouts.app')
@section('title','Home')
@section('content')
<h3 class="help-block">Welcome to the Orchid Visitors System </h3>

<div class="panel-body">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    You are logged in!
</div>
@endsection
