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
		// $form = array('name' =>$request->name, 'email' => $request->email, 'password' => $request->password);
		// フォームの値を全て取得
		$form = $request->all();
		// フォームの値をセッションに入れる
		$request->session()->put($form);
		// セッションに入れたデータをvieに返す
		return view('form.confirm',compact('form'));

		// これはセッションには入っていなくて直接保存している input経由的な感じ 値がinput内じゃないとエラー吐く
		// $form = new Form;
		// $user = $request->all();
		// unset($user['_token']);
		// $form->fill($user);
		// return view('form.confirm',['form' => $form]);
	}

	public function complete(Request $request){
		// $form = new Form;	
		// $users = $request->all();
		// unset($users['_token']);
		// $form->fill($users)->save();
		// dd($request);
		
		// $form = new Form;
		// sessionを全て取得し、モデルを作成と同時に保存
		$user = session()->all();
		(new Form($user))->save();

		// dd($request->all());
		// $user = $request->all();
		// dd($request->all());
		// $user = session()->put($request->all());
		// dd($user);
		// dd(session()->put($user));
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
