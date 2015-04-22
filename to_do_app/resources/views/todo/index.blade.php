@extends('app')

@section('title')
Todo App | 
@endsection

@section('content')
<h1>De TODO-app</h1>

	@if ($geenTaken == true)

		<p>Nog geen todo-items. <a href="{{ url('/todo/create') }}">Voeg item toe</a>.</p>

	@else

		<h2>Wat moet er allemaal gebeuren?</h2>
			<p><a href="{{ url('/todo/create') }}">Voeg item toe</a></p>

			<h3>Todo</h3>

				@if ($geenTodos == true)
					
					<p>Allright, all done!</p>

				@else

					<ul class="list">
						@foreach ($todos as $todo)
							<li class="todo">
								<span class="activate" title="Vink maar af"><a href="{{url('/todo/activate/' . $todo->id)}}" class="icon fontawesome-ok-sign"></a></span>
								<span class="text">{{$todo->name}}</span>
								<span class="delete" title="Verwijder dit maar"><a href="{{url('/todo/delete/' . $todo->id)}}" class="icon fontawesome-remove"></a></span>
							</li>
						@endforeach
					</ul>

				@endif

			<h3>Done</h3>

				@if ($geenDones == true)

					<p>Damn, werk aan de winkel...</p>

				@else

					<ul class="list">
						@foreach ($dones as $done)
							<li class="done">
								<span class="activate" title="Oeps, dit moet nog gedaan worden"><a href="{{url('/todo/activate/' . $done->id)}}" class="icon fontawesome-ok-sign"></a></span>
								<span class="text">{{$done->name}}</span>
								<span class="delete" title="Verwijder dit maar"><a href="{{url('/todo/delete/' . $done->id)}}" class="icon fontawesome-remove"></a></span>
							</li>
						@endforeach
					</ul>

				@endif
	@endif
@endsection