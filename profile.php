<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="profile.css">
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #4C626A;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 20px 20px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #394A50;
}
</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-7 col-xs-12">  
<ul class="p1">
  <li><img src="picture/logo_AD04.png" alt="" width="56" height="56"></a></li>
  <li><a href="#contact">สถิติ</a></li>
  <li><a href="form_add.php">เพิ่มข้อมูล</a></li>
  <li><a href="edit.php">แก้ไขข้อมูล</a></li>
  <li><a class="active"href="profile.php">โปรไฟล์</a></li>
  <li><a href="#about">แจ้งเตือน</a></li>
</ul>

</body>
</head>
<?php
// 1. ติดต่อฐานข้อมูล
$pdo = new PDO("mysql:host=localhost;dbname=pong;charset=utf8", "root", "");
$stmt = $pdo->prepare("SELECT c.statuss,p.idcard,p.fristname,p.lastname,date(CURDATE())as dates,timestampdiff(YEAR,birthdate,CURDATE()) as age,p.sex,a.house_namber,a.village_number,a.village_name
FROM person p
join address a
on p.pid = a.idaddress
join cases c
on p.pid = c.cid
where idcard like '%54%'");
// 3. ประมวลผลคำสั่ง SQL
$stmt->execute(); 

// 4. วนลูปดึงผลลัพธ์
while ($row = $stmt->fetch()) {   // ดึงข้อมูลทีละแถวเก็บไว้ใน $row ?>
   <p class = "p40"> สถานะ: <div class="box3"> <?=$row['statuss']?></div></p>
   <p class = "p41"> เลขบัตรประจำตัวประชาชน: <?=$row['idcard']?></p>
   <p class = "p42"> ชื่อ: <?=$row['fristname']?></p>
   <p class = "p43"> นามสกุล:<?=$row['lastname'] ?></p>
   <p class = "p44"> อายุ: <?=$row['age'] ?></p>
   <p class = "p45"> เพศ : <?=$row['sex']?></p>
   <p class = "p46"> บ้านเลขที่: <?=$row['house_namber'] ?></p>
   <p class = "p47"> หมู่บ้าน: <?=$row['village_number'] ?></p>
   <p class = "p48"> ชื่อหมู่บ้าน: <?=$row['village_name'] ?></p>
    <?php 
    } // end while 
     // end if
?>
</body>
</html>


