<!DOCTYPE html>
<html>
<head>
    <title>ข้อมูลผู้ใช้ใส่มา</title>
    <link rel="stylesheet" type="text/css" href="resultstyle.css">
    
</head>
<body>

<?php
    $id = $_POST['id'];
    $studentName = $_POST['studentName'];
    $password = $_POST['password'];
    $sex = $_POST['sex'];
?>
    <div class="header">
  	<h2>ข้อมูลผู้ใช้ใส่มา</h2>
    </div>
    
    <div class="result">
    รหัสนักศึกษา : <?php echo $id; ?><br />
    ชื่อ-นามสกุลนักศึกษา : <?php echo $studentName; ?><br />
    เพศ :  <?php echo $sex; ?><br />
    งานอดิเรก :
    <?php 
    if(!empty($_POST['read'])) {
        $read = $_POST['read'];
        echo " <i> $read </i>";
    }
    if(!empty($_POST['watch'])) {
        $watch = $_POST['watch'];
        echo ", <i> $watch </i>";
    }
    if(!empty($_POST['sport'])) {
        $sport = $_POST['sport'];
        echo ", <i> $sport </i>";
    } 
    ?>
    <br />

    สี :
    <?php 
    for($i = 0; $i<count($_POST['Color']); $i++)
    {
        if(trim($_POST['Color'][$i]) != "")
        {
            
            echo " ". $_POST['Color'][$i];
        }  
    }  
    ?>
    <br />
    <div class="buttom-area">
        <button class="btn btn-secondary"><a href='2-27.html'>Back</a></buttom>
    </div>
    
</body>
</html>