@extends('employees.layout')

@section('content')
<div class="container">
<div class="pull-left mt-5">
	<h2>Employee Management System</h2>
    <div class="container">

<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull right">
			<a class="btn btn-success" href="{{ route('employees.create') }}">Create New Record</a>
		</div>
	</div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
	<tr>
		<th>No</th>
		<th>Name</th>
		<th>From</th>
		<th>Salary</th>
		<th>Action</th>
	</tr>
	@foreach ($employees as $employee)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $employee->name }}</td>
		<td>{{ $employee->from }}</td>
		<td>{{ $employee->salary }}</td>
		<td>
			<form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
            <a class="btn btn-primary" href="{{ route('employees.show',$employee->id) }}">Show</a>
				
				<a class="btn btn-warning" href="{{ route('employees.edit',$employee->id) }}">Edit</a>
				@csrf
				@method('DELETE')

				<button type="submit" class="btn btn-danger">Delete</button>
			</form>

		</td>

     </tr>
		 @endforeach
</table>
</div>