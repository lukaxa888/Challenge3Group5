@extends('layouts.defaultCalendar')

@section('content')
<div class="container">
    <div class="row">
    
     <div class=" justify-content-center col-9">
        <div>
            <table class="table" id="myTableSchedule">
                <thead>
                    <tr>
                        <th scope="col">Hours</th>
                        <th scope="col">Monday</th>
                        <th scope="col">Tuesday</th>
                        <th scope="col">Wednesday</th>
                        <th scope="col">Thursday</th>
                        <th scope="col">Friday</th>
                        <th scope="col">Saturday</th>
                        <th scope="col">Sunday</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $x = 6;
                    $a = 0;
                    $encontrado=false;
                    @endphp
                    @for ($i = 0; $i < 8; $i++)
                     <tr>
                     
                        @if($x < 8) 
                        <th>0{{$x=$x+2}}:00</th>

                        @else
                        <th>{{$x=$x+2}}:00</th>
                        @endif
                            
                         @for ($j = 0; $j < 7; $j++)
                                   {{$encontrado=false}} 
                                    @for($z = 0; $z < count($workoutConnections);$z++)
                                        @if($workoutConnections[$z]->schedule_id==$scheduleTime[$a]->id)                                      
                                        <td  value="{{$scheduleTime[$a]->id}}"  class="scheduleClass"> <a href="javascript:void(0);"> <span>{{$workoutConnections[$z]->workouts[0]->name}} </span></a> </td>
                                        @php 
                                        $encontrado=true;
                                        @endphp     
                                        @endif
                                    @endfor
                                @if($encontrado==false)
                                <td  value="{{$scheduleTime[$a]->id}}" class="scheduleClass" ></td>
                                @endif
                                @php  
                                   $a++
                                @endphp
                        @endfor

                     </tr>

                    @endfor
                </tbody>
            </table>
        </div>
    </div>
    <div class=" justify-content-center d-none d-md-block col-3">
            <div class="row pt-2" id="divs" >
                @foreach($workouts as $workout)
                <div class="col-6">
                    <p id="textRemarks" class="text-nowrap">{{$workout->workouts[0]->name}}</p>
                </div>
                @endforeach
           </div>
           <div clss="row pt-2" id="divSelect">
           @can('isAdmin')
      
      
           <form method="POST" action="{{ route('calendarUpdate') }}">
           @csrf
               <select name="workoutSelect">
               <option>Select Workout</option>
               @foreach($workoutsArray as $workout)
                    <option value="{{$workout->id}}">{{$workout->name}}
                    </option>
               @endforeach
               </select>
               <input type="text"  hidden="true" name="valueTd" id="hiddenScheduleIdText">
               <input type="submit" value="Save" id="">
               

            </form>
            <form method="post" id="formDelete" action="" >
            @csrf
            @method('DELETE')
            
            <input type="submit" value="Delete">
            </form>
           </div>
           @endcan
    </div>  
    </div>
</div>
<script>
    $(document).ready(function(){
    $(".scheduleClass").on('click',function(){
       $(this).css("background-color","lightgray");
        let attributeValue = $(this).attr("value");
      $("#hiddenScheduleIdText").attr("value",attributeValue);
     let newId = "/calendarDelete/"+attributeValue;
   $("#formDelete").attr("action",newId);
});
});

</script>



<script>

    $("#divs").children('div').each(function(){
       
    switch ($(this).find('p').text()) { 
	case 'Spinning': 
        $(this).css("background-color","yellow");
        break;
    case 'Aqua Gym': 
        $(this).css("background-color","blue");
        break;
    case 'Zumba': 
        $(this).css("background-color","pink");
        break;
    case 'Crossfit': 
        $(this).css("background-color","red");
        break;
    case 'Tennis': 
        $(this).css("background-color","green");
	    break;
	default:
      break;
}
    });
</script>
@endsection
