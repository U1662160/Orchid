<div class="card col-md-4 panel">

    <img class="card-img-top" src="../../public/store/avatar/default.png" alt="Card image cap">

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
@endif

    <div class="card-block">
      <h4 class="card-title"><a href="{{route('visit.show',$visit)}}"> {{$visit->title}} </a>





      </h4>
      <p class="card-text">{{$visit->subject}}.</p>
      <p class="card-text"><small class="text-muted">Last updated {{$visit->updated_at->diffForHumans()}}</small></p>
    </div>
    <div class="card-footer">
      <a href="{{route('visit.edit',$visit)}}">Edit Visit</a> |
      <a href="{{route('visit.destroy',$visit)}}">Delete Visit</a>
    </div>
  </div>
