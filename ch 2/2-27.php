<html>
<head>
    <title> การสร้างฟอร์ม </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="register.css">
    <link rel="stylesheet" type="text/css" href="resultstyle.css">

</head>
<body>
    <?php 
    if(isset($_POST['btnSubmit'])) {
        $id = $_POST['id'];
        $studentName = $_POST['studentName'];
        $password = $_POST['password'];
        $sex = $_POST['sex'];
    ?>

    <div class="result">
    <h1>ข้อมูลผู้ใช้ใส่มา</h1>
    <?php 
        function Student($id, $studentName, $sex) {
            echo "รหัสนักศึกษา : ".$id."<br>"; 
            echo "ชื่อ-นามสกุลนักศึกษา : ".$studentName."<br>"; 
            echo "เพศ : ".$sex."<br>"; 
        }
        Student($id, $studentName, $sex);

        function Hobbies($hobbies) {
            echo "งานอดิเรก : ";  
            for($i = 0; $i<count($hobbies); $i++)
            {
                if(trim($hobbies[$i]) != "")
                {
                    
                    echo " ". $hobbies[$i];
                }  
            }  
        }
        Hobbies($_POST['hobbies']);
        echo "<br>";

        function Color($color) {
            echo "สี : ";
            for($i = 0; $i<count($color); $i++)
            {
                if(trim($color[$i]) != "")
                {
                    
                    echo " ". $color[$i];
                }  
            }  
        }
        Color($_POST['Color']);
        ?>
            <div class="buttom-area">
                <button class="btn btn-secondary"><a href='2-27.php'>Back</a></buttom>
            </div>
     
    <?php
    }
    else{
    ?>
    
    <form action="2-27.php" method="post" name="form1" id="form1">
    <div class="login-wrapper">     
        <div class="login-right">
            <h2>แบบฟอร์มบันทึกข้อมูลนักศึกษา</h2>
            รหัสนักศึกษา : <input type="text" name = "id" maxlength="10" /><br />
            ชื่อ-นามสกุลนักศึกษา : <input type="text" name = "studentName" size="40" /><br />
            รหัส่ผ่าน : <input type="password" name = "password" maxlength="6" size="6" /><br />
            เพศ : <input type="radio" name="sex" value="ชาย" /> ชาย
            <input type="radio" name="sex" value="หญิง" /> หญิง <br />
            งานอดิเรก :
            <input type="checkbox" name = "hobbies[]" value="อ่านหนังสือ" /> อ่านหนังสือ
            <input type="checkbox" name = "hobbies[]" value="ดูโทรทัศน์" /> ดูโทรทัศน์
            <input type="checkbox" name = "hobbies[]" value="เล่นกีฬา" /> เล่นกีฬา<br />
            สี :
            <input type="checkbox" name = "Color[]" value="แดง" /> แดง
            <input type="checkbox" name = "Color[]" value="เหลือง" /> เหลือง
            <input type="checkbox" name = "Color[]" value="เขียว" /> เขียว
            <input type="checkbox" name = "Color[]" value="น้ำเงิน" /> น้ำเงิน
            <input type="checkbox" name = "Color[]" value="ขาว" /> ขาว
            <input type="checkbox" name = "Color[]" value="ดำ" /> ดำ<br />
            อัพโหลดข้อมูล : <input style="color:#2A14B1"type="file" /> <br /><br />
            <input type="submit" name = "btnSubmit" value=" Submit " />
            <input type="reset" name= "btnReset" value=" Reset " />
            
        </div>
    </div>
    </form>
    <?php }
    ?>
</body>
</html>