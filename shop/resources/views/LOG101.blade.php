<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ユーザログイン</title>
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
    <div align="center" class="caption">
      <div class="caption" align="center">
        <%
		String goPage = (String) session.getAttribute("goPage");
		if (!("MEM201").equals(goPage)) {
	%>
        <a href="{{ url('/regist') }}">新規会員の方はこちら</a>
        <%
		}
	%>
      </div>
      <span>エラーをここに表示</span>
      <br>
      <form action="/loginac">会員NO
        <html:text property="id" value="" />
        <br>パスワード
        <html:password property="password" />
        <br>
        <br>
        <button type=submit>ログイン</button>
        <button type=reset>クリア</button>
      </form>
    </div>
  </body>
</html>