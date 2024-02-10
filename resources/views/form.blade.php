@extends('layouts.default')
@section('title','さあ始めよう')
@section('content')
  <form action="/query-strings" method="GET">
    <label>キーワード：<input type="text" name="keyword"></label>
    <button type="submit">送信</button>
  </form>
@endsection