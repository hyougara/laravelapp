@extends('layouts')
@section('title', 'new')
@section('content')

<form action="" method="post" >
{{ csrf_field() }}
  <table >
  <div class="form-group">
      @if($errors->has('name'))
        @foreach($errors->get('name') as $name)
          <tr class="error-msg"><th>name:</th><td><input class="form-control" type="text" name="name" value="{{old('name')}}"></td></tr>
          <tr class="error-msg"><th></th><td>{{$name}}</td></tr>
        @endforeach
      @else
        <tr><th>name:</th><td><input class="form-control" type="text" name="name" value="{{old('name')}}"></td></tr>
      @endif
    </div>

    <div class="form-group">
      @if($errors->has('email'))
        @foreach($errors->get('email') as $email)
          <tr class="error-msg"><th>email:</th><td><input class="form-control" type="text" name="email" value="{{old('email')}}"></td></tr>
          <tr class="error-msg"><th></th><td>{{$email}}</td></tr>
        @endforeach
      @else
        <tr><th>email:</th><td><input class="form-control" type="text" name="email" value="{{old('email')}}"></td></tr>
      @endif
    </div>

    <div class="form-group">
      @if($errors->has('password'))
        @foreach($errors->get('password') as $password)
          <tr class="error-msg"><th>password:</th><td><input class="form-control" type="text" name="password" value="{{old('password')}}"></td></tr>
          <tr class="error-msg"><th></th><td>{{$password}}</td></tr>
        @endforeach
      @else
        <tr><th>password:</th><td><input class="form-control" type="text" name="password" value="{{old('password')}}"></td></tr>
      @endif
    </div>
  </table>
  <input class="btn btn-primary" type="submit" value="送信">
  <input class="btn btn-primary" type="button" onclick="location.href='{{url('form/index')}}'" value="トップへ">
</form>


@endsection