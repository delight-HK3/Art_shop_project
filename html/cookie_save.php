<?
	@extract($_POST);
	@extract($_GET);
	@extract($_COOKIE);

	setcookie("cookie_value".$irum);
?>
<script>location.href="cookie_view.php"</script>