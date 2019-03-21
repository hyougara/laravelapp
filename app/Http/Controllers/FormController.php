<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HTTP\Requests\UserRequest;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Form;

class FormController extends Controller
{	
	public function index(){

			$users = Form::all();
		return view('form.index', ['users'=>$users ]);
	}

	public function new(){
		return view('form.new');
	}

	public function create(UserRequest $request){
		$form = array('name' =>$request->name, 'email' => $request->email, 'password' => $request->password);
		return view('form.confirm',['form' => $form]);

		// dd($form);
		// $form = new Form;
		// $user = $request->all();
		// unset($user['_token']);
		// $form->fill($user);
		// return view('form.confirm',['form' => $form]);
	}

	public function complete(UserRequest $request){
		$form = new Form;	
		$users = $request->all();
		unset($users['_token']);
		$form->fill($users)->save();
		return view('form.complete');
	}

	public function edit(Request $request){
		$form = Form::find($request->id);
		return view('form.user_edit',['form' => $form]);
	}

	public function update(UserRequest $request){
		$form = Form::find($request->id);
		$user = $request->all();
		unset($user['_token']);
		$form->fill($user)->save();
		// return view('form.user_edit',['form' => $form ]);
		return redirect('form/index');

	}

	public function delete(Request $request){
		Form::find($request->id)->delete();
		return redirect('form/index');
	}

	// public function remove(Request $request){
	// 	Form::find($request->id)->delete();
	// 	return redirect('form/index');


	// }



}
