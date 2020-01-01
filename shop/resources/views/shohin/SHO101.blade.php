@extends('layouts.app')

@section('content')
    <div class="top-div">
      <div id="title-link " align="left">オンラインショッピングサイト</div>
      <div align="right">
        <span class="date">2019/12/30</span>
        <br>
        <span class="pnk">「XXXX」さん</span>
      </div>
    </div>
    <div align="left" class="caption">検索条件を入力して下さい。
      <br>
      <span>エラーをここに表示</span>
      <br>
      <form action="/goodsSearchac">
        <table class="table-tate">
          <tr>
            <th>カテゴリ</th>
            <td>
              <html:select property="category">
                <html:options collection="categoryList" property="cateId" labelProperty="cateName" />
              </html:select>
            </td>
          </tr>
          <tr>
            <th>商品名</th>
            <td>
              <input type="text" name="goodsName" value="" >
            </td>
          </tr>
          <tr>
            <th>販売元</th>
            <td>
              <input type="text" name="maker" value="" >
            </td>
          </tr>
          <tr>
            <th>金額上限</th>
            <td>
              <input type="text" name="priceMax" value="" >
            </td>
          </tr>
          <tr>
            <th>金額下限</th>
            <td>
              <input type="text" name="priceMin" value="" >
            </td>
          </tr>
        </table>
        <br>
        <br>
        <button type=button onclick="goodsSearchChoice">検索</button>
        <button type=button onclick="goodsSearchChoice">戻る</button>
        <button type=button onclick="reset">クリア</button>
      </form>
      <br>
      <br>●商品一覧
      <br>
      <br>
      <div align="left" class=".caption">
        <span>
          <%
 	Integer viewMin = (Integer) session.getAttribute("viewMin");
 	Integer viewMax = (Integer) session.getAttribute("viewMax");
 	Integer viewPage = (Integer) session.getAttribute("viewPage");
 	if (viewPage != viewMin) {
 %>
          <html:form action="/goodsListBack">
            <html:submit>＜ </html:submit>
          </html:form>
          <%
 	}
 	if (viewPage != viewMax) {
 %>
          <html:form action="/goodsListNext">
            <html:submit>＞ </html:submit>
          </html:form>
          <%
 	}
 %>
        </span>
      </div>
      <span>エラーをここに表示</span>
      <br>
      <html:form action="/cartac">
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
          <tr>
            <td align="center">
              <input type="checkbox" name="checkName" value="goodsCode">
              <input type="hidden" name="goodsCodeList" value="goodsCode">
            </td>
            <td align="center">001-100525-001</td>
            <td align="center">
              <html:link action="/goodsDetail" paramName="view" paramId="goodsCode" paramProperty="goodsCode">商品名 </html:link>
            </td>
            <td align="center">会社</td>
            <td align="right">1,000</td>
            <td align="center">メモ</td>
            <td align="center">
              <input type="number" name="buyCnt" min="1" max="999">
            </td>
          </tr>
        </table>
        <br>
        <br>
        <button type=submit onclick="cartChoice">お買い物かごに入れる</button>
      </html:form>
    </div>
@endsection