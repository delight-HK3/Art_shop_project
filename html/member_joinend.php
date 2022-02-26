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
		function GoMain() 
		{
			location.href = "index.html";
		}
	</script>

		<div class="form-signin">
			<div class="card align-middle" style="width:45rem; height:50rem; border-radius:30px;">
				<div class="card-title" align="center" style="margin-top:10px;" >
					<a href="index.html"><img src="images/Happy_Art_Shop/main_Logo_small.png"></a>
				</div>
				<div class="card-body">
					<div class="container" align="center" style="margin-bottom:30px">
						<img src="images/Happy_Art_Shop/coment.png">
					</div>
					<div class="panel-footer">   
						<div class="container">
							<button class="btn btn-lg btn-primary btn-block" type="submit" onClick="javascript:GoMain();">메 인 으 로</button>
						</div>
					</div>
						
				</div>
			</div>
		</div>
	</body>

</html>