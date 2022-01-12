<?php 
session_start();
    if(isset($_POST['fristname'])){
		//connection
            include("condb.php");
		//รับค่า user & password
            $fristname = $_POST['fristname'];
            $lastname = md5($_POST['lastname']);
		//query 
            $sql="SELECT * FROM personr Where fristname='".$fristname."' and lastname='".$lastname."' ";
            $result = mysqli_query($con,$sql);
				if(mysqli_num_rows($result)==1){
                    $row = mysqli_fetch_array($result);
                    $_SESSION["UserID"] = $row["pid"];
                    $_SESSION["User"] = $row["fristname"]." ".$row["lastname"];
                    if($_SESSION["User"]=="A"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
                    Header("Location: admin_page.php");}
                    if ($_SESSION["Userlevel"]=="M"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
                    Header("Location: user_page.php");}
                        }else{
                            echo "<script>";
                            echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                            echo "window.history.back()";
                            echo "</script>";
}
}else{
Header("Location: form.php"); //user & password incorrect back to login again

        }
?>