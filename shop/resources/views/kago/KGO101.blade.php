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
    <div align="left" class="caption">●商品一覧 
      <br>
      <br>
      <span>エラーをここに表示</span>
      <br>
      <form action="/orderChoice">
        <table>
          <tr>
            <th>選択</th>
            <th>商品コード</th>
            <th>商品名</th>
            <th>販売元</th>
            <th>価格</th>
            <th>購入数</th>
          </tr>
          <tr>
            <td align="center">
              <input type="checkbox" name="check" value="goodsCode">
              <input type="hidden" name="goodsCodeList" value="goodsCode">
            </td>
            <td align="center">001-100525-001</td>
            <td align="left">商品名</td>
            <td align="center">会社</td>
            <td align="right">\ 1,000</td>
            <td align="center">
              <input type="number" name="buyCnt" min="1" max="999">
            </td>
          </tr>
        </table>
        <br>
        <br>
        <button type=button onclick="orderChoice">取り消し</button>
        <button type=button onclick="orderChoice">買い物をやめる</button>
        <button type=button onclick="orderChoice">注文する</button>
        <button type=button onclick="orderChoice">メニューへ</button>
      </form>
    </div>
@endsection