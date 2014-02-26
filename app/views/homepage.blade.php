@extends('layouts.master')
@section('content')
<!-- <div class="row">
<div class="col-md-4">

  <a href="http://www.facebook.com/sharer/sharer.php?u={{ URL::to('/'); }}">Share on Facebook</a>
  <br>
  <a href="http://www.facebook.com/sharer/sharer.php?u={{ URL::to('/'); }}">Share on Facebook</a>

</div>

<div class="col-md-3"></div>
</div> -->
<div class="jumbotron">
  <h1>إربح بدون سحب!</h1>
  <p>الأن إشترك وربح جوائز عديدة بدون</p>
  <p><a class="btn btn-primary btn-lg" role="button">المزيد</a></p>
</div>
<table class="table homePageTable">
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

@stop

