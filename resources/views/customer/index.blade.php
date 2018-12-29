@extends ('partial.layout')

@section('title', 'Customers')

@section('content')
	<div class="page-header">
		<h1>Customer List</h1>
		<table class="table">
			<tr>
				<td>ID</td>
				<td>Customer Name</td>
				<td>Email</td>
				<td>Contact</td>
				<td>IP Address</td>
				<td>Created Date</td>
				<td>Status</td>
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
				</tr>
			@endforeach
		</table>
	</div>
@endsection