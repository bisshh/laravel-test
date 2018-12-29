@extends ('partial.layout')

@section('title', 'Customers')

@section('content')
	<div class="page-header">
		<h1>Customer List</h1>
	</div>
	<div class="row">
		<div class="col-4">
			<form action="{{url('customer')}}">
				{{csrf_field()}}
				<div class="input-group mb-3">
				  <input type="text" class="form-control" name="search" placeholder="Search here.." aria-describedby="button-addon2">
				  <div class="input-group-append">
				    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
				  </div>
				</div>
			</form>
		</div>
		<div class="col-8 text-right">
			<p>	
				<a href="{{url('customer/create')}}" class="btn btn-primary btn-sm">Create Customer</a>
			</p>
		</div>
	</div>	
	<table class="table">
		<tr>
			<th>ID</th>
			<th>Customer Name</th>
			<th>Email</th>
			<th>Contact</th>
			<th>IP Address</th>
			<th>Created Date</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		@foreach($customers as $customer)
			<tr>
				<td>{{$customer->id}}</td>
				<td>{{$customer->first_name}} {{$customer->last_name}}</td>
				<td>{{$customer->email}}</td>
				<td>{{$customer->contact_no}}</td>
				<td>{{$customer->ipaddress}}</td>
				<td>{{$customer->created_at}}</td>
				<td>{{$customer->status}}</td>
				<td>
					<form method="post" action="{{url('customer/'.$customer->id)}}">
						<a href="{{Url('customer/'.$customer->id.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>
						{{method_field('DELETE')}}
						{{csrf_field()}}
						<button type="submit" class="btn btn-danger btn-sm">Delete</button>
					</form>
				</td>
			</tr>
		@endforeach
	</table>
@endsection