@extends('layouts.layout')

@section('content')
	<h1>Create New User</h1>

	<form action="" method="POST">
		{{ csrf_field() }}
		<ul>
			<li>User name: <input type="text" id="username" name="username"></li>
			<li>Password: <input type="password" id="password" name="password"></li>
			<li>First name: <input type="text" id="firstname" name="firstname"></li>
			<li>Last name: <input type="text" id="lastname" name="lastname"></li>
			<li>Email address: <input type="text" id="email" name="email"></li>
			<button type="submit">Submit</button>
		</ul>
	</form>
@stop