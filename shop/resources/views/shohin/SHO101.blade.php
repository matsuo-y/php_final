@extends('layouts.app')

@section('content')
    <div align="left" class="caption">検索条件を入力して下さい。
      <br>
			<!-- Display Validation Errors -->
			@include('common.errors')
      <br>
      <form>
        <table class="table-tate">
          <tr>
            <th>カテゴリ</th>
            <td>
              <select name='cateId'>
                <option value=""></option>
                @foreach($onlineCategories as $index => $name)
                  <option value="{{ $index }}" @if($cateId == $index) selected @endif>{{ $name }}</option>
                @endforeach
              </select>
            </td>
          </tr>
          <tr>
            <th>商品名</th>
            <td>
              <input type="text" name="productName" value="{{ $productName }}" >
            </td>
          </tr>
          <tr>
            <th>販売元</th>
            <td>
              <input type="text" name="maker" value="{{ $maker }}" >
            </td>
          </tr>
          <tr>
            <th>金額上限</th>
            <td>
              <input type="number" name="priceMax" min="0" value="{{ $priceMax }}" >
            </td>
          </tr>
          <tr>
            <th>金額下限</th>
            <td>
              <input type="number" name="priceMin" min="0" value="{{ $priceMin }}" >
            </td>
          </tr>
        </table>
        <br>
        <br>
        <button type="submit">検索</button>
        <button type="button" onClick="location.href='{{ url('/') }}'">戻る</button>
        <button type="reset">クリア</button>
      </form>
      <br>
      <br>●商品一覧
      <br>
      <br>
      <div class="paginate">
        @if ($onlineProducts->lastPage() > 0)
          @if ($onlineProducts->currentPage() > 2)
          <span class="page-item">
            <a class="page-link" href="{{ $onlineProducts->url(1) }}">＜＜</a>
          </span>
          @endif
          @if ($onlineProducts->currentPage() > 1)
          <span class="page-item">
            <a class="page-link" href="{{ $onlineProducts->url($onlineProducts->currentPage()-1) }}">
              <span aria-hidden="true"> ＜ </span>
              {{-- Previous --}}
            </a>
          </span>
          @endif
          {{ $onlineProducts->currentPage() }} / {{ $onlineProducts->lastPage() }}
          @if ($onlineProducts->currentPage() < $onlineProducts->lastPage()-1)
          <span class="page-item">
            <a class="page-link" href="{{ $onlineProducts->url($onlineProducts->currentPage()+1) }}" >
              <span aria-hidden="true"> ＞ </span>
              {{-- Next --}}
            </a>
          </span>
          @endif
          @if ($onlineProducts->currentPage() < $onlineProducts->lastPage())
          <span class="page-item">
            <a class="page-link" href="{{ $onlineProducts->url($onlineProducts->lastPage()) }}">＞＞</a>
          </span>
          @endif
        @endif
      </div>
      <br>
      <!-- OnlineProducts -->
      @if ($isListEmpty)
      <apan>検索結果がありませんでした。</span>
      @else
      <!--<form action="/cartac">-->
      <form action="/exec_cart">
        <table>
          <tr>
            <th>選択</th>
            <th>商品コード</th>
            <th>商品名</th>
            <th>販売元</th>
            <th>金額(単価)</th>
            <th>メモ</th>
            <th>購入数</th>
          </tr>
          @foreach ($onlineProducts as $onlineProduct)
          <tr>
            <td align="center">
              <input type="checkbox" name="checkName" value="goodsCode">
              <input type="hidden" name="goodsCodeList" value="goodsCode">
            </td>
            <td align="center">{{ $onlineProduct->PRODUCT_CODE }}</td>
            <td align="center">
              <a href="{{ url('detail/' .$onlineProduct->PRODUCT_CODE) }}">{{ $onlineProduct->PRODUCT_NAME }}</a>
            </td>
            <td align="center">{{ $onlineProduct->MAKER }}</td>
            <td align="right">\{{ number_format($onlineProduct->UNIT_PRICE) }}</td>
            <td align="center">{{ mb_strimwidth( $onlineProduct->MEMO, 0, 46, '・・・', 'UTF-8' ) }}</td>
            <td align="center">
              <input type="number" name="buyCnt" min="1" max="999">
            </td>
          </tr>
          @endforeach
        </table>
        <br>
        <br>
        <button type="submit">お買い物かごに入れる</button>
      </form>
      @endif
    </div>
@endsection