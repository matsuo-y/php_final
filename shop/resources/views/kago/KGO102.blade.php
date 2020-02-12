@extends('layouts.app')

@section('content')
    <div align="left" class="caption">●商品一覧
      <br>
      <br>
      <table>
        <tr>
          <th>商品コード</th>
          <th>商品名</th>
          <th>販売元</th>
          <th>価格</th>
          <th>購入数</th>
        </tr>
        <tr>
          <td align="center">001-100525-001</td>
          <td align="center">商品名</td>
          <td align="center">会社</td>
          <td align="right">\ 1,000</td>
          <td align="center">1</td>
        </tr>
      </table>
      <br>
      <br>●料金
      <br>
      <br>
      <table>
        <tr>
          <th>小計</th>
          <td align="right">\ 1,000</td>
        </tr>
        <tr>
          <th>消費税</th>
          <td align="right">\ 100</td>
        </tr>
        <tr>
          <th>合計金額</th>
          <td align="right">\ 1,100</td>
        </tr>
      </table>
      <br>
      <br>
      <form action="/orderChoiceac">
        <button type=button onclick="orderChoice">買い物をやめる</button>
        <button type=button onclick="orderChoice">注文する</button>
        <button type=button onclick="orderChoice">戻る</button>
      </form>
    </div>
@endsection