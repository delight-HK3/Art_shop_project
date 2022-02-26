<?
	include "common.php";
	$uid=$_REQUEST[uid];
	$pwd=$_REQUEST[pwd];
	
	$query="select no11, name11 from member where uid11='$uid' and pwd11='$pwd';";
	$result=mysqli_query($db,$query); //sql 실행
	if (!$result){
		exit("에러: $query");  //에러조사
	}
	$count=mysqli_num_rows($result);
	$row=mysqli_fetch_array($result);
	
	$name=$row[name11];
	$no=$row[no11];
	
	if($count>0){
		setcookie("cookie_no",$no);
		setcookie("cookie_name",$name);
		echo("<script>location.href='index.html'</script>");
	}
	else{
		echo("<script>location.href='member_login.php'</script>");
	}	
	
?>

