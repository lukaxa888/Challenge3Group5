@extends('layouts.default')

@section('content')
<style type="text/css">

	
</style>
<section class="container-fluid">
<thead>
<th>Id </th>
<th> Name</th>
<th> Email</th>
<th> Action</th>
</thead>
<body>
	
@foreach($users as $user)
<form  action="{{ route('userUpdate', $user->id)}}" method="get">
	
		@csrf
	<table>
	<tr>
     
		<td> {{ $user -> id }} </td>
		<td> {{ $user -> userName}} </td>
		<td> {{ $user -> email }} </td>
		<td><input type="submit" value="Edit user"></input></td>

	</tr>
	</table>
        
		
		
	</form>
	</section>
        @endforeach

		
@endsection