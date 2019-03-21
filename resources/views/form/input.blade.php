@extends('layouts')
@section('title','入力画面')
@section('content')



<h1>form</h1>

  <div >
    @if($errors->any())
    <ul class="error">
      @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
@endif
@if(!empty($msg))
<p>{{$msg}}</p>
@endif


  <form action="" method="post">
    {{ csrf_field() }}
    <div class="form_group">
      <label>name：</label>
      <input type="text" name="name" value="{{old('name')}}">
        @if($errors->has('name'))
          @foreach($errors->get('name') as $name)<br>
        <span class="error">{{$name}}</span><br>
          @endforeach
        @endif
    </div>

    <div class="form_group">
      <label>e-mail：</label>
      <input type="text" name="email" value="{{old('email')}}">
        @if($errors->has('email'))
          @foreach($errors->get('email') as $email)<br>
        <span class="error">{{$email}}</span><br>
          @endforeach
        @endif
    </div>

    <div class="form_group">
      <label>password：</label>
      <input type="text" name="password" value="{{old('password')}}">
        @if($errors->has('password'))
          @foreach($errors->get('password') as $password)<br>
            <span class="error">{{$password}}</span><br>
          @endforeach
        @endif
    </div>  
    <div class="action">
      <input type="submit"  value="送信">
    </div>
  </form>
  <div class="action">
    <button><a href="index">トップへ</a></button>
  </div>
<a href="{{url('form/index')}}">topに戻る</a>

@endsection