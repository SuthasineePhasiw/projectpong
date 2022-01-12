<?php include ("condb.php");?>
<?php
	$stmt = $pdo->prepare("INSERT INTO cases VALUES('',?,?,?)");
	$stmt -> bindParam(1,$_POST["statuss"]);
	$stmt -> bindParam(2,$_POST["date"]);
	$stmt -> bindParam(3,$_POST["isolution"]);
    $stmt -> execute(); //เริ่มเพิ่มข้อมูล
	//$stmt -> debugDumpParams();
    $cid = $pdo -> lastInsertId(); //ขอคีย์หลักเพิ่มสำเร็จ
	$stmt = $pdo->prepare("INSERT INTO person VALUES('',?,?,?,?,?)");
    $stmt -> bindParam(1,$_POST["idcard"]);
    $stmt -> bindParam(2,$_POST["firstname"]);        
	$stmt -> bindParam(3,$_POST["lastname"]);
	$stmt -> bindParam(4,$_POST["birth"]);
    $stmt -> bindParam(5,$_POST["sex"]);
    $stmt -> execute(); //เริ่มเพิ่มข้อมูล
    $pid = $pdo -> lastInsertId(); //ขอคีย์หลักเพิ่มสำเร็จ
	$stmt = $pdo->prepare("INSERT INTO address VALUES('',?,?,?)");
	$stmt -> bindParam(1,$_POST["house_number"]);
	$stmt -> bindParam(2,$_POST["village_number"]);
	$stmt -> bindParam(3,$_POST["village_name"]);
    $stmt -> execute(); //เริ่มเพิ่มข้อมูล
    $idaddress = $pdo -> lastInsertId(); //ขอคีย์หลักเพิ่มสำเร็จ

	$check = ("SELECT * from person  where idcard = $stmt ");
	  $result1 = mysql_query($check) or die(mysql_error());
		$num=mysql_num_rows($result1); 
        if($num > 0)   		
        {
//ถ้ามี username นี้อยู่ในระบบแล้วให้แจ้งเตือน
             echo "<script>";
			 echo "alert('มีข้อมูลแล้ว');";
			 echo "window.location='form_add.php';";
          	 echo "</script>";
 
		}else{
		}

    //ถ้าสำเร็จให้ขึ้นอะไร
	if ($pdo){
		echo "<script type='text/javascript'>";
		echo"alert('[เพิ่มข้อมูลสำเร็จ]');";
	    echo"window.location = 'form_add.php';";
		echo "</script>";
		}
		else {
			//กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม		
				echo "<script type='text/javascript'>";
				echo "alert('เพิ่มข้อมูลไม่สำเร็จ');";
				echo"window.location = 'form_add.php'; ";
				echo"</script>";
	}

?> 
 if($num > 0)
    {
    echo "<script>";
    echo "alert(' ข้อมูลซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
    echo "window.history.back();";
    echo "</script>";
    }else{
	
	$sql = "INSERT INTO tbl_product_type
	(t_name)
	VALUES
	('$t_name')";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
 
}   

