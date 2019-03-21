@extends('layouts')
@section('title', '完了画面')
@section('content')

<h1>完了</h1>
<input class="btn btn-primary" type="button" onclick="location.href='{{url('form/index')}}'" value="トップへ">


@endsection