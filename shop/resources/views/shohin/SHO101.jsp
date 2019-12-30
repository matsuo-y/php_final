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
<title>検索条件入力</title>
</head>
<body>
	<div class="top-div">
		<div id="title-link " align="left">
			<a href="/ymMVC/index.jsp"><img src="/ymMVC/img/logo.png" /></a>
		</div><jsp:include page="/pages/modules/includeMemTopLogin.jsp" />
	</div>
	<div align="left" class="caption">
		検索条件を入力してください<br>
		<html:errors />
		<br>
		<html:form action="/goodsSearchac">
			<table class="table-tate">
				<tr>
					<th>カテゴリ</th>
					<td><html:select property="category">
							<html:options collection="categoryList" property="cateId"
								labelProperty="cateName" />
						</html:select></td>
				</tr>
				<tr>
					<th>商品名</th>
					<td><html:text property="goodsName" value="" /></td>
				</tr>
				<tr>
					<th>販売元</th>
					<td><html:text property="maker" value="" /></td>
				</tr>
				<tr>
					<th>金額上限</th>
					<td><html:text property="priceMax" value="" /></td>
				</tr>
				<tr>
					<th>金額下限</th>
					<td><html:text property="priceMin" value="" /></td>
				</tr>
			</table>
			<br>
			<br>
			<html:submit property="goodsSearchChoice">
				<bean:message key="button.search" />
			</html:submit>
			<html:submit property="goodsSearchChoice">
				<bean:message key="button.back" />
			</html:submit>
			<html:reset>
				<bean:message key="button.clear" />
			</html:reset>
		</html:form>
	</div>
	<jsp:include page="/pages/modules/includeBottom.jsp" />
</body>
</html>