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
    <form action="save_form.php" method="post"><br>
    <div class="form-group">
       <div class="col-sm-2">  </div>
       <div class="col-sm-5" align="left">
       <br>
       <p class="p37">เพิ่มข้อมูล</p>
       </div>
       </div>
<style>
    h2 {
  text-align: left;
}
</style>

 <p class = "p38">สถานะ:
    <select name="statuss" required> 
    <option value="">โปรดระบุ</option>
        <option value="Negative">ไม่ติดเชื้อ</option>
        <option value="Positive">ติดเชื้อ</option>  
        <option value="Quarantine">กักตัว</option>  
        <option value="Null">ไม่มีสถานะ</option> 
        <option value="Deaths">เสียชีวิต</option>  
        <option value="Recovered">รักษาหายแล้ว</option>    
    </select></p>
    <p class = "p39">วันที่: <input type="date"  name="date" value="date('d-m-y')"required></p>
    <p class = "p40">สถานที่กักตัว: <input type="text"  name="isolution" required></p>
    <p class = "p41">เลขบัตรประจำตัวประชาชน: <input type="int" id="idcard" name="idcard" size = 20 minlength = 13 maxlength = 13 required></p>
    <p class = "p42">ชื่อ: <input type="text"  name="firstname" required></p>
    <p class = "p43">นามสกุล: <input type="text" id="lastname" name="lastname" required></p>
    <p class = "p44">วัน/เดือน/ปีเกิด: <input type="date" id="date" name="birth" required></p>
    <p class = "p45">เพศ :
    <select name="sex" required >
        <option value="">โปรดระบุ</option>
        <option value="ชาย">ชาย</option>
        <option value="หญิง">หญิง</option>
    </select></p>
    <p class = "p46">บ้านเลขที่: <input type="text"  name="house_number" required></p>
    <p class = "p47">หมู่บ้าน:
    <select name="village_number" required> 
        <option value="">โปรดระบุ</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>  
        <option value="4">4</option>  
        <option value="5">5</option> 
        <option value="6">6</option>  
        <option value="7">7</option>    
        <option value="8">8</option> 
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>  
        <option value="12">12</option>  
        <option value="13">13</option> 
        <option value="14">14</option>  
        <option value="15">15</option>    
        <option value="16">16</option> 
        <option value="17">17</option>  
        <option value="18">18</option>    
    </select></p>
    <p class = "p48">ชื่อหมู่บ้าน:
    <select name="village_name" required> 
    <option value="">โปรดระบุ</option>
        <option value="ทุ่งแต">ทุ่งแต</option>
        <option value="หนองบัว">หนองบัว</option>
        <option value="ควร">ควร</option>  
        <option value="ดอนไชย">ดอนไชย</option>  
        <option value="แบ่ง">แบ่ง</option> 
        <option value="ปัว">ปัว</option>  
        <option value="ปางผักหม">ปางผักหม</option>    
        <option value="สันกลาง">สันกลาง</option> 
        <option value="ป่าแดง">ป่าแดง</option>
        <option value="เลี้ยว">เลี้ยว</option>
        <option value="แฮะ">แฮะ</option>  
        <option value="ใหม่น้ำเงิน">ใหม่น้ำเงิน</option>  
        <option value="ปัวดอย">ปัวดอย</option> 
        <option value="ตุ่น">ตุ่น</option>  
        <option value="เก๊าเงา">เก๊าเงา</option>    
        <option value="น้ำฮาก">น้ำฮาก</option>
        <option value="นาดอ">นาดอ</option>  
        <option value="18">ต้า</option>    
        <option value="19">ปางวัว</option>   
    </select><br><div class = "p49"><input type="submit" name="add" value="เพิ่มข้อมูล"></div></p>
    
</form>

</form>
</body>
</html>