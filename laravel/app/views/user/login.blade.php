@extends("layout")
@section("content")
		{{ Form::open() }}
<div class="row">
	<div class="large-3 columns">&nbsp;</div>
	<div class="large-6 columns">
		{{ $errors->first("password") }}<br />
		<!--@if (isset($error))
			{{ $error }}<br />
		@endif-->
		{{ Form::label ("username", "Username") }}
		{{ Form::text ("username", Input::old("username")) }}
	</div>
	<div class="large-3 columns">&nbsp;</div>
</div>
<div class="row">
	<div class="large-3 columns">&nbsp;</div>
	<div class="large-6 columns">
		{{ Form::label ("password", "Password") }}
		{{ Form::password ("password") }}
	</div>
	<div class="large-3 columns">&nbsp;</div>
</div>
<div class="row">
	<div class="large-3 columns">&nbsp;</div>
	<div class="large-6 columns">
		{{ Form::submit ("login") }}
	</div>
	<div class="large-3 columns">&nbsp;</div>
</div>
<div class="row">
	<div class="large-3 columns">&nbsp;</div>
	<div class="large-6 columns">
		{{ Form::close () }}
	</div>
	<div class="large-3 columns">&nbsp;</div>
</div>
@stop