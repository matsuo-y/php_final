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
<title>会員情報確認</title>
</head>
<body>
	<div class="top-div">
		<div id="title-link " align="left">
			<a href="/ymMVC/index.jsp"><img src="/ymMVC/img/logo.png" /></a><br>
			<br>
		</div>
	</div>
	<div align="left" class="caption">
		この内容で登録しますか？<br> <br>●会員情報<br> <br>
		<html:form action="/registac">
			<table class="table-tate">
				<tr>
					<th>会員NO</th>
					<td>自動採番</td>
				</tr>
				<tr>
					<th>氏名</th>
					<td><c:out value="${sessionScope.registData.name }" /></td>
				</tr>
				<tr>
					<th>年齢</th>
					<td><c:out value="${sessionScope.registData.age }" /></td>
				</tr>
				<tr>
					<th>性別</th>
					<td><c:out value="${sessionScope.registData.sex }" /></td>
				</tr>
				<tr>
					<th>郵便番号</th>
					<td><c:out value="${sessionScope.registData.zip }" /></td>
				</tr>
				<tr>
					<th>住所</th>
					<td><c:out value="${sessionScope.registData.address }" /></td>
				</tr>
				<tr>
					<th>電話番号</th>
					<td><c:out value="${sessionScope.registData.tel }" /></td>
				</tr>
				<tr>
					<th>登録日</th>
					<td><span id="currentDate"></span> <jsp:include
							page="/pages/modules/includeDate.jsp" /></td>
				</tr>
			</table>
			<br>
			<br>
			<html:submit property="registChoice">
				<bean:message key="button.regist" />
			</html:submit>
			<html:submit property="registChoice">
				<bean:message key="button.back" />
			</html:submit>
		</html:form>
	</div>
	<jsp:include page="/pages/modules/includeBottom.jsp" />
</body>
</html>