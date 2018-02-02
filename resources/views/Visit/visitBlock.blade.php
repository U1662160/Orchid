<div class="card col-md-4 panel">

    <img class="card-img-top img-circle" src="../../../public/store/avatar/{{$visit->visitor->avatar}}.JPG" alt="Card image cap">


<!-- src= "{{$_SERVER['PHP_SELF']}}/Orchid/public/store/avatar/default.png"
src="http:\\localhost\Orchid\public\store\avatar\default.png"
-->

@if($visit->status == 'pending')
<div class="card-heading">
  <span class="label label-warning" > {{$visit->status}}</span>

</div>
@elseif($visit->status == 'confirmed')
<div class="card-heading">
  <span class="label label-info" > {{$visit->status}} </span>
</div>
@elseif($visit->status == 'done')
<div class="card-heading">
  <span class="label label-success" > {{$visit->status}} </span>
</div>
@elseif($visit->status == 'passed')
<div class="card-heading">
  <span class="label label-danger" > {{$visit->status}} </span>
</div>
@endif

    <div class="card-block well">
      <h4 class="card-title"><a href="{{route('visit.show',$visit)}}"> {{$visit->title}} </a>
   </h4>
   <table class="table table-condensed table-hover table-responsive">
     <tr>
       <th> About :  </th>
       <td> <p class="card-text">{{$visit->subject}}.</p></td>
     </tr>
     <tr>
       <th> Guest :  </th>
       <td> <p class="card-text">{{$visit->visitor->fname}}.{{$visit->visitor->lname}}.</p></td>
     </tr>
     <tr>
       <th> Date  :  </th>
       <td> <p class="card-text">{{$visit->date->format('d.M.Y')}}.</p>
<small>{{ $visit->date->diffForHumans()}}</small>
       </td>
     </tr>
   </table>


      <p class="card-text"><small class="text-muted">Last updated {{$visit->updated_at->diffForHumans()}}</small></p>

      @if($visit->status != 'passed')
          <div class="card-footer">
            <a href="{{route('visit.edit',$visit)}}">Edit Visit</a> |
            <a href="{{route('visit.destroy',$visit)}}">Delete Visit</a>
          </div>
          @else
          <a href="{{route('visit.show',$visit)}}">View Visit</a> |
          <a href="#">Copy Visit</a>
      @endif
    </div>

  </div>
