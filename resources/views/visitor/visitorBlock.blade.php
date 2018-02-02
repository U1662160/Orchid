<hr>
<div class=" row col-md-offset-1 ">


<div class="media">
  <div class="media-left">
<a href="#">
    <img src="../../../public/store/avatar/{{($visitor->avatar)? :'default'}}.jpg" class="media-object img-circle pull-right" style="width:150px; height:150px;"  alt="visitor-image">
    <br>
    <h4 <strong>{{$visitor->fname}} {{$visitor->lname}} </strong></h4>
</a>
  </div>

  <div class="media-body ">

    <div class="col-md-9 col-md-offset-1">
      <table class="table table-hover table-responsive ">
        <tr>
          <td class="">Company:</td>
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
      <div class="row">

        <a href="#" class="btn btn-info pull-right ">More Details</a>
        <a href="{{route('user.addVisit',$visitor)}}" class="btn btn-primary ">Send Visit invitation</a>


        </div>
  </div>

  </div>
</div>
</div>
