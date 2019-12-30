<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@taglib uri="http://struts.apache.org/tags-html" prefix="html"%>
<%@taglib uri="http://struts.apache.org/tags-logic" prefix="logic"%>
<%@taglib uri="http://struts.apache.org/tags-bean" prefix="bean"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- 最終課題のページ -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="/ymMVC/css/design.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/ymMVC/js/action.js"></script>
<title>メニュー</title>
</head>
<body>
	<div class="top-div">
		<div id="title-link " align="left">
			<a href="/ymMVC/index.jsp"><img src="/ymMVC/img/logo.png" /></a>
		</div>
		<jsp:include page="/pages/modules/includeMemTop.jsp" />
	</div>
	<br>
	<div align="center">
		<html:form action="/goRegist">
			<html:image src="/ymMVC/img/button/shinki.png" align="middle">
			</html:image>会員情報の新規登録を行います。　　　　<br>
		</html:form>
		<html:form action="/goChange">
			<html:image src="/ymMVC/img/button/kaiin.png" align="middle" />会員情報の修正または削除を行います。<br>
		</html:form>
		<html:form action="/goGoodsSearch">
			<html:image src="/ymMVC/img/button/shouhin.png" align="middle" />購入する商品の検索を行います。　　　　　<br>
		</html:form>
		<html:form action="/goCart">
			<html:image src="/ymMVC/img/button/okaimono.png"
				property="menuChoice" value="button.doOrder" align="middle" />商品の注文を行います。　　　　　　　　　　　<br>
			<br>
		</html:form>
		<jsp:include page="/pages/modules/includeLogout.jsp" />
		<jsp:include page="/pages/modules/includeBottom.jsp" />
	</div>
</body>
</html>