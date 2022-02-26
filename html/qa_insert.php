<?
	include "common.php";
	$title=$_REQUEST[title];
	$name=$_REQUEST[name];
	$passwd=$_REQUEST[passwd];
	$email=$_REQUEST[email];
	$yn_text=$_REQUEST[yn_text];
	$content=$_REQUEST[content];
	
	if($yn_text == "Y"){
		$ishtml=1;
		$content=addslashes($content);
	}
	else{
		$ishtml=0;
	}
	
	$writeday=date("Y-m-d");
	$query="insert into qa(title11,name11,email11,passwd11,writeday11,count11,ishtml11,contents11) 
			value('$title','$name','$email','$passwd','$writeday',0,'$ishtml','$content')";
	$result=mysqli_query($db,$query); //sql 실행
	if (!$result){
		exit("에러 : $query");  //에러조사
	}
	echo("<script>location.href='qa.php'</script>");
?>