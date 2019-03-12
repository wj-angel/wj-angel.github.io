<?php
    header("Content-Type:text/html;charset=utf-8");
    $ID = $_GET["ID"];
    $conn = mysql_connect("localhost","root","root");
    if(!mysql_select_db("meilihui",$conn)){
		die("数据库选择失败".mysql_error());
    }
    $sqlstr = "select * from goodsinfo where goodsId='$ID'";
    $result = mysql_query($sqlstr,$conn);
    $rows = mysql_num_rows($result);
		if($rows > 0){
			$str1 ="delete from goodsinfo  where goodsId='$ID'";
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