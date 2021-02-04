@extends('layouts.default')

@section('content')
<div id="tablaDiv" >
<table class="table">
  <thead>
  @if(!$schedules->isEmpty())
    <tr>
      <th scope="col">WorkoutID</th>
      <th scope="col">Name</th>
      <th scope="col">Day</th>
      <th scope="col">Hour</th>
    </tr>
  </thead>
  <tbody>
  
  @foreach($schedules as $schedule)
    <tr>
      <th scope="row">{{$workout->id}}</th>
      <td>{{$workout->name}}</td>
      <td>{{$schedule->date}}</td>
      <td>{{$schedule->hour}}</td>
    </tr>
  @endforeach
  
  @else
  <div class="d-flex justify-content-center">
   <img src="{{asset('img/nowork.jpg')}}" class="img-fluid rounded" alt="Responsive image" ></img>
  </div>

  @endif
  </tbody>
</table>
</div>


@endsection