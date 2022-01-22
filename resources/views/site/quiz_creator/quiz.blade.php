{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('question_id', 'Question_id:') !!}
			{!! Form::text('question_id') !!}
		</li>
		<li>
			{!! Form::label('quiz_name', 'Quiz_name:') !!}
			{!! Form::text('quiz_name') !!}
		</li>
		<li>
			{!! Form::label('type', 'Type:') !!}
			{!! Form::text('type') !!}
		</li>
		<li>
			{!! Form::label('status', 'Status:') !!}
			{!! Form::text('status') !!}
		</li>
		<li>
			{!! Form::label('lavel', 'Lavel:') !!}
			{!! Form::text('lavel') !!}
		</li>
		<li>
			{!! Form::label('subject_name', 'Subject_name:') !!}
			{!! Form::text('subject_name') !!}
		</li>
		<li>
			{!! Form::label('created_by', 'Created_by:') !!}
			{!! Form::text('created_by') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}