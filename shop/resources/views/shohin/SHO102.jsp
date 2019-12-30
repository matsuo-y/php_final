<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@taglib uri="http://struts.apache.org/tags-html" prefix="html"%>
<%@taglib uri="http://struts.apache.org/tags-logic" prefix="logic"%>
<%@taglib uri="http://struts.apache.org/tags-bean" prefix="bean"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="/ymMVC/css/design.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/ymMVC/js/action.js"></script>
<title>商品一覧</title>
</head>
<body>
	<div class="top-div">
		<div id="title-link " align="left">
			<a href="/ymMVC/index.jsp"><img src="/ymMVC/img/logo.png" /></a>
		</div><jsp:include page="/pages/modules/includeMemTopLogin.jsp" />
	</div>
	<div align="left" class="caption">
		<br> ●検索条件<br> <br>
		<table>
			<tr>
				<th>カテゴリ</th>
				<td align="center"><c:out
						value="${sessionScope.searchOption.category }" /></td>
			</tr>
			<tr>
				<th>商品名</th>
				<td align="center"><c:out
						value="${sessionScope.searchOption.goodsName }" /></td>
			</tr>
			<tr>
				<th>販売元</th>
				<td align="center"><c:out
						value="${sessionScope.searchOption.maker }" /></td>
			</tr>
			<tr>
				<th>金額上限</th>
				<td align="center"><c:out
						value="${sessionScope.searchOption.priceMax }" /></td>
			</tr>
			<tr>
				<th>金額下限</th>
				<td align="center"><c:out
						value="${sessionScope.searchOption.priceMin }" /></td>
			</tr>
		</table>
		<br> <br> ●商品一覧<br> <br>
		<jsp:include page="/pages/modules/includeGoodsPaging.jsp" /><br>
		<html:errors />
		<br>
		<html:form action="/cartac">
			<table>
				<tr>
					<th>選択</th>
					<th>商品登録コード</th>
					<th>商品名</th>
					<th>販売元</th>
					<th>金額</th>
					<th>メモ</th>
					<th>購入数</th>
				</tr>
				<logic:iterate id="view" name="viewGoods" scope="session">
					<tr>
						<td align="center"><html:multibox property="checkName"
								value="${view.goodsCode }"></html:multibox> <html:hidden
								property="goodsCodeList" value="${view.goodsCode }" /></td>
						<td align="center"><bean:write name="view"
								property="goodsCode" /></td>
						<td align="center"><html:link action="/goodsDetail"
								paramName="view" paramId="goodsCode" paramProperty="goodsCode">
								<bean:write name="view" property="goodsName" />
							</html:link></td>
						<td align="center"><bean:write name="view" property="maker" /></td>
						<td align="right"><bean:write name="view" property="price" />円</td>
						<td align="center"><bean:write name="view" property="memo" /></td>
						<td align="center"><html:text name="view" property="buyCnt"
								value="" /></td>
					</tr>
				</logic:iterate>
			</table>
			<br>
			<br>
			<html:submit property="cartChoice">
				<bean:message key="button.cartIn" />
			</html:submit>
			<html:submit property="cartChoice">
				<bean:message key="button.back" />
			</html:submit>
		</html:form>
	</div>
	<jsp:include page="/pages/modules/includeBottom.jsp" />
</body>
</html>