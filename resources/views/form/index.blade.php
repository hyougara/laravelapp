@extends('layouts')
@section('title', 'index')
@section('content')

<h1>index</h1>
<input class="btn btn-primary" type="button"  onclick="location.href='{{url('form/new')}}'" value="フォームへ">

@if(isset($users))
<table class="table table-striped">
  <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>password</th>
    <th>edit</th>
    <th>delete</th>
  </tr>
  @foreach($users as $user)
  <tr>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->password}}</td>
    <td>
      <form action="user_edit" method="">
      {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$user->id}}">
        <input class="btn btn-primary" type="submit" value="修正">
      </form>
    </td>
    <td>
      <form action="delete" method="post">
      {{ csrf_field() }}
        <input  type="hidden" name="id" value="{{$user->id}}">
        <input class="btn btn-primary" type="submit" onClick="return confirm('削除しますか？');" value="削除">
      </form>
  </tr>
  @endforeach
</table>
@endif

<input class="btn btn-primary" type="button"  onclick="location.href='{{url('form/new')}}'" value="フォームへ">


@endsection