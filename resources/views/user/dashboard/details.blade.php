@extends('user.dashboard.layout')

@section('dashboard.content')

<br><br>
<div class="container-fluid well span6">
	<div class="row-fluid">
        <div class="span2" >
		    <img src="https://secure.gravatar.com/avatar/{{md5($user->email)}}?s=140&r=g&d=mm" class="img">
        </div>

        <div class="span8">
            <h3>{{$user->name}}</h3>
            <h6>Email: {{$user->email}}</h6>
            <h6>Sky Id : {{$user->sky_id}}</h6>
            <h6>Departement : {{$user->departement->name}}</h6>
            <h6><a href="#">More... </a></h6>
        </div>

        <!-- <div class="span2">
            <div class="btn-group">
                <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                    Action
                    <span class="icon-cog icon-white"></span><span class="caret"></span>
                </a>

								<ul class="dropdown-menu">
                    <li><a href="#"><span class="icon-wrench"></span> Modify</a></li>
                    <li><a href="#"><span class="icon-trash"></span> Delete</a></li>
                </ul>

            </div>
        </div> -->
</div>
</div>
@endsection
