<?php
	@extract($_POST);
	@extract($_GET);
	@extract($_COOKIE);
?>
<html>
	<head>
		<title>Cookie</title>
	</head>
	<body>

	저장된 cookie값은 <font color="blue"><?php echo $cookie_value ?></font>입니다.
	&nbsp;&nbsp
	<a href="cookie.html">돌아가기</a>

	</body>
</html>
