<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2017.12)                                                    -->
<!-------------------------------------------------------------------------------------------->	
<?
	$cookie_no=$_COOKIE[cookie_no];
	$cookie_name=$_COOKIE[cookie_name];
?>		
	<script language="javascript">
		function Check_Value() {
			if (!form1.findtext.value) {
				alert("검색할 제품명을 입력해 주시기 바랍니다.");	
				form1.findetext.focus();	
				return;
			}
			form1.submit();
		}
	</script>

	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
	  	<!--화면 줄어들시 토글 생성 시작-->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Home</a>
        </div>
		<!--화면 줄어들시 토글 생성 끝--> 
        <div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
					<li class="dropdown ">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">제품분류 <span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu">
						<li><a href="product.php?menu=1">물감</a></li>
						<li><a href="product.php?menu=2">색연필</a></li>
						<li><a href="product.php?menu=3">붓</a></li>
						<li class="divider"></li>
						<li><a href="product.php?menu=4">마카</a></li>
						<li><a href="product.php?menu=5">용지</a></li>
						<li><a href="product.php?menu=6">부재료</a></li>
					  </ul>
					</li>
					<form class="navbar-form navbar-left" name="form1" method="post" action="product_search.php">
						<div class="form-group">
							<input type="search" name="findtext" class="form-control" placeholder="검색"/>
						</div>
					</form>
					<button style="margin-top:10px" type="submit" onclick="Check_Value()" class="btn btn-primary btn-default" ><i class="fa fa-search" aria-hidden="true"></i></button>
				</li>
			</ul>
				<ul class="nav navbar-nav navbar-right">
				<?
					if(!$cookie_no){
						echo("<li><a href='member_login.php'>Login</a></li>");
						echo("<li><a href='member_agree.php'>회원가입</a></li>");
					}
					else{
						echo("<li><a>환영합니다 $cookie_name 님</a></li>");
						echo("<li><a href='member_logout.php'>Logout</a></li>");
						echo("<li><a href='member_edit.php'>마이페이지</a></li>");
					}
				?>
					<li><a href="cart.php">장바구니</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
    </nav>

<!-- 설명 슬라이드 이미지 --------------------------------------------------->

<div id="myCarousel" class="carousel slide" style="margin-bottom:20px" data-ride="carousel">
    <ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
		<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		<li data-target="#myCarousel" data-slide-to="4" class=""></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/Happy_Art_Shop/Adsing1.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption"></div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="images/Happy_Art_Shop/Adsing2.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption"></div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="images/Happy_Art_Shop/Advertising3.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption"></div>
          </div>
        </div>
		<div class="item">
          <img class="fourth-slide" src="images/Happy_Art_Shop/Advertising4.png" alt="Fourth slide">
          <div class="container">
            <div class="carousel-caption"></div>
          </div>
        </div>
		<div class="item">
          <img class="fifth-slide" src="images/Happy_Art_Shop/Advertising1.png" alt="fifth slide">
          <div class="container">
            <div class="carousel-caption"></div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      </a>
	</div>
</div>
