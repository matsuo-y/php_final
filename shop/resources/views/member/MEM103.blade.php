@extends('layouts.app')

@section('content')
    <div class="top-div">
      <div id="title-link " align="left">オンラインショッピングサイト</div>
      <div align="right">
        <span class="date"><?php echo(date('Y/m/d')); ?></span>
        <br>
        <span class="pnk">「ゲスト」さん</span>
      </div>
    </div>
    <div align="center" class="caption">会員登録が完了しました。
      <br>
      <br>あなたの会員NOは {{ $nextId }} です。
      <br>
      <br>
      <button type="button" onClick="location.href='{{ url('/') }}'">メニューへ</button>
    </div>
@endsection