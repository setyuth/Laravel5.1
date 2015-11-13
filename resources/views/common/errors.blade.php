@if(count($errors) > 0)
	<div class="alert alert-danger">
		<strong>
			Whoops! Something went wrong sir!
		</strong><br/><br/>
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error}}</li>
			@endforeach
		</ul>
	</div>
@endif