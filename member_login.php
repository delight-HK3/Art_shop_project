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
</head>
	<body>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script language = "javascript">
		function GoAgree() 
		{
			location.href = "member_agree.php";
		}
	</script>

		<div class="form-signin">
		<div class="card align-middle" style="width:30rem; height:47rem; border-radius:30px;">
			<div class="card-title" align="center" style="margin-top:10px;" >
				<a href="index.html"><img src="images/Happy_Art_Shop/main_Logo_small.png"></a>
			</div>
			<div class="card-body">
				<form class="form-signin" action="member_check.php" method="POST" style="padding:10px; padding-bottom:5px">
					<h3 class="form-signin-heading">로그인 정보를 입력하세요</h3><br>
					
					<label for="inputEmail" class="sr-only">아이디</label>
					<input type="text" name="uid" class="form-control h-auto" placeholder="아이디" required autofocus><br>
					
					<label for="inputPassword" class="sr-only">비밀번호</label>
					<input type="password" name="pwd" class="form-control h-auto" placeholder="비밀번호" required><br>
					<button class="btn btn-lg btn-success btn-block" type="submit">로 그 인</button>				
				</form>
				
				<div class="container">
					<div class="row" style="padding:10px; padding-top:0px">
						<button style="margin:5px; margin-left:0px; margin-right:7px; width:120px" class="btn btn-lg btn-warning" onClick="location.href='member_searchid.php'">ID 찾기</button>
						<button style="margin:5px; margin-right:0px; width:120px" class="btn btn-lg btn-warning" onClick="location.href='member_searchpw.php'">PW 찾기</button>			
						<button class="btn btn-lg btn-primary btn-block" onClick="location.href='javascript:GoAgree();'">  회 원 가 입  </button>	
						<button class="btn btn-lg btn-primary btn-block" onClick="location.href='index.html'">   메 인 으 로  </button>
					</div>
				</div>
			</div>
		</div>
		</div>
	</body>

</html>