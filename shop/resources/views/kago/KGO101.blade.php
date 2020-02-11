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
			<!-- Display Validation Errors -->
			@include('common.errors')
      <br>
      @if ($isListEmpty)
      <apan>検索結果がありませんでした。</span>
      @else
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
          @foreach ($cartItems as $cartItem)
          <tr>
            <td align="center">
              <input type="checkbox" name="check" value="goodsCode">
              <input type="hidden" name="goodsCodeList" value="goodsCode">
            </td>
            <td align="center">{{ $cartItem->PRODUCT_CODE }}</td>
            <td align="left">{{ $cartItem->PRODUCT_NAME }}</td>
            <td align="center">{{ $cartItem->MAKER }}</td>
            <td align="right">\ {{ $cartItem->UNIT_PRICE }}</td>
            <td align="center">
              <input type="number" name="buyCnt" min="1" max="999" value="{{ $cartItem->buyCnt }}">
            </td>
          </tr>
          @endforeach
        </table>
        <br>
        <button type="button" onclick="orderChoice">取り消し</button>
        <button type="button" onclick="orderChoice">買い物をやめる</button>
        <button type="button" onclick="orderChoice">注文する</button>
        <button type="button" onClick="location.href='{{ url('/') }}'">メニューへ</button>
      </form>
      @endif
    </div>
@endsection