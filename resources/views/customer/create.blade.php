@extends ('partial.layout')

@section('title', 'Add Customer')

@section('content')
	<div class="page-header">
		<h1>Add Customer</h1>
	</div>

	<form method="post" action="{{url('customer')}}">
		<div class="form-group">
			<label>First Name</label>
			<input type="text" name="first_name" class="form-control" required="required"/> 
		</div>
		<div class="form-group">
			<label>Last Name</label>
			<input type="text" name="last_name" class="form-control" required="required"/> 
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control" required="required"/> 
		</div>
		<div class="form-group">
			<label>Contact</label>
			<input type="text" name="contact_no" class="form-control"/> 
		</div>
		<div class="form-group">
			<label>Status</label>
			<label><input type="checkbox" name="status"/>Active</label> 
		</div>
		{{csrf_field()}}
		<div class="form-group">
			<button type="submit" class="btn btn-success">Create</button>
			<a href="{{url('customer')}}" class="btn btn-danger">Reset</a>
		</div>
	</form>
@endsection