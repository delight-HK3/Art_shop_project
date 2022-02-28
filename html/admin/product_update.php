<?
	include "../common.php";
	
	$sel1=$_REQUEST[sel1];
	$sel2=$_REQUEST[sel2];
	$sel3=$_REQUEST[sel3];
	$sel4=$_REQUEST[sel4];
	$text1=$_REQUEST[text1];
	$page=$_REQUEST[page];
	$no=$_REQUEST[no];
	
	$menu=$_REQUEST[menu];
	$code=$_REQUEST[code];

	$name=$_REQUEST[name];
	$name=addslashes($name);
	
	$contents=$_REQUEST[contents];
	$contents=addslashes($contents);

	$coname=$_REQUEST[coname];
	$price=$_REQUEST[price];
	$opt1=$_REQUEST[opt1];
	$opt2=$_REQUEST[opt2];
	$status=$_REQUEST[status];
	
	$icon_new=$_REQUEST[icon_new];
	$icon_hit=$_REQUEST[icon_hit];
	$icon_sale=$_REQUEST[icon_sale];
	$discount=$_REQUEST[discount];

	$regday1=$_REQUEST[regday1];
	$regday2=$_REQUEST[regday2];
	$regday3=$_REQUEST[regday3];
	
	$checkno1=$_REQUEST[checkno1];
	$checkno2=$_REQUEST[checkno2];
	$checkno3=$_REQUEST[checkno3];

	$image1=$_REQUEST[image1];
	$image2=$_REQUEST[image2];
	$image3=$_REQUEST[image3];
	
	$imagename1=$_REQUEST[imagename1];
	$imagename2=$_REQUEST[imagename2];
	$imagename3=$_REQUEST[imagename3];
	
	if($icon_new==1){
		$icon_new=1;
	}
	else{ $icon_new=0; }

	if($icon_hit==1){
		$icon_hit=1;
	}
	else{ $icon_hit=0; }
	
	if($icon_sale==1){
		$icon_sale=1;
	}
	else{ $icon_sale=0; }
	
	$fname1=$imagename1;
	if($checkno1=="1"){ $fname1=""; }
	if ($_FILES["image1"]["error"]==0){
		$fname1=$_FILES["image1"]["name"];
		if(!move_uploaded_file($_FILES["image1"]["tmp_name"],"../product/.$fname1")){
			exit("업로드 실패(1)");
		}
	}
	$fname2=$imagename2;
	if($checkno2=="1"){ $fname2=""; }
	if ($_FILES["image2"]["error"]==0){
		$fname2=$_FILES["image2"]["name"];
		if(!move_uploaded_file($_FILES["image2"]["tmp_name"],"../product/.$fname2")){
			exit("업로드 실패(2)");
		}
	}
	$fname3=$imagename3;
	if($checkno3=="1"){ $fname3=""; }
	if ($_FILES["image3"]["error"]==0){
		$fname3=$_FILES["image3"]["name"];
		if(!move_uploaded_file($_FILES["image3"]["tmp_name"],"../product/.$fname3")){
			exit("업로드 실패(3)");
		}
	}
	if(!$fname1){
		$fname1="nopic.jpg";
	}
	else if(!$fname2){
		$fname2="nopic.jpg";
	}
	else if(!$fname3){
		$fname3="nopic.jpg";
	}

	$regday = sprintf("%04d-%02d-%02d", $regday1, $regday2, $regday3);

	$query="update product set menu11='$menu', code11='$code', name11='$name', coname11='$coname', price11='$price', opt1_11='$opt1', opt2_11='$opt2', contents11='$contents', status11='$status', regday11='$regday', icon_new11='$icon_new', icon_hit11='$icon_hit', icon_sale11='$icon_sale', discount11='$discount', image1_11='$fname1', image2_11='$fname2', image3_11='$fname3' where no11=$no;";
	$result=mysqli_query($db,$query);
	if(!$result){
		exit("에러: $query");
	}
	echo("<script>location.href='product.php?&sel1=$sel1&sel2=$sel2&sel3=$sel3&sel4=$sel4&text1=$text1&page=$page'</script>");
?>