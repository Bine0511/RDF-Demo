@extends("layout")
@section("content")
	{{ Form::open() }}
<div class="row">
	<div class="large-3 columns">&nbsp;</div>
	<div class="large-6 columns">
 	<p>{{ Form::label('username', 'Username') }}
 	{{ Form::text('username') }}</p>
	</div>
	<div class="large-3 columns">&nbsp;</div>
</div>
<div class="row">
	<div class="large-3 columns">&nbsp;</div>
	<div class="large-6 columns">
 	<p>{{ Form::label('password', 'Password') }}
 	{{ Form::text('password') }}</p>
	</div>
	<div class="large-3 columns">&nbsp;</div>
</div>
<div class="row">
	<div class="large-3 columns">&nbsp;</div>
	<div class="large-6 columns">
 	<p>{{ Form::label('password_confirmation', 'Password confirm') }}
 	{{ Form::text('password_confirmation') }}</p>
	</div>
	<div class="large-3 columns">&nbsp;</div>
</div>
<div class="row">
	<div class="large-3 columns">&nbsp;</div>
	<div class="large-6 columns">
 	<p>{{ Form::submit('Submit') }}</p>
	</div>
	<div class="large-3 columns">&nbsp;</div>
</div>
	{{ Form::close() }}
@stop