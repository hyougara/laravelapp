@extends('layouts')
@section('title','確認画面')
@section('content')

<h1>confirm</h1>
<p>この内容でよろしいですか</p>

<form action="complete" method="post" >
{{ csrf_field() }}
  <table class="table">
    <tr><th>name:<td>{{$form['name']}}</td></th></tr>
    <tr><th>email:<td>{{$form['email']}}</td></th></tr>
    <tr><th>password:<td>{{$form['password']}}</td></th></tr>
  </table>
  <input class="btn btn-success" type="submit" value="送信">
</form><br>

<input class="btn btn-success" type="button" onclick="location.href='{{url('form/new')}}'" value="戻る">
@endsection