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
    <div align="center" class="caption">
      <form action="{{action('ShohinController@addCartSingle')}}" method="post">
        {{ csrf_field() }}
        <br>◆商品詳細【 {{ $onlineProduct->PRODUCT_NAME }} 】 
        <br><img alt="{{ $onlineProduct->PRODUCT_NAME }}" src="{{ asset('/images/goods/' .$onlineProduct->PICTURE_NAME) }}">
        <br>商品説明： {{ $onlineProduct->MEMO }}
        <br>価格：\{{ number_format($onlineProduct->UNIT_PRICE) }}
		  	<!-- Display Validation Errors -->
		  	@include('common.errors')
        <br>
        <br>購入数
        <input type="number" name="buyCnt" min="1" max="999" value="{{old('buyCnt')}}">個
        <br>
        <input type="hidden" name="id" value="{{ $id }}">
        <button type="submit">お買い物かごにいれる</button>
        <button type="button" onClick="location.href='{{ url('/search') }}'">戻る</button>
      </form>
    </div>
@endsection