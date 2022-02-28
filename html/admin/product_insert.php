<?
	include "../common.php";
	
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
	
	$image1=$_REQUEST[image1];
	$image2=$_REQUEST[image2];
	$image3=$_REQUEST[image3];

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

	if ($_FILES["image1"]["error"]==0){
		$fname1=$_FILES["image1"]["name"];
		if(!move_uploaded_file($_FILES["image1"]["tmp_name"],"../product/.$fname1")){
			exit("업로드 실패(1)");
		}
	}
	if ($_FILES["image2"]["error"]==0){
		$fname2=$_FILES["image2"]["name"];
		if(!move_uploaded_file($_FILES["image2"]["tmp_name"],"../product/.$fname2")){
			exit("업로드 실패(2)");
		}
	}
	if ($_FILES["image3"]["error"]==0){
		$fname3=$_FILES["image3"]["name"];
		if(!move_uploaded_file($_FILES["image3"]["tmp_name"],"../product/.$fname3")){
			exit("업로드 실패(3)");
		}
	}
	if(!$fname1){
		$fname1="nopic.jpg";
	}
	if(!$fname2){
		$fname2="nopic.jpg";
	}
	if(!$fname3){
		$fname3="nopic.jpg";
	}

	$regday = sprintf("%04d-%02d-%02d", $regday1, $regday2, $regday3);
	
	$query="insert into product (menu11,code11,name11,coname11,price11,opt1_11,opt2_11,contents11,status11,regday11,icon_new11,icon_hit11,icon_sale11,discount11,image1_11,image2_11,image3_11) 
	values ('$menu','$code','$name','$coname','$price','$opt1','$opt2','$contents','$status','$regday','$icon_new','$icon_hit','$icon_sale','$discount','$fname1','$fname2','$fname3');"; //sql 문제 해결
	$result=mysqli_query($db,$query);
	if(!$result){
		exit("에러: $query");
	}
	echo("<script>location.href='product.php'</script>");
?>