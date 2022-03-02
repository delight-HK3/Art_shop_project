<?php
	include "common.php";
	$cookie_no=$_COOKIE[cookie_no];

	$query="select * from member where no11= $cookie_no;";
	$result=mysqli_query($db,$query); //sql 실행
	if (!$result){
		exit("에러: $query");  //에러조사
	}
	$row=mysqli_fetch_array($result); //1레코드 읽기
	
	$tel1=trim(substr($row[tel11],0,3));
	$tel2=trim(substr($row[tel11],3,4));
	$tel3=trim(substr($row[tel11],7,4));

	$phone1=trim(substr($row[phone11],0,3));
	$phone2=trim(substr($row[phone11],3,4));
	$phone3=trim(substr($row[phone11],7,4));

	$birthday1=substr($row[birthday11],0,4);
	$birthday2=substr($row[birthday11],5,2);
	$birthday3=substr($row[birthday11],8,2);
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
	</head>
	<body>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="include/js/bootstrap.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script language = "javascript">
			function FindZip(zip_kind) 
			{
				window.open("zipcode.php?zip_kind="+zip_kind, "", "scrollbars=no,width=500,height=250");
			}
			function Check_Value() {
				if (form2.pwd1.value != form2.pwd2.value) {
					alert("암호가 일치하지 않습니다.");	
					form2.pwd1.focus();	return;
				}
				if (!form2.name.value) {
					alert("이름이 잘못되었습니다.");	form2.name.focus();	return;
				}
				if (!form2.birthday1.value || !form2.birthday2.value || !form2.birthday3.value) {
					alert("생일이 잘못되었습니다.");	form2.birthday1.focus();	return;
				}
				if (!form2.tel1.value || !form2.tel2.value || !form2.tel3.value) {
					alert("전화번호가 잘못되었습니다.");	form2.tel1.focus();	return;
				}
				if (!form2.phone1.value || !form2.phone2.value || !form2.phone3.value) {
					alert("핸드폰 번호가 잘못되었습니다.");	form2.phone1.focus();	return;
				}
				if (!form2.zip.value) {
					alert("우편번호가 잘못되었습니다.");	form2.zip.focus();	return;
				}
				if (!form2.juso.value) {
					alert("주소가 잘못되었습니다.");	form2.juso.focus();	return;
				}
				if (!form2.email.value) {
					alert("이메일이 잘못되었습니다.");	form2.email.focus();	return;
				}
				form2.submit();
			}
		</script>

		<main class="form-signin">
			<div class="card align-middle" style="width:50rem; height:71rem; border-radius:30px;">
				<div class="card-title" align="center" style="margin-top:10px;" >
					<a href="index.html"><img src="images/Happy_Art_Shop/main_Logo_small.png"></a>
				</div>
				<div class="card-body">
					<div class="container"><!-- 좌우측의 공간 확보 -
					<!-- form2 시작 -->
					
						<form name="form2" method="post" action="member_update.php" >
							<div class="form-inline">
								<div style="width: 100px">
									<label><h5>아이디</h5></label>
								</div>
								<div style="margin-right:10px">
									<h5>나의 아이디</h5>
								</div>
							</div>
							<p></p>
							<div class="form-inline">
								<div style="width: 100px">
									<label><h5>비밀번호</h5></label>
								</div>
								<div style="margin-right:10px">
									<h5><?=$row[pwd11]?></h5> 
								</div>
							</div>
							<p></p>
							<div class="form-inline">
								<div style="width: 100px">
									<label><h5>새비밀번호</h5></label>
								</div>
								<div style="margin-right:10px">
									<input type="password" style="width: 29rem" class="form-control" name="pwd1" maxlength = "15" value=""> 
								</div>
							</div>
							<p></p>
							<div class="form-inline">
								<div style="width: 100px">
									<label><h5>새비밀번호 확인</h5></label>
								</div>
								<div style="margin-right:10px">
									<input type="password" style="width: 29rem" class="form-control" name="pwd2" maxlength = "15" value="">
									<br><h5>비밀번호 변경시에만 입력하세요.</h5>
								</div>
							</div>
							<p></p>
							<div class="form-inline">
								<div style="width: 100px">
									<label><h5>이름</h5></label>
								</div>
								<div style="margin-right:10px">
									<input type="text" style="width: 20rem" class="form-control" placeholder="이름" name="name" maxlength = "10" value="<?=$row[name11]?>"> 
								</div>
							</div>
							<p></p>
							<div class="form-inline">
								<div style="width: 100px">
									<label><h5>생년월일</h5></label>
								</div>
								<div style="margin-right:5px">
									<input type="text" style="width: 5rem" class="form-control" name='birthday1' maxlength = "4" value="<?=substr($row[birthday11],0,4);?>"> 
								</div>
								<h5>년</h5>
								<div style="margin-right:5px; margin-left:5px">
									<input type="text" style="width: 5rem" class="form-control" name='birthday2' maxlength = "2" value="<?=substr($row[birthday11],5,2);?>"> 
								</div>
								<h5>월</h5>
								<div style="margin-right:5px; margin-left:5px">
									<input type="text" style="width: 5rem" class="form-control" name='birthday3' maxlength = "2" value="<?=substr($row[birthday11],8,2);?>"> 
								</div>
								<h5>일</h5>
							</div>
							<p></p>
							<div class="form-inline">
								<div style="width: 100px">
									<label><h5>양력/음력</h5></label>
								</div>
								<?php
									if($row[sm11]==0){
										echo("<label class='radio-inline'>
											<input type='radio' name='sm' value='0' checked>
										</label>
										<label style='margin-right:10px'>양력</label>
										<label class='radio-inline'>
											<input type='radio' name='sm' value='1'>
										</label>
										<label>음력</label>");
									}
									else{
										echo("<label class='radio-inline'>
											<input type='radio' name='sm' value='0'>
										</label>
										<label style='margin-right:10px'>양력</label>
										<label class='radio-inline'>
											<input type='radio' name='sm' value='1' checked>
										</label>
										<label>음력</label>");
									}
								?>
							</div>
							<p></p>
							<div class="form-inline">
								<div style="width: 100px">
									<label><h5>전화번호</h5></label>
								</div>
								<div>
									<input type="text" style="width: 5rem" class="form-control" name='tel1' maxlength = "3" value="<?=substr($row[tel11],0,3);?>">
								</div>
								<h2>-</h2>
								<div>
									<input type="text" style="width: 5rem" class="form-control" name='tel2' maxlength = "4" value="<?=substr($row[tel11],3,4);?>">
								</div>
								<h2>-</h2>
								<div>
									<input type="text" style="width: 5rem" class="form-control" name='tel3' maxlength = "4" value="<?=substr($row[tel11],7,4);?>">  
								</div>
							</div>
							<p></p>
							<div class="form-inline">
								<div style="width: 100px">
									<label><h5>휴대폰 번호</h5></label>
								</div>
								<div>
									<input type="text" style="width: 5rem" class="form-control" name='phone1' maxlength = "3" value="<?=substr($row[phone11],0,3);?>">
								</div>
								<h2>-</h2>
								<div>
									<input type="text" style="width: 5rem" class="form-control" name='phone2' maxlength = "4" value="<?=substr($row[phone11],3,4);?>">
								</div>
								<h2>-</h2>
								<div>
									<input type="text" style="width: 5rem" class="form-control" name='phone3' maxlength = "4" value="<?=substr($row[phone11],7,4);?>">  
								</div>
							</div>
							<p></p>
							<div class="form-inline">
								<div style="width: 100px">
									<label><h5>주소</h5></label>
								</div>
								<div style="margin-right:10px">
									<input type="text" style="margin-bottom:5px" name='zip' size = "5" maxlength = "5" value = "<?=$row[zip11]?>" class="form-control">
									<input type="button" style="margin-bottom:5px"class="btn btn-lg btn-primary" type="submit" value="우편번호" onClick="location.href='javascript:FindZip(0);'">
									<br><input type="text" name='juso' style="width: 30rem" maxlength = "200" value = "<?=$row[juso11]?>" class="form-control">
								</div>
							</div>
							<p></p>
							<div class="form-inline">
								<div style="width: 100px">
									<label><h5>이메일</h5></label>
								</div>
								<div style="margin-right:10px">
									<input type="text" name='email' style="width: 30rem" maxlength = "50" value = "<?=$row[email11]?>" class="form-control">
								</div>
							</div>
						</form>	
					</div>
					<!-- form2 끝 -->
					<div class="panel-footer">   
						<div class="container">
							<div class="row">
								<div class=" col-sm-6">
									<div>
										<button class="btn btn-lg btn-primary btn-block" type="submit" onClick="javascript:form2.reset();">다 시 입 력</button>
									</div>
								</div>
								<div class=" col-sm-6">
									<div>
										<button class="btn btn-lg btn-success btn-block" onClick="javascript:Check_Value();">입력정보 등록</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</body>
</html>
