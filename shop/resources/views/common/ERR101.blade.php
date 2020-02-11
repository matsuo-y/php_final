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

    <div align="center">
      <span>{{ $message }}</span>
      <br>
      <br>
      <button type="button" onClick="location.href='{{ url('/') }}'">メニューへ</button>
    </div>
@endsection