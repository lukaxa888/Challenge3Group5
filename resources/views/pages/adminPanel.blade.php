@extends('layouts.defaultCalendar')

@section('content')

<a href=”{route(admin.users.editPanel”) }} “class =”btn btn-info”> Registrar nuevo usuario</a><hr>

<thead>
<th>Id </th>
<th> User Name</th>
<th> Email</th>
<th> Action</th>
</thead>
<body>
@foreach($users as $user)
<form  action="{{ route('userDestroy', $user->id)}}" method="post">
	@method('DELETE')
		@csrf
	<tr>
     
		<td> {{ $user -> id }} </td>
		<td> {{ $user -> name}} </td>
		<td> {{ $user -> email }} </td>
		<td>
        
       
        </td>
        
		<button  type="submit">Delete user</button>
		
        </form>
        @endforeach

		
@endsection
		
		
