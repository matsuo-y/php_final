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
<title>商品詳細</title>
</head>
<body>
	<div class="top-div">
		<div id="title-link " align="left">
			<a href="/ymMVC/index.jsp"><img src="/ymMVC/img/logo.png" /></a>
		</div><jsp:include page="/pages/modules/includeMemTopLogin.jsp" />
	</div>
	<div align="center" class="caption">
		◆商品詳細【
		<c:out value="${sessionScope.goodsDetail.goodsName }" />
		】<br> <br> <br>
		<html:img src="${sessionScope.goodsDetail.picture }" />
		<br> <br>
		<c:out value="${sessionScope.goodsDetail.memo }" />
		<br> <br>価格 ：
		<c:out value="${sessionScope.goodsDetail.addTaxPrice }" />
		円(税込)<br>
		<html:form action="/goodsDetailChoice">
			<br>
			<html:errors />
			<br>
			<br>
		購入数<html:text property="buyCnt" value="" />個<br>
			<br>
			<html:submit property="goodsDetailChoice">
				<bean:message key="button.cartIn" />
			</html:submit>
			<html:submit property="goodsDetailChoice">
				<bean:message key="button.back" />
			</html:submit>
		</html:form>
		<jsp:include page="/pages/modules/includeBottom.jsp" />
	</div>
</body>
</html>