@extends ('partial.layout')

@section('title', 'Customers')

@section('content')
	<div class="page-header">
		<h1>Customer List</h1>
	</div>
	<div class="text-right">
		<p>	
			<a href="{{url('customer/create')}}" class="btn btn-primary btn-sm">Create Customer</a>
		</p>	
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
					<a href="{{Url('customer/'.$customer->id.'/edit')}}" class="btn btn-warning btn-xs">Edit</a>
				</td>
			</tr>
		@endforeach
	</table>
@endsection