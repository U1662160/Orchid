@extends('user.dashboard.layout')

@section('dashboard.content')



    <div class="row help-block">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> <h3 class="help-block text-center"> New Visit </h3>
                  <h4> {{(isset($visitor))? $visitor->fname.$visitor->lname : ' '}}</h4>

                    <h4> {{(isset($visitor->company))? $visitor->company->name : ' '}}</h4>
                 </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('visit.create')}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Title</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}"  autofocus>

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
                                <input id="subject" type="textarea" class="form-control" name="subject" value="{{ old('subject') }}"  autofocus>

                                @if ($errors->has('subject'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label for="date" class="col-md-4 control-label" value="{{old('date')}}"> Date</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date" >

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
                                <input id="start" type="time" class="form-control" name="start">

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
                                <input id="end" type="time" class="form-control" name="end">

                                @if ($errors->has('end'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('end') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <input id="visitor" type="hidden" class="form-control" name="visitor" value="{{(isset($visitor))? $visitor->id: old('visitor')}}"   >

                            @if ($errors->has('visitor'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('visitor') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                              <a class="btn btn-info" href="{{route('user.visitors',Auth::user())}}"> Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


@endsection
