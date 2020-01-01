<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>会員番号発行</title>
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
    <div align="center" class="caption">会員登録が完了しました。
      <br>
      <br>あなたの会員NOは XXXX です。
      <br>
      <br>
      <button type=button onclick="registChoice">戻る</button>
      <a href="{{ url('/menu') }}">メニューへ</a>
    </div>
  </body>
</html>