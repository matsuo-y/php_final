@extends('layouts.app')

@section('content')
    <div align="center">
      <span>{{ $message }}</span>
      <br>
      <br>
      <button type="button" onClick="location.href='{{ url('/') }}'">メニューへ</button>
    </div>
@endsection