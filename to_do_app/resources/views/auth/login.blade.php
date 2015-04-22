@extends('app')

@section('title')
Inloggen | 
@endsection

@section('content')
<h1>Inloggen</h1>
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br/><br/>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form role="form" method="POST" action="{{ url('/auth/login') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="form-group">
			<label for="email">E-mail</label><br/>
			<input type="email" name="email" value="{{ old('email') }}">
		</div>

		<div class="form-group">
			<label for="password">Wachtwoord</label><br/>
			<input type="password" name="password">
		</div>

		<div class="form-group">
			<div class="checkbox">
				<label>
					<input type="checkbox" name="remember"> Onthoud mij
				</label>
			</div>
		</div>

		<div class="form-group">
			<button type="submit">Inloggen</button>
		</div>
	</form>
@endsection