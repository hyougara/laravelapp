@extends('layouts')
@section('title', 'login')
@section('content')
<h1>ログインフォーム</h1>
<form  action="" method="post">
  <div class="form-group">
    <input class="form-control" type="text" name="email" value="">
  </div>
  <div class="form-group">
    <input class="form-control" type="text" name="password" value="">
  </div>
  <div class="form-group">
    <button class="btn btn-info" type="submit">ログイン</button>
  </div>  

</form>
<form action="">
  <div class="form-group">
    <button class="btn btn-info" type="submit">新規登録</button>
  </div>
</form>
@endsection