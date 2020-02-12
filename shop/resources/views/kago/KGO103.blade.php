@extends('layouts.app')

@section('content')
    <div align="center" class="caption">注文が完了しました。 
      <br>
      <br>
      <button type="button" onClick="location.href='{{ url('/') }}'">メニューへ戻る</button>
    </div>
@endsection