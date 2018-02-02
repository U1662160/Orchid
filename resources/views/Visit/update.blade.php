@extends('layouts.app')
@section('title',' New Invitation')
@section('content')
@if(!$visit){
<h3 class="help-block"> Cannot find this visit <small> <a href="{{view('home')}}"> Home </a> </small> </h3>
}
@else
    <div class="row help-block">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> <h3 class="help-block"> Update  Visit</h3> </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('visit.edit',$visit) }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Title</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ $visit->title ? :old('title') }}" >

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

                        <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                            <label for="subject" class="col-md-4 control-label">Subject</label>

                            <div class="col-md-6">
                                <input id="subject" type="textarea" class="form-control" name="subject" value="{{ ($visit->subject)?: old('subject') }}"  autofocus>

                                @if ($errors->has('subject'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('host') ? ' has-error' : '' }}">
                            <label for="host" class="col-md-4 control-label">Host</label>

                            <div class="col-md-6">
                                <input id="host" type="text" class="form-control" name="host" value="{{ ($visit->host_id)?:old('host') }}" readonly >

                                @if ($errors->has('host'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('host') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('visitor') ? ' has-error' : '' }}">
                            <label for="visitor" class="col-md-4 control-label">Visitor</label>

                            <div class="col-md-6">
                                <input id="visitor" type="text" class="form-control" name="visitor" value="{{ ($visit->visitor_id)?:old('visitor') }}" >

                                @if ($errors->has('visitor'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('visitor') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label for="date" class="col-md-4 control-label" value="{{old('date')}}"> Date</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date" value="{{($visit->date->format('Y-m-d'))?:old('date')}}">

                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('start') ? ' has-error' : '' }}">
                            <label for="start" class="col-md-4 control-label" value="{{old('start')}}"> Start</label>

                            <div class="col-md-6">
                                <input id="start" type="time" class="form-control" name="start" value="{{$visit->start_on}}">

                                @if ($errors->has('start'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('start') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('end') ? ' has-error' : '' }}">
                            <label for="end" class="col-md-4 control-label" value="{{old('end')}}"> End</label>

                            <div class="col-md-6">
                                <input id="end" type="time" class="form-control" name="end" value="{{$visit->end_on}}">

                                @if ($errors->has('end'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('end') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Visit
                                </button>

                              </div>
                              <a href="{{route('user.visits',Auth::user())}}"> Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif

@endsection
