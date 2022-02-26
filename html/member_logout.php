<?
	@extract($_POST);
	@extract($_GET);
	@extract($_COOKIE);

	setcookie("cookie_no","");
	setcookie("cookie_name","");

	echo("<script>location.href='index.html'</script>");
?>