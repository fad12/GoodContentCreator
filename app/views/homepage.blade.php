@extends('layouts.master')
@section('content')
<div class="row">
<div class="col-md-4">

	<a href="http://www.facebook.com/sharer/sharer.php?u={{ URL::to('/'); }}">Share on Facebook</a>
  <br>
	<a href="http://www.facebook.com/sharer/sharer.php?u={{ URL::to('/'); }}">Share on Facebook</a>

</div>
  <div class="col-md-2">
   <form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
</div>
<div class="col-md-4"></div>
</div>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
<table class="table">
 <tr>
 	<td></td>
 	<td>الترتيب</td>
 	<td>الإسم</td>
 	<td>النقاط</td>
 </tr>
 <tr>
 	<td><img src="https://graph.facebook.com/100001387460320/picture?width=50&amp;height=50"></td>
 	<td>1</td>
 	<td>وليد حمدان</td>
 	<td>1850</td>
 </tr>
 <tr>
 	<td><img src="https://graph.facebook.com/1010101231/picture?width=50&amp;height=50"></td>
 	<td>2</td>
 	<td>فهد الكثيري</td>
 	<td>1810</td>
 </tr>
 <tr>
 	<td><img src="https://graph.facebook.com/4/picture?width=50&amp;height=50"></td>
 	<td>3</td>
 	<td>سالم الغامدي</td>
 	<td>1780</td>
 </tr>
 <tr>
 	<td><img src="https://graph.facebook.com/100001347460320/picture?width=50&amp;height=50"></td>
 	<td>4</td>
 	<td>منال سالم</td>
 	<td>1750</td>
 </tr>
 <tr>
 	<td><img src="https://graph.facebook.com/55/picture?width=50&amp;height=50"></td>
 	<td>5</td>
 	<td>سالم أحمد</td>
 	<td>1730</td>
 </tr>
</table>
</div>
</div>
@stop

