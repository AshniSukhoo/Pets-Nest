{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('type', 'Type:') }}
			{{ Form::text('type') }}
		</li>
		<li>
			{{ Form::label('image_path', 'Image_path:') }}
			{{ Form::text('image_path') }}
		</li>
		<li>
			{{ Form::label('description', 'Description:') }}
			{{ Form::text('description') }}
		</li>
		<li>
			{{ Form::label('name', 'Name:') }}
			{{ Form::text('name') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}