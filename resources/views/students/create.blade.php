@extends('students.layout')
@section('content')
<div class="row margin-auto">
    <div class="col-sm-2"></div>

    <div class="col-sm-8">
    <h2 class="text-center">{{$formName}}</h2>
    <br>
    @if($errors->any())
    <div class="alert alert-danger">
      <ul>
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
      </ul>
    </div>
    @endif
    @if(Session::has('message'))
    <div class="alert alert-success">
      {{session('message')}}
    </div>
    @endif
        <form action="@if(isset($id)) {{route('edituser', ['id'=> $id])}} @else {{route('create')}} @endif" method="POST">
          @csrf
            <div class="form-group">
                <label for="studname">Student Name</label>
                <input type="text" class="form-control" id="studname" name="studname" placeholder="Student Name" value="@if(isset($userdata)) {{$userdata->studname}} @else {{old('studname')}} @endif">
            </div>
            <div class="form-group">
              <label for="course">Course</label>
                <input type="text" class="form-control" id="course" name="course" placeholder="Course" value="@if(isset($userdata)) {{$userdata->course}} @else {{old('course')}} @endif">
            </div>
            <div class="form-group">
                <label for="fees">Fees</label>
                <input type="text" class="form-control" id="fees" name="fees" placeholder="Fees" value="@if(isset($userdata)) {{$userdata->fees}} @else {{old('fees')}} @endif">
            </div>

            <button type="submit" class="btn btn-primary">{{$buttonName}}</button>
            <button type="submit" class="btn btn-danger">Back</button>
        </form>
    </div>

    <div class="col-sm-2"></div>
  </div>
  @endsection