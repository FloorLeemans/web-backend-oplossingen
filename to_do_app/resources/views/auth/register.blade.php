@extends('app')

@section('title')
Registreer | 
@endsection

@section('content')
<h1>Registreer</h1>
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

	<form role="form" method="POST" action="{{ url('/auth/register') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="form-group">
			<label for="name">Naam</label><br/>
			<input type="text" name="name" value="{{ old('name') }}">

		</div>

		<div class="form-group">
			<label for="email">E-Mail</label><br/>
			<input type="email" name="email" value="{{ old('email') }}">
		</div>

		<div class="form-group">
			<label for="password">Wachtwoord</label><br/>
			<input type="password" name="password">
		</div>

		<div class="form-group">
			<label for="password_confirmation">Wachtwoord bevestigen</label><br/>
			<input type="password" name="password_confirmation">
		</div>

		<div class="form-group">
			<button type="submit">Registreer</button>
		</div>
	</form>
@endsection
