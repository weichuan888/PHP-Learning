@extends('layout')
@section('contenu')
  <form class="inscription" action="/inscription" method="post">
    {{ csrf_field() }}
    <input type="email" name="mail">
    <input type="password" name="pass" >
    <input type="password" name="pass2" >
    <input type="submit" name="send" >

  </form>

@endsection
