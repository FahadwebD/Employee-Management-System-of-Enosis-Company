@extends('employees.layout')

@section('content')

<div class="row">
	<div class="col-lg-12 margin-tb">

		<div class="pull-left">
			<h2>Show Details</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
		</div> 

	 </div>

</div> 
@if ($errors->any())

<div class="alert alert-danger">
	<strong>Whoops!</strong> There were some problems with your input.<br><br>
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div> 

@endif

<form action="{{ route('employees.update',$employee->id) }}" method="POST">
	@csrf
	@method('PUT')

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Name:</strong>
				<input type="text" name="name" value="{{ $employee->name }}" class="form-control" placeholder="Name" readonly="">
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>From:</strong>
				<input type="text" name="from" value="{{ $employee->from }}" class="form-control" placeholder="From" readonly="">
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Salary:</strong>
				<input type="text" name="salary" value="{{ $employee->salary }}" class="form-control" placeholder="Salary" readonly>
			</div>


	
	</div>
</form>
	@endsection