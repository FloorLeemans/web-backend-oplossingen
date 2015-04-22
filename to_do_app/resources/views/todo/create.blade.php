@extends('app')

@section('title')
Todo Invoegen | 
@endsection

@section('content')
<h1>Voeg een TODO-item toe</h1>
	<p><a href="{{ url('/todo') }}">Terug naar mijn TODO's</a></p>
	<form method="POST" action="{{ url('/todo') }}" accept-charset="UTF-8">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<ul>
			<li>
				<label for="nameTodo" class="label">Wat moet er gedaan worden?</label>
				<input name="nameTodo" type="text" value="" id="nameTodo">
			</li>
		</ul>
		<input type="submit" value="Toevoegen!">
	</form>
@endsection