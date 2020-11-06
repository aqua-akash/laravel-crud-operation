@extends('students.layout')
@section('content')
<div class="row margin-auto">
    <div class="col-sm-2">
    </div>

    <div class="col-sm-8">
        @if(Session::has('message'))
        <div class="alert alert-success">
        {{session('message')}}
        </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#Sr</th>
                    <th scope="col">Name</th>
                    <th scope="col">Course</th>
                    <th scope="col">Fees</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(count($lists) > 0){
                    $i = 1; ?>
                    @foreach($lists as $value)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$value->studname}}</td>
                        <td>{{$value->course}}</td>
                        <td>{{$value->fees}}</td>
                        <td class="text-center">
                            <a href="{{route('edituser', ['id'=> $value->id])}}" class="btn btn-primary btn-sm"><i class="material-icons" style="font-size:12px;">&#xe254;</i></a>
                            <a href="{{route('deleteuser', ['id'=> $value->id])}}" class="btn btn-danger btn-sm"><i class="material-icons" style="font-size:12px;">&#xe872;</i></a>
                        </td>
                    </tr>
                    @endforeach
                <?php }else{?>
                    <tr>
                        <th scope="row" colspan="100" class="text-center"><h4>No records found!</h4></th>
                    </tr>

                <?php }?>
            </tbody>
        </table>
    </div>

    <div class="col-sm-2"></div>
  </div>
  @endsection