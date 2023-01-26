<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html>
<head>
    <title> การสร้างฟอร์ม </title>
    <meta charset="UTF-8">
</head>
<body>
        <?php 
            if(isset($_POST['btnSubmit'])) {
                $id = $_POST['id'];
                $username = $_POST['username'];
                $sex = $_POST['sex'];
                $hobbies = $_POST['hobbies'];

            ?>

            <div class="result">
            <h1>ข้อมูลผู้ใช้ใส่มา</h1>
            <?php 
                function User($username, $id, $sex, $hobbies) {
                    echo "รหัสบัตรประชาชน : ".$id."<br>"; 
                    echo "ชื่อ-นามสกุล : ".$username."<br>"; 
                    echo "เพศ : ".$sex."<br>"; 
                    echo "งานอดิเรก : ".$hobbies."<br>"; 
                }
                User($username, $id, $sex, $hobbies);
                ?>
                    <div class="buttom-area">
                        <button class="btn btn-secondary"><a href='2-30.php'>Back</a></buttom>
                    </div>
            
            <?php
            }
            else {
            ?>

    <form action="2-30.php" method="post" name="form1" id="form1">
    รหัสบัตรประชาชน : <input type="text" name = "id" maxlength="13" /><br />
    ชื่อ-นามสกุล : <input type="text" name = "username" size="40" /><br />
    เพศ : <select name="sex"><option value = "ชาย" />ชาย <option  value = "หญิง"/>หญิง</select><br />
    งานอดิเรก :
    <select name = "hobbies" size="3" multiple >
    <option value="อ่านหนังสือ" /> อ่านหนังสือ<option value="ดูโทรทัศน์" /> ดูโทรทัศน์<option value="เล่นกีฬา"/ > เล่นกีฬา
    </select><br /><br />
    <input type="submit" name="btnSubmit" value = "submit"/><input type="reset" name="resest" value = "reset"/>
    </form>

    <?php }
    ?>
</body>
</html>