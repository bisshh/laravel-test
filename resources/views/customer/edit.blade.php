@extends ('partial.layout')

@section('title', 'Edit Customer')

@section('content')
	<div class="page-header">
		<h1>Edit Customer</h1>
	</div>

	<form method="post" action="{{url('customer')}}">
		<div class="form-group">
			<label>First Name</label>
			<input type="text" name="first_name" class="form-control" required="required" value="{{$customer->first_name}}" /> 
		</div>
		<div class="form-group">
			<label>Last Name</label>
			<input type="text" name="last_name" class="form-control" required="required" value="{{$customer->last_name}}"/> 
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control" required="required" value="{{$customer->email}}"/> 
		</div>
		<div class="form-group">
			<label>Contact</label>
			<input type="text" name="contact_no" class="form-control" value="{{$customer->contact_no}}"/> 
		</div>
		<div class="form-group">
			<label>Status</label>
			<label><input type="checkbox" name="status" 
				@if($customer->status)
					checked="checked"
				@endif
			/>Active</label> 
		</div>
		{{method_field('PUT')}}
		{{csrf_field()}}
		<div class="form-group">
			<button type="submit" class="btn btn-success">Update</button>
			<a href="{{url('customer')}}" class="btn btn-danger">Back</a>
		</div>
	</form>
@endsection