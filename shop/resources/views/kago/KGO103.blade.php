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
    <div align="center" class="caption">注文が完了しました。 
      <br>
      <br>
      <a href="{{ url('/menu') }}">戻る</a>
    </div>
@endsection