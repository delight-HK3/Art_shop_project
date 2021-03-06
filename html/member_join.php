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
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				z-index: 1;
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
		<script language = "javascript">
			function FindZip(zip_kind) 
			{
				window.open("zipcode.php?zip_kind="+zip_kind, "", "scrollbars=no,width=500,height=250");
			}
			function search_id(){
				if (!form2.uid.value) {
					alert("ID??? ??????????????????.");	
					form2.uid.focus();	
					return;
				}
				window.open("member_idcheck.php?uid="+form2.uid.value,"","scrollbars=no,width=300,height=200");
			}
			function Check_Value() {
				if (!form2.check_id.value) {
					alert("??????ID ????????? ?????? ????????????.");	form2.uid.focus();	return;
				}
				if (!form2.uid.value) {
					alert("???????????? ?????????????????????.");	form2.uid.focus();	return;
				}
				if (!form2.pwd.value) {
					alert("????????? ?????????????????????.");	form2.pwd.focus();	return;
				}
				if (!form2.pwd1.value) {
					alert("????????? ?????????????????????.");	form2.pwd1.focus();	return;
				}
				if (form2.pwd.value != form2.pwd1.value) {
					alert("????????? ???????????? ????????????.");	
					form2.pwd.focus();	return;
				}
				if (!form2.birthday1.value || !form2.birthday2.value || !form2.birthday3.value) {
					alert("????????? ?????????????????????.");	form2.birthday1.focus();	return;
				}
				if (!form2.tel1.value || !form2.tel2.value || !form2.tel3.value) {
					alert("??????????????? ?????????????????????.");	form2.tel1.focus();	return;
				}
				if (!form2.phone1.value || !form2.phone2.value || !form2.phone3.value) {
					alert("???????????? ?????????????????????.");	form2.phone1.focus();	return;
				}
				if (!form2.zip.value) {
					alert("??????????????? ?????????????????????.");	form2.zip.focus();	return;
				}
				if (!form2.juso.value) {
					alert("????????? ?????????????????????.");	form2.juso.focus();	return;
				}
				if (!form2.email.value) {
					alert("???????????? ?????????????????????.");	form2.email.focus();	return;
				}
				form2.submit();
			}
		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="include/js/bootstrap.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="form-signin">
			<div class="card align-middle" style="width:50rem; height:69rem; border-radius:30px;">
				<div class="card-title" align="center" style="margin-top:10px;" >
					<a href="index.html"><img src="images/Happy_Art_Shop/main_Logo_small.png"></a>
				</div>
				<div class="card-body">
					<div class="container"><!-- ???????????? ?????? ?????? -
					<!-- form2 ?????? -->
						<form name="form2" method="post" action="member_insert.php" >
						<input type="hidden" name="check_id"  value=""> 
							<div class="form-inline">
								<div style="width: 100px">
									<label><h5>?????????</h5></label>
								</div>
								<div style="margin-right:10px">
									<input type="text" style="width: 20rem" class="form-control" placeholder="?????????" name="uid" maxlength = "12" value=""> 
								</div>
								<div>
									<input type="button" class="btn btn-lg btn-primary" type="submit" value="????????????" onClick="search_id();">
								</div>
							</div>
							<p></p>
							<div class="form-inline">
								<div style="width: 100px">
									<label><h5>????????????</h5></label>
								</div>
								<div style="margin-right:10px">
									<input type="password" style="width: 29rem" class="form-control" placeholder="???????????? ??????" name="pwd" maxlength = "15" value=""> 
								</div>
							</div>
							<p></p>
							<div class="form-inline">
								<div style="width: 100px">
									<label><h5>???????????? ??????</h5></label>
								</div>
								<div style="margin-right:10px">
									<input type="password" style="width: 29rem" class="form-control" name="pwd1" maxlength = "15" value=""> 
								</div>
							</div>
							<p></p>
							<div class="form-inline">
								<div style="width: 100px">
									<label><h5>??????</h5></label>
								</div>
								<div style="margin-right:10px">
									<input type="text" style="width: 20rem" class="form-control" placeholder="??????" name="name" maxlength = "10" value=""> 
								</div>
							</div>
							<p></p>
							<div class="form-inline">
								<div style="width: 100px">
									<label><h5>????????????</h5></label>
								</div>
								<div style="margin-right:5px">
									<input type="text" style="width: 5rem" class="form-control" name='birthday1' maxlength = "4" value=""> 
								</div>
								<h5>???</h5>
								<div style="margin-right:5px; margin-left:5px">
									<input type="text" style="width: 5rem" class="form-control" name='birthday2' maxlength = "2" value=""> 
								</div>
								<h5>???</h5>
								<div style="margin-right:5px; margin-left:5px">
									<input type="text" style="width: 5rem" class="form-control" name='birthday3' maxlength = "2" value=""> 
								</div>
								<h5>???</h5>
							</div>
							<p></p>
							<div class="form-inline">
								<div style="width: 100px">
									<label><h5>??????/??????</h5></label>
								</div>
								<label class="radio-inline">
									<input type="radio" name="sm" value="0" checked>
								</label>
								<h5 style="margin-right:10px; margin-top:5px; margin-bottom:0px">??????</h5>
								<label class="radio-inline">
									<input type="radio" name="sm" value="1">
								</label>
								<h5 style="margin-top:5px; margin-bottom:0px">??????</h5>
							</div>
							<p></p>
							<div class="form-inline">
								<div style="width: 100px">
									<label><h5>????????????</h5></label>
								</div>
								<div>
									<input type="text" style="width: 5rem" class="form-control" name='tel1' maxlength = "3" value="">
								</div>
								<h2>-</h2>
								<div>
									<input type="text" style="width: 5rem" class="form-control" name='tel2' maxlength = "4" value="">
								</div>
								<h2>-</h2>
								<div>
									<input type="text" style="width: 5rem" class="form-control" name='tel3' maxlength = "4" value="">  
								</div>
							</div>
							<p></p>
							<div class="form-inline">
								<div style="width: 100px">
									<label><h5>????????? ??????</h5></label>
								</div>
								<div>
									<input type="text" style="width: 5rem" class="form-control" name='phone1' maxlength = "3" value="">
								</div>
								<h2>-</h2>
								<div>
									<input type="text" style="width: 5rem" class="form-control" name='phone2' maxlength = "4" value="">
								</div>
								<h2>-</h2>
								<div>
									<input type="text" style="width: 5rem" class="form-control" name='phone3' maxlength = "4" value="">  
								</div>
							</div>
							<p></p>
							<div class="form-inline">
								<div style="width: 100px">
									<label><h5>??????</h5></label>
								</div>
								<div style="margin-right:10px">
									<input type="text" style="margin-bottom:5px" name='zip' size = "5" maxlength = "5" value = "" class="form-control">
									<input type="button" style="margin-bottom:5px" class="btn btn-lg btn-primary" type="submit" value="????????????" onClick="location.href='javascript:FindZip(0);'">
									<br><input type="text" name='juso' style="width: 30rem" maxlength = "200" value = "" class="form-control">
								</div>
							</div>
							<p></p>
							<div class="form-inline">
								<div style="width: 100px">
									<label><h5>?????????</h5></label>
								</div>
								<div style="margin-right:10px">
									<input type="text" name='email' style="width: 30rem" maxlength = "50" value = "" class="form-control">
								</div>
							</div>
						</form>	
					<!-- form2 ??? -->
					</div>
					<div class="panel-footer">   
						<div class="container">
							<div class="row">
								<div class=" col-sm-6">
									<div>
										<button class="btn btn-lg btn-primary btn-block" type="submit" onClick="javascript:form2.reset();">????????????</button>
									</div>
								</div>
								<div class=" col-sm-6">
									<div>
										<button class="btn btn-lg btn-success btn-block" onClick="javascript:Check_Value();">???????????? ??????</button>
									</div>
								</div>
							</div>
						</div>
					</div>
						
				</div>
			</div>
		</div>
	</body>

</html>
