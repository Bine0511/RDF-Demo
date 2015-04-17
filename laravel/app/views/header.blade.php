@section("header")
<div class="row">
	<style>
		input[type="submit"]{
			font-size: 0.77778rem;
			height: 1.55556rem;
			position: relative;
			top: 0.47222rem;
			padding: 0.875rem 1.75rem 0.9375rem;
			margin-bottom: 0;
			padding-bottom: 0.40556rem;
			padding-top: 0.40556rem;
			background-color: #f04124;
			border-color: #cf2a0e;
			color: #ffffff;
			padding-left: 0;
			padding-right: 0;
			width: 100%;
			display: inline-block;
			border-radius: 0;
			border-style: solid;
			border-width: 0;
			font-family: "Helvetica Neue","Helvetica",Helvetica,Arial,sans-serif !important;
			font-weight: normal;
			line-height: normal;
			text-align: center;
			text-decoration: none;
			transition: background-color 300ms ease-out 0s;
			box-sizing: border-box;

		}
		input[type="submit"]:hover{
			background-color: #cf2a0e;
		}
	</style>
	<div class="large-12 columns">
		<nav class="top-bar">
			@if (Auth::check())
			<section class="top-bar-section">
				<ul class="left">
					<li><a href="{{ URL::route('user/logout') }}">Logout</a></li>
				</ul>
			</section>
			@else
			<section class="top-bar-section">
				<ul class="left">
					<li><a href="{{ URL::route('user/login') }}">Login</a></li>
					<li><a href="{{ URL::route('user/register') }}">Register</a></li>
				</ul>
			</section>
			@endif
			</ul>
		</nav>
	</div>
</div>
@show