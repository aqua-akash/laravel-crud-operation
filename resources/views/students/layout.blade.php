<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel 8 Crud Operation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
  .margin-auto{margin:auto;}
  </style>
</head>
<body>

<?php //echo app('request')->path();  ?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="javascript:void()">Crud Operation</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="@if (app('request')->path()=='students')  active @endif"><a href="{{URL::route('students')}}">Home</a></li>
        <li  class="@if (app('request')->path()=='create')  active @endif"><a href="{{URL::route('create')}}">Add New</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- <div class="header">
  <a href="javascript:void()" class="logo">Crud Operation</a>
  <div class="header-right">
    <a href="" class="active">Home</a>
    <a href="" class="">Add New</a>
  </div> 
</div> -->
  
<div class="container">
  @yield('content')
</div>

</body>
</html>