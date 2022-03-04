<?php
	$no=$_REQUEST[no];
?>
<html>
	<title>Happy Art Shop</title>
		<head>
    			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="author" content="">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="">
			<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
			<meta name="generator" content="Hugo 0.83.1">
			<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
			<link href="include/css/bootstrap.min.css" rel="stylesheet">
			<link href="include/css/carousel.css" rel="stylesheet">
			<link rel="stylesheet" href="include/css/bootstrap.css">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
			<script src="http://code.jquery.com/jquery.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<!-- Favicons -->
			<link href="include/css/signin.css" rel="stylesheet">
			<meta name="theme-color" content="#7952b3">
			
			<style>
			      .bd-placeholder-img {
				font-size: 1.125rem;
				text-anchor: middle;
				-webkit-user-select: none;
				-moz-user-select: none;
				user-select: none;
			      }

			      @media (min-width: 768px) {
				.bd-placeholder-img-lg {
				  font-size: 3.5rem;
				}
			      }
				  HTML {
						height: 100%;
					}
					BODY {
						min-height: 100%;
						background-image: url("images/Happy_Art_Shop/background.jpg");
						background-position: center ;
						background-repeat: no-repeat;
						background-size: cover;
					}
					.card {
					margin: 0 auto; /* Added */
					float: none; /* Added */
					margin-bottom: 10px; /* Added */
					box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				}
	
				.form-signin .form-control {
					position: relative;
					height: auto;
					-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
					box-sizing: border-box;
					padding: 4px;
					font-size: 14px;
				}
			</style>
			<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
			<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
			<script language = "javascript">
				function check_pw()	{
					if (!form2.pwd1.value) {
						alert("새 비밀번호를 입력하십시오.");	
						form2.pwd1.focus();	
						return;
					}
					if (!form2.pwd2.value) {
						alert("확인할 비밀번호를 입력하십시오.");	
						form2.pwd2.focus();	
						return;
					}
					if (form2.pwd1.value != form2.pwd2.value) {
						alert("암호가 일치하지 않습니다.");	
						form2.pwd1.focus();	
						return;
					}
					form2.submit();
				}
			</script>
		</head>
	<body>
		<div class="card align-middle" style="width:30rem; height:35rem; border-radius:30px;">
			<form name="form2" method="post" action="member_updatepw.php">
				<input type="hidden" name="no" value="<?=$no?>">
				<div class="card-title" align="center" style="margin-top:10px;" >
					<a href="index.html"><img src="images/Happy_Art_Shop/main_Logo_small.png"></a>
				</div><br>
				<div class="container">
					<h3 align="center">새 비밀번호를 입력하세요</h3><br>
					<div class="form-inline">
						<div style="width: 110px">
							<label><h5>새 비밀번호 : </h5></label>
						</div>
						<div style="margin-right:10px">
							<input type="password" style="width: 14rem; height: 3rem; font-size : 13px" class="form-control" placeholder="새 비밀번호" name="pwd1" maxlength = "10" value="">
						</div>
					</div><br>
					<div class="form-inline">
						<div style="width: 110px">
							<label><h5>새 비밀번호 확인 : </h5></label>
						</div>
						<div style="margin-right:10px">
							<input type="password" name="pwd2" style="width: 14rem; height: 3rem; font-size : 13px" maxlength = "10" placeholder="새 비밀번호 확인" value = "" class="form-control">
						</div>
					</div><br>
					<div class="row" style="margin:10px">	
						<input type="button" class="btn btn-lg btn-success btn-block" type="submit" value="PW 변경" onClick="location.href='javascript:check_pw();'">
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
