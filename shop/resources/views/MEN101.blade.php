<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ユーザメニュー</title>
    <link href="/ymMVC/css/design.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/ymMVC/js/action.js"></script>
  </head>
  <body>
    <div class="top-div">
      <div id="title-link " align="left">オンラインショッピングサイト</div>
      <div align="right">
        <span class="date">2019/12/30</span>
        <br>
        <span class="pnk">「XXXX」さん</span>
      </div>
    </div>
    <br>
    <div align="center">
      <a href="{{ url('/regist') }}" align="middle">新規会員登録</a>会員情報の新規登録を行います。　　　　
      <br>
      <a href="{{ url('/search') }}" align="middle">商品検索</a>購入する商品の検索を行います。　　　　　
      <br>
      <a href="{{ url('/cart') }}" align="middle">お買い物かご</a>>商品の注文を行います。　　　　　　　　　　　
      <br>
      <br>
      <div align="center" class=".caption">
        <%
		String userName = (String) session.getAttribute("userName");
		if (!("ゲスト").equals(userName)) {
	%>
        <br>
        <form action="/logout">
          <button type=submit>ログアウト</button>
        </form>
        <br>
        <%
		}
	%>
      </div>
    </div>
  </body>
</html>