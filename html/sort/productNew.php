<?php
	$query="select * from product where menu11 = $menu and status11=1 order by no11 desc";
	$result=mysqli_query($db,$query); //sql 실행
	if (!$result){
		exit("에러: $query");  //에러조사
	}
	$num_col=4;   $num_row=10;                   // column수, row수
	$page_line=$num_col*$num_row;
	$count=mysqli_num_rows($result);           // 출력할 제품 개수 7개

	$icount=0;       // 출력한 제품개수 카운터
	echo("<div class='container'>");
	for ($ir=0; $ir<$num_row; $ir++)
	{
		echo("<div class='row'>");
		for ($ic=0;  $ic<$num_col;  $ic++)
		{
			if ($icount < $count)
			{
				$row=mysqli_fetch_array($result);
				$price = number_format($row[price11]);
				$saleprice = round($row[price11]*(100-$row[discount11])/100);
				$disprice = number_format($saleprice);

				if($row[icon_new11]==1){
					$tmp=array("<h4 class='font-weight-bold mb-4 bg-info'><font color='2C93C5'>New</font></h4>",
								"<h5>$price 원</h5>");
					
					if($row[icon_hit11]==1){
						$tmp=array("<h4 class='font-weight-bold mb-4 bg-danger'>New <font color='FF3333'>Hit</font></h4>",
								   "<h5>$price 원</h5>");
					}
					if($row[icon_sale11]==1){
						$tmp=array("<h4 class='font-weight-bold mb-4 bg-success'>New <font color='2ca368'>Sale</font> $row[discount11]%</h4>",
								   "<h5><strike>$price 원</strike></h5>",
								   "<h5>$disprice 원</h5>");
					}
					if($row[icon_hit11]==1 && $row[icon_sale11]==1){
						$tmp=array("<h4 class='font-weight-bold mb-4 bg-success'>New Hit <font color='2ca368'>Sale</font> $row[discount11]%</h4>",
								   "<h5><strike>$price 원</strike></h5>",
								   "<h5>$disprice 원</h5>");
					}
				}
				if($row[icon_new11]==0){
					if($row[icon_hit11]==1){
						$tmp=array("<h4 class='font-weight-bold mb-4 bg-danger'><font color='FF3333'>Hit</font></h4>",
								   "<h5>$price 원</h5>");
					}
					if($row[icon_sale11]==1){
						$tmp=array("<h4 class='font-weight-bold mb-4 bg-success'><font color='2ca368'>Sale</font> $row[discount11]%</h4>",
								   "<h5><strike>$price 원</strike></h5>",
								   "<h5>$disprice 원</h5>");
					}
					if($row[icon_hit11]==1 && $row[icon_sale11]==1){
						$tmp=array("<h4 class='font-weight-bold mb-4 bg-success'>Hit <font color='2ca368'>Sale</font> $row[discount11]%</h4>",
								   "<h5><strike>$price 원</strike></h5>",
								   "<h5>$disprice 원</h5>");
					}
				}
				$icon=implode(" ",$tmp);
				echo("<div class='col-sm-3'>
						<div class='card' style='margin-bottom:30px'>
							<a href='product_detail.php?no=$row[no11]'><img class='img-thumbnail' width='250' height='260' style='margin-top:10px' src='product/$row[image1_11]' alt='Card image cap'></a>
							<a href='product_detail.php?no=$row[no11]'><h5><b>$row[name11]</b></h5></a>
							$icon
						</div>
					</div>");
			}
			else{
				echo("<td></td>");      // 제품 없는 경우
			}
			$icount++;
		}
		echo("</div>");
	}
	echo("</div>");
?>
