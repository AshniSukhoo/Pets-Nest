{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('category_id', 'Category_id:') }}
			{{ Form::text('category_id') }}
		</li>
		<li>
			{{ Form::label('type', 'Type:') }}
			{{ Form::text('type') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}