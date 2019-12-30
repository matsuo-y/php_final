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
			<a href="/ymMVC/index.jsp"><img src="/ymMVC/img/logo.png" /></a><br>
			<br>
		</div>
	</div>
	<div align="center" class="caption">
		<img src="/ymMVC/img/masuda_online.png" /> <br> <br> <br><jsp:include
			page="/pages/modules/includeRegist.jsp" /><br>
		<html:errors />
		<br>
		<html:form action="/loginac">
			ログインID<html:text property="id" value="" />
			<br>
			パスワード<html:password property="password" />
			<br>
			<br>
			<html:submit>
				<bean:message key="button.login" />
			</html:submit>
			<html:reset>
				<bean:message key="button.clear" />
			</html:reset>
		</html:form>
	</div>
	<jsp:include page="/pages/modules/includeBottom.jsp" />
</body>
</html>