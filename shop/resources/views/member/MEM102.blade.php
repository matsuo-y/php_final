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
    <div align="left" class="caption">この内容で登録しますか？
      <br>
      <br>●会員情報
      <br>
      <br>
      <form action="/registac">
        <table class="table-tate">
          <tr>
            <th>氏名</th>
            <td>神田 KS</td>
          </tr>
          <tr>
            <th>年齢</th>
            <td>35</td>
          </tr>
          <tr>
            <th>性別</th>
            <td>男性</td>
          </tr>
          <tr>
            <th>郵便番号</th>
            <td>101-0021</td>
          </tr>
          <tr>
            <th>住所</th>
            <td>東京都千代田区</td>
          </tr>
          <tr>
            <th>電話番号</th>
            <td>03-1111-1111</td>
          </tr>
        </table>
        <br>
        <br>
        <button type=button onclick="registChoice">登録</button>
        <button type=button onclick="registChoice">戻る</button>
      </form>
    </div>
@endsection