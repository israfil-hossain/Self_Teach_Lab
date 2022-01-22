{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('quiz_code', 'Quiz_code:') !!}
			{!! Form::text('quiz_code') !!}
		</li>
		<li>
			{!! Form::label('question', 'Question:') !!}
			{!! Form::text('question') !!}
		</li>
		<li>
			{!! Form::label('first_option', 'First_option:') !!}
			{!! Form::text('first_option') !!}
		</li>
		<li>
			{!! Form::label('secound_question', 'Secound_question:') !!}
			{!! Form::text('secound_question') !!}
		</li>
		<li>
			{!! Form::label('third_question', 'Third_question:') !!}
			{!! Form::text('third_question') !!}
		</li>
		<li>
			{!! Form::label('fourth_option', 'Fourth_option:') !!}
			{!! Form::text('fourth_option') !!}
		</li>
		<li>
			{!! Form::label('result', 'Result:') !!}
			{!! Form::text('result') !!}
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