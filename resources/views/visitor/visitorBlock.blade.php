<div class="col-md-4 panel panel-default">
  <div class="card">
    <img src="../../public/store/avatar/{{($visitor->avatar)? :'default'}}.jpg" alt="visitor" style="width:100%">
    <div class="panel-title">
      <h2 class="help-block">{{$visitor->fname}} {{$visitor->lname}}
        <small class="title"> {{$visitor->position}} </small>
      </h2>

</div>
<div>
  <table class="table table-hover table-responsive ">
    <tr>
      <td >Company:</td>
      <td>{{$visitor->company_id}}</td>
    </tr>
    <tr>
    <tr>
      <td>Email:</td>
      <td>{{$visitor->email}}</td>
    </tr>
    <tr>
      <td>Mobile</td>
      <td>{{$visitor->mobile}}</td>
    </tr>
  </table>
    <div class="panel-footer row">
<a href="#" class="btn btn-info pull-right ">More Details</a>
<a href="#" class="btn btn-primary ">Send Visit invitation</a>
    </div>
  </div>
</div>  </div>
