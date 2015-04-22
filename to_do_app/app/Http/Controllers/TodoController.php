<?php namespace App\Http\Controllers;

use App\Todo;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;

class TodoController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		$userId 	= Request::user()->id;
		$geenTaken 	= false;
		$geenTodos	= false;
		$geenDones	= false;

		$countTaken = Todo::where('user_id', '=', $userId)->where('deleted', '=', 0)->count();
		$countTodos = Todo::where('user_id', '=', $userId)->where('deleted', '=', 0)->where('done', '=', 0)->count();
		$countDones = Todo::where('user_id', '=', $userId)->where('deleted', '=', 0)->where('done', '=', 1)->count();

			if ($countTaken == 0) 
			{ $geenTaken	=	true; }
			if ($countTodos == 0) 
			{ $geenTodos	=	true; }
			if ($countDones == 0) 
			{ $geenDones	=	true; }
		
		$todos = Todo::where('user_id', '=', $userId)->where('deleted', '=', 0)->where('done', '=', 0)->orderBy('updated_at', 'desc')->get();
		$dones = Todo::where('user_id', '=', $userId)->where('deleted', '=', 0)->where('done', '=', 1)->orderBy('updated_at', 'desc')->get();

		return view('todo/index', compact('geenTaken', 'geenTodos', 'geenDones', 'todos', 'dones'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('todo/create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Request::all();
		$userId = Request::user()->id;

		$input['name']				=	$input['nameTodo'];
		$input['remember_token']	=	$input['_token'];
		$input['user_id']			=	$userId;
		
		Todo::create($input);

		\Session::flash('flash_message', 'Todo "' . $input['name'] .'" toegevoegd.');

		return redirect('todo');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$todo	=	Todo::find($id);
		$todoStatus	=	$todo->done;

		if ($todoStatus	==	0)
		{
			$todo->update(['done' => 1]);
			\Session::flash('flash_message', 'Alright! Dat is geschrapt.');
		}
		else
		{
			$todo->update(['done' => 0]);
			\Session::flash('flash_message', 'Ai ai, nog meer werk...');
		}

		return redirect('todo');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$todo	=	Todo::find($id);

		\Session::flash('flash_message', 'Het item "' . $todo['name'] .'" werd verwijderd.');

		$todo->update(['deleted' => 1]);

		return redirect('todo');
	}

}