@extends('layouts.layout')

@section('content')

<div class='usershowPage'>
  <div class='container'>
    <header class="header">
      <p class='header_logo'>
      <a href="{{ route('home') }}">
      <img src="http://192.168.33.14/laravel_lessons/teckpit-match/storage/app/public/images/techpit-match-icon.png">
      </a>
      </p>
    </header>
    <div class='userInfo'>
      <div class='userInfo_img'>
      <img src="http://192.168.33.14/laravel_lessons/teckpit-match/storage/app/public/images/{{$user->img_name}}">
      </div>
      <div class='userInfo_name'>{{ $user -> name }}</div>
      <div class='userInfo_selfIntroduction'>{{ $user -> self_introduction }}</div>
    </div>
    
      <div class='userAction'>
        <div class="userAction_edit userAction_common">
          <span>情報を編集</span>
        </div>
        <div class='userAction_logout userAction_common'>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();"></a>
          <span>ログアウト</span>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </div>
      </div>
    
  </div>
</div>

@endsection