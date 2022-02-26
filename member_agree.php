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
	<script language = "javascript">
		function GoMain() 
		{
			location.href = "index.html";
		}
		function CheckAgree() 
		{
			if (form2.agree.checked == false) 
			{
				alert("회원가입약관 내용에 동의를 체크해 주십시오.");
				return;
			}
			location.href = "member_join.php";
		}
	</script>

		<main class="form-signin">
		<div class="card align-middle" style="width:50rem; height:63rem; border-radius:30px;">
			<div class="card-title" align="center" style="margin-top:10px;" >
				<a href="index.html"><img src="images/Happy_Art_Shop/main_Logo_small.png"></a>
			</div>
			<div class="card-body">
				<div class="panel panel-default">
					<div class="panel-heading">회원가입약관</div> 
					<!-- panel heading -->
					
					<div class="panel-body">
						<div class="form-group pull-left">
							<label class="control-label"> 회원가입 약관 </label>
							<div class="col-xs-12">
								<textarea class="form-control" readonly="" rows="12" cols="110">제1장. 총칙
									[Happy Art Shop] 쇼핑몰은 공정거래위원회에서 심의한 표준약관을 사용하고 있습니다

									제1조(목적)
									이 약관은 Happy Art Shop 회사(전자상거래 사업자)가 운영하는 Happy Art Shop 사이버 몰
									(이하 “몰”이라 한다)에서 제공하는 인터넷 관련 서비스(이하 “서비스”라 한다)를
									이용함에 있어 사이버 몰과 이용자의 권리/의무 및 책임사항을 규정함을 목적으로 합니다.

									※「PC통신, 무선 등을 이용하는 전자상거래에 대해서도 그 성질에 반하지 않는 한 
									이 약관을 준용합니다」

									제2조(정의)
									①“몰” 이란 Happy Art Shop 회사가 재화 또는 용역(이하 “재화등”이라 함)을 이용자에게
									제공하기 위하여 컴퓨터등 정보통신설비를 이용하여 재화등을 거래할 수 있도록 설정한 
									가상의 영업장을 말하며, 아울러 사이버몰을 운영하는 사업자의 의미로도 사용합니다.

									. . .

									제24조(재판권 및 준거법)
									①“몰”과 이용자간에 발생한 전자상거래 분쟁에 관한 소송은 제소 당시의 이용자의
									주소에 의하고, 주소가 없는 경우에는 거소를 관할하는 지방법원의 전속관할로 합니다. 
									다만, 제소 당시 이용자의 주소 또는 거소가 분명하지 않거나 외국 거주자의 경우에는
									민사소송법상의 관할법원에 제기합니다.

									②“몰”과 이용자간에 제기된 전자상거래 소송에는 한국법을 적용합니다.
								</textarea>
							</div>
							<div class="col-xs-12">
								<div class="checkbox pull-right">			
									<form name = "form2">
										<input type="checkbox" name="agree" value="ok">회원가입 약관에 동의합니다.
									</form>						
								</div>
							</div>
						</div>	
					</div><!-- panel body -->
					
					<div class="panel-footer">   
						<div class="container">
							<div class="row">
								<div class=" col-sm-6">
									<div>
										<button class="btn btn-lg btn-primary btn-block" onClick="javascript:GoMain();">메 인 화 면</button>
									</div>
								</div>
								<div class=" col-sm-6">
									<div>
										<button class="btn btn-lg btn-primary btn-block" type="submit" onClick="javascript:CheckAgree();">다 음 단 계</button>
									</div>
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