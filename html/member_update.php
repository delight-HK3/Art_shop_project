<?php
	@extract($_POST);
	@extract($_GET);
	@extract($_COOKIE);
	include "common.php";
	
	$cookie_no=$_COOKIE[cookie_no];
	$pwd=$_REQUEST[pwd1];
	
	$name=$_REQUEST[name];
	$birthday1=$_REQUEST[birthday1];
	$birthday2=$_REQUEST[birthday2];
	$birthday3=$_REQUEST[birthday3];
	$sm=$_REQUEST[sm];
	
	$tel1=$_REQUEST[tel1];
	$tel2=$_REQUEST[tel2];
	$tel3=$_REQUEST[tel3];
	
	$phone1=$_REQUEST[phone1];
	$phone2=$_REQUEST[phone2];
	$phone3=$_REQUEST[phone3];
	
	$zip=$_REQUEST[zip];
	$juso=$_REQUEST[juso];
	$email=$_REQUEST[email];

	$tel = sprintf("%-3s%-4s%-4s", $tel1, $tel2, $tel3);
	$phone = sprintf("%-3s%-4s%-4s", $phone1, $phone2, $phone3);
	$birthday = sprintf("%04d-%02d-%02d", $birthday1, $birthday2, $birthday3);

	if(!$pwd1){
		$query="update member set name11='$name', birthday11='$birthday', sm11='$sm', tel11='$tel', 
									phone11='$phone', zip11='$zip',juso11='$juso',email11='$email' where no11=$cookie_no;";
	}
	else{
		$query="update member set pwd11='$pwd1', name11='$name', birthday11='$birthday', sm11='$sm', tel11='$tel', 
									phone11='$phone', zip11='$zip',juso11='$juso',email11='$email' where no11=$cookie_no;";
	}
	$result=mysqli_query($db,$query);
	if(!$result){
		exit("에러: $query");
	}
	setcookie("cookie_name",$name);
	echo("<script>location.href='index.html'</script>");
?>
