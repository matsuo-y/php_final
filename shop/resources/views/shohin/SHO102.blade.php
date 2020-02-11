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
      <form action="/goodsDetailChoice">◆商品詳細【商品名】 
        <br>
        <br>
        <br>画像： 
        <html:img src="${sessionScope.goodsDetail.picture }" />
        <br>
        <br>商品説明： 商品ですよ 
        <br>
        <br>価格：\2,222
        <br>
        <br>
        <span>エラーをここに表示</span>
        <br>
        <br>購入数
		<input type="number" name="buyCnt" min="1" max="999">個
        <br>
        <br>
        <button type=button onclick="goodsDetailChoice">お買い物かごにいれる</button>
        <button type=button onclick="goodsDetailChoice">戻る</button>
      </form>
    </div>
@endsection