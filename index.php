<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="form_add.css">
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
<ul class="p33">
  <li><img src="picture/logo_AD04.png" alt="" width="56" height="56"></a></li>
  <li><a href="#contact">สถิติ</a></li>
  <li><a class="active" href="#home">เพิ่มข้อมูล</a></li>
  <li><a href="#about">แก้ไขข้อมูล</a></li>
  <li><a href="#about">โปรไฟล์</a></li>
  <li><a href="#about">แจ้งเตือน</a></li>
</ul>

</body>
</head>
<body>
<form action=”search.php” method=”post” name=”search”>
search :: <input type=”text” size=”20″  name=”search” />
<input type=”submit” value=” search ” />
</form>
</body>
<?php
//ถ้ามีการส่งค่าข้อมูล
$search = $_POST[search];
if(isset($search) ) {
echo “<font size=’-1′ color=’#FF0000′>ผลลัพธ์ของคำว่า [ $search ] </font><br />”;
?>
<table align=”left” width=”50%” border=”0″>
<tr bgcolor=”#FFFFFF”>
<td>ชื่อจริง</td>
<td>นามสกุล</td>
<td>อายุ</td>
<td>เพศ</td>
<td>แผนก</td>
<td>เงินเดือน</td>
</tr>
<?php
$con = mysql_connect(“localhost”,”root”,”root”);
mysql_select_db(“vdo”,$con);

$result = mysql_query(“SELECT * FROM mytable where fname like ‘%$search%”);
$num = mysql_num_rows($result);
echo “<font size=’-1′ color=’green’>ค้นพบทั้งหมด :: [ $num ] </font><br />”;

$sql = “select * from mytable where fname like ‘%$search%’ “;
$view = mysql_query($sql);
while ($data = mysql_fetch_array($view) ) {
?>
<tr>
<td><?php echo “$data[fname]”; ?></td>
<td><?php echo “$data[lname]”; ?></td>
<td><?php echo “$data[age]”; ?></td>
<td><?php echo “$data[gender]”; ?></td>
<td><?php echo “$data[department]”; ?></td>
<td><?php echo “$data[salary]”; ?></td>
</tr>
<?php
} //End while loop

} else {
echo “กรุณากรอกคำค้นของคุณ”;
}
?>
</body>
</html>
?>