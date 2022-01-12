<?php include "condb.php"?>

<?php
if(!empty($_GET)){
// 1. ติดต่อฐานข้อมูล
$pdo = new PDO("mysql:host=localhost;dbname=pong;charset=utf8", "root", "");

// 2. กำหนดรูปแบบคำสั่ง SQL
$stmt = $pdo->prepare("SELECT * FROM person");


// 3. ประมวลผลคำสั่ง SQL
$stmt->execute(); 

// 4. วนลูปดึงผลลัพธ์
while ($row = $stmt->fetch()) {   // ดึงข้อมูลทีละแถวเก็บไว้ใน $row
   
  echo "ชื่อ:" .$row['fristname'] ;
  echo "นามสกุล:" .$row['lastname'] ."<br>";
  echo "เพศ:" .$row['sex']. "<br>";
}
?>
<?php
      }
?>

