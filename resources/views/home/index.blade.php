
<h1>Hey this is Resham</h1>
<ul>
	@foreach($colors as $c)
		@if($c!='red')
			<li>{{$c}}</li>
		@endif
	@endforeach
</ul>