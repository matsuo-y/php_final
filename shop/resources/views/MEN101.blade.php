@extends('layouts.app')

@section('content')
    <div align="center">
      <a href="{{ url('/regist') }}" align="middle">新規会員登録</a>　会員情報の新規登録を行います。　　　　
      <br>
      <a href="{{ url('/search') }}" align="middle">商品検索</a>　購入する商品の検索を行います。　　　　　
      <br>
      <a href="{{ url('/cart') }}" align="middle">お買い物かご</a>　商品の注文を行います。　　　　　　　　　　　
      <br>
      <br>
      <div align="center" class=".caption">
        @guest
          <button type="button" onClick="location.href='{{ url('/login') }}'">ログイン</button>
        @else
          <form id="logout-form" action="{{ route('logout') }}" method="POST">
          @csrf
            <button type="submit">ログアウト</button>
          </form>
        @endguest
      </div>
    </div>
@endsection