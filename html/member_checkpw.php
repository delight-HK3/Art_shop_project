<?
	include "common.php";
	$uid=$_REQUEST[uid];
	$name=$_REQUEST[name];
	$email=$_REQUEST[email];

	$query="select * from member where uid11='$uid' and name11='$name' and email11='$email'";
	$result=mysqli_query($db,$query); //sql 실행
	if (!$result){
		exit("에러: $query");  //에러조사
	}
	$count=mysqli_num_rows($result); //전체 레코드 개수
	$row=mysqli_fetch_array($result);
	//아이디가 없는 경우
	if($count==0){
		echo("<script>alert('입력하신 정보와 같은 정보가 없습니다.');</script>");
		echo("<script>location.href='member_searchpw.php'</script>");
	}
	//아이디가 있는 경우
	else{
		echo("<script>location.href='member_newpw.php?no=$row[no11]'</script>");
	}
?>