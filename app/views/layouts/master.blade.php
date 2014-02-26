<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Good Contert Creator</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{ URL::to('/'); }}/style/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <div class="container-fluid">
  <div class="row">

<div class="col-xs-12col-md-12">

  	  <nav class="navbar navbar-default" role="navigation"> <div class="container-fluid"> <!-- Brand and toggle get grouped for better mobile display --> <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

 

      <a class="navbar-brand" href="#">Good Content Creator</a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <button type="button" class="btn btn-default signup navbar-left" data-toggle="modal" data-target="#signup">أنشئ حساب</button>
  <button type="button" class="btn btn-default login navbar-left" data-toggle="modal" data-target="#login">تسجيل الدخول</button>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">

<button type="button" class="btn btn-default">
  <span class="glyphicon glyphicon-align-justify"></span>
</button>

          </a>
          <ul class="dropdown-menu">
          	<li><a href="#">ترتيب المشتركين</a></li>
          	<li><a href="#">طريقة الإشتراك</a></li>
            <li class="divider"></li>
            <li><a href="#">الشروط و الاحكام</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
 
  </div><!-- /.container-fluid -->
</nav><!-- /.end navbar -->
  
   @yield('content')

  </div>
   <div class="panel panel-default">
  <div class="panel-body">
    Sawas Group
  </div>
</div>
  </div>
  </div>
</div>

<!-- ================================================
        TO DO IMPROVE STYLE AND JS EXPERIENCE
     ================================================ -->
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="signup" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <br>
        <h4 class="modal-title" id="myModalLabel">نموذج التسجيل</h4>
      </div>
      <div class="modal-body">


{{ Form::open(array('action' => 'HomeController@create')) }}
<div class="form-group reg">
    <div class="col-sm-8">
<input name="firstname" class="form-control input-lg" type="text" placeholder="">
    </div>
        <label for="inputEmail3" class="col-sm-3 control-label">الاسم الأول</label>
        <div style="clear:both"></div>
  </div>
  <div class="form-group reg">
    <div class="col-sm-8">
<input name="lastname" class="form-control input-lg" type="text" placeholder="">
    </div>
        <label for="inputEmail3" class="col-sm-3 control-label">الاسم الاخير</label>
        <div style="clear:both"></div>
  </div>

  <div class="form-group reg">
    <div class="col-sm-8">
    <input name="email" class="form-control input-lg" type="text" placeholder="">
    </div>
        <label for="inputEmail3" class="col-sm-3 control-label">البريد الإلكتروني</label>
        <div style="clear:both"></div>
  </div>

  <div class="form-group reg">
    <div class="col-sm-8">
     <input name="birthday" class="form-control datepicker0" type="date" placeholder="">
    </div>
        <label for="inputEmail3" class="col-sm-3  control-label">تاريخ الميلاد</label>
        <div style="clear:both"></div>
  </div>

  <div class="form-group reg">
    <div class="col-sm-8">
      <input name="gender" class="form-control input-lg" type="text" placeholder="">
    </div>
        <label for="inputEmail3" class="col-sm-3 control-label">الجنس</label>
        <div style="clear:both"></div>
  </div>

  <div class="form-group reg">
    <div class="col-sm-8">
      <input name="password" class="form-control input-lg" type="text" placeholder="">
    </div>
        <label for="inputEmail3" class="col-sm-3 control-label">كلمة المرور</label>
        <div style="clear:both"></div>
  </div>

 <div class="modal-footer">
         {{Form::submit('تسجيل',array('class' => 'btn btn-primary btn-lg'))}}
         <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">إغلاق</button>

      </div>
<div style="clear:both"></div>
{{ Form::close() }}
     </div>
     </div>
</div>
  </div>



  

  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <br>
        <h4 class="modal-title" id="myModalLabel">تسجيل الدخول</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" role="form">
  <div class="form-group">
    <div class="col-sm-9">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
        <label for="inputEmail3" class="col-sm-3 control-label">البريد الالكتروني</label>
  </div>
  <div class="form-group">
    <div class="col-sm-9">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
        <label for="inputPassword3" class="col-sm-3 control-label">كلمة المرور</label>

  </div>
 

      </div>
      <div class="modal-footer">
       <button type="submit" class="btn btn-default">Sign in</button>
      </div>
      </form>
    </div>
  </div>
</div>

</div>
<script>
$(function(){
  $('.datepicker').datepicker()
  })
</script>
</body>
</html>












