@extends('layouts.app')

@section('content')
    <div class="top-div">
      <div id="title-link " align="left">オンラインショッピングサイト</div>
      <div align="right">
        <span class="date"><?php echo(date('Y/m/d')); ?></span>
        <br>
        <span class="pnk">「XXXX」さん</span>
      </div>
    </div>
    <div align="center" class="caption">会員登録が完了しました。
      <br>
      <br>あなたの会員NOは XXXX です。
      <br>
      <br>
      <button type=button onclick="registChoice">戻る</button>
      <a href="{{ url('/menu') }}">メニューへ</a>
    </div>
@endsection