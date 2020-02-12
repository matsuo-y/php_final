@extends('layouts.app')

@section('content')
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
@endsection