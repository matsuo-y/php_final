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
<title>会員情報入力</title>
</head>
<body>
	<div class="top-div">
		<div id="title-link " align="left">
			<a href="/ymMVC/index.jsp"><img src="/ymMVC/img/logo.png" /></a><br>
			<br>
		</div>
	</div>
	<div align="left" class="caption">
		会員情報を入力してください<br> <br>
		<html:errors />
		<br>●会員情報<br> <br>
		<html:form action="/preRegistac">
			<table class="table-tate">
				<tr>
					<th>会員NO</th>
					<td>自動採番</td>
				</tr>
				<tr>
					<th>氏名</th>
					<td><html:text property="name" /></td>
				</tr>
				<tr>
					<th>パスワード</th>
					<td><html:password property="password" /></td>
				</tr>
				<tr>
					<th>パスワード(確認用)</th>
					<td><html:password property="password2" /></td>
				</tr>
				<tr>
					<th>年齢</th>
					<td><html:text property="age" value="" /></td>
				</tr>
				<tr>
					<th>性別(選択してください)</th>
					<td><html:select property="sex" value="">
							<html:option value=""></html:option>
							<html:option value="男">男</html:option>
							<html:option value="女">女</html:option>
						</html:select>
				</tr>
				<tr>
					<th>郵便番号(ハイフンあり)</th>
					<td><html:text property="zip" /></td>
				</tr>
				<tr>
					<th>住所</th>
					<td><html:textarea property="address" cols="23" rows="5" /></td>
				</tr>
				<tr>
					<th>電話番号(ハイフンあり)</th>
					<td><html:text property="tel" /></td>
				</tr>
				<tr>
					<th>登録日</th>
					<td><span id="currentDate"></span> <jsp:include
							page="/pages/modules/includeDate.jsp" /></td>
				</tr>
			</table>
			<br>
			<br>
			<html:submit property="preRegistChoice">
				<bean:message key="button.regist" />
			</html:submit>
			<html:submit property="preRegistChoice">
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