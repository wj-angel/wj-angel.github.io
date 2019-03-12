<?php
	header("Content-Type:text/html;charset=utf-8");
	
	$goodsId   = $_GET['goodsId'];	
	$ainputS = $_GET['ainputS'];
	//2、数据保存在数据库中
	//1）、建立连接（搭桥）
	$conn = mysql_connect("localhost","root","root");
	
	//2）、选择数据库（找目的地）
	if(!mysql_select_db("meilihui",$conn)){
		die("数据库选择失败".mysql_error());
	}
	else{
	//3）、传输数据（过桥）
	$sqlstr = "select * from detail where id='$goodsId'";
	$result = mysql_query($sqlstr,$conn);//执行查询的sql语句后，有返回值，返回的是查询结果
	$rows = mysql_num_rows($result);
		if($rows <= 0){
			$str1 ="insert into detail (id,input) values('$goodsId','$ainputS')";
			$result = mysql_query($str1,$conn);
			if($result==1){
				echo "1"; 
			}else{
				echo "0";
			}		
		}else{
			echo "-1";
		}
    }
?>

<?php 
    header("Content-type:text/html;charset=utf-8");
	$phone = $_POST["phonea"];
	$password = $_POST["pass"];

$conn = mysql_connect("localhost","root","root");
	if(!$conn){
		die("数据库连接失败：".mysql_error());
	}else{
		//2）、选择目的地（选择操作的数据库）
		mysql_select_db("meilihui",$conn);
		$str = "select * from register where rphone='$phone'";
		$result = mysql_query($str,$conn);
		$rows = mysql_num_rows($result);
		if($rows <= 0){
			$str1 ="insert into register (rphone,rpass) values('$phone','$password')";
			$result = mysql_query($str1,$conn);
			if($result==1){
				echo "1"; 
			}else{
				echo "0";
			}		
		}else{
			echo "-1";
		}
	}
 ?>
 
