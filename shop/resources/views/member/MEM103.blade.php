@extends('layouts.app')

@section('content')
    <div align="center" class="caption">会員登録が完了しました。
      <br>
      <br>あなたの会員NOは {{ $nextId }} です。
      <br>
      <br>
      <button type="button" onClick="location.href='{{ url('/') }}'">メニューへ</button>
    </div>
@endsection