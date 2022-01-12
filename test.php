<?phpinclude "connect.php" ?>
<?php$stmt= $pdo->prepare("INSERT INTO product VALUES ('', ?, ?, ?)");
$stmt->bindParam(1, $_POST["pname"]);
$stmt->bindParam(2, $_POST["pdetail"]);
$stmt->bindParam(3, $_POST["price"]);
$stmt->execute();   // เริ่มเพิ่มข้อมูล
$pid= $pdo->lastInsertId(); // ขอคีย์หลักที่เพิ่มสาเร็จ
?>
<html><head><meta charset="UTF-8"></head>
<body>
    เพิ่มสินค้าสาเร็จรหัสสินค้าใหม่คือ<?=$pid?>
</body>
</html>