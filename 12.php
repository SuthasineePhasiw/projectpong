<?php include ("connect.php"); ?>
<?php
    $stmt = $pdo->prepare("INSERT INTO villagers VALUES ('',?, ?, ?,?,?,?,?)");
    $stmt->bindParam(1, $_POST["ID_name"]);
    $stmt->bindParam(2, $_POST["prefix_name"]);
    $stmt->bindParam(3, $_POST["first_name"]);
    $stmt->bindParam(4, $_POST["last_name"]);
    $stmt->bindParam(5, $_POST["date_of_birth"]);
    $stmt->bindParam(6, $_POST["number_phone"]);
    $stmt->bindParam(7, $_POST["address"]);
    $stmt->execute(); // เริ่มเพิ่มข้อมูล
    //$stmt -> debugDumpParams();

    $villagers_ID = $pdo->lastInsertId();
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
