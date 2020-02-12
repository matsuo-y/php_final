@extends('layouts.app')

@section('content')
    <div align="left" class="caption">この内容で登録しますか？
      <br>
      <br>●会員情報
      <br>
      <br>
      <form action="{{action('OnlineMemberController@execRegist')}}" method="post">
        {{ csrf_field() }}
        <table class="table-tate">
          <tr>
            <th>氏名</th>
            <td>{{$onlineMember['name']}}</td>
          </tr>
          <tr>
            <th>年齢</th>
            <td>{{$onlineMember['age']}}</td>
          </tr>
          <tr>
            <th>性別</th>
            <td>{{$onlineMember['sex']  === 'M' ? '男性' : $onlineMember['sex']  === 'F' ? '女性' : '-'}}</td>
          </tr>
          <tr>
            <th>郵便番号</th>
            <td>{{$onlineMember['zip']}}</td>
          </tr>
          <tr>
            <th>住所</th>
            <td>{{$onlineMember['address']}}</td>
          </tr>
          <tr>
            <th>電話番号</th>
            <td>{{$onlineMember['tel']}}</td>
          </tr>
        </table>
        <br>
        <br>
        <button type="submit">登録</button>
        <button type="button" onclick="history.back()">戻る</button>
      </form>
    </div>
@endsection