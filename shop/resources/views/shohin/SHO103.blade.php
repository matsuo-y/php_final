@extends('layouts.app')

@section('content')
    <div align="left" class="caption">以下の商品をお買いものかごに登録しました。 
      <br>
      <br>●商品一覧
      <br>
      <br>
      <form action="/goodsSearchCompChoice">
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
        <br>
        <button type=button onclick="cartChoice">お買い物かご</button>
        <button type=button onclick="cartChoice">戻る</button>
      </form>
    </div>
@endsection