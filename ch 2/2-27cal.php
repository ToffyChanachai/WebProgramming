<<<<<<< HEAD
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

    <?php 
    function Student($id, $studentName, $sex) {
        echo "รหัสนักศึกษา : ".$id."<br>"; 
        echo "ชื่อ-นามสกุลนักศึกษา : ".$studentName."<br>"; 
        echo "เพศ : ".$sex."<br>"; 
    }
    Student($id, $studentName, $sex);
    ?>
    
    <?php 
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
    ?>
    <br />

    <?php 
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
    ?>
    Color($_POST['Color']);
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
=======
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
<<<<<<< HEAD

    <?php 
    function Student($id, $studentName, $sex) {
        echo "รหัสนักศึกษา : ".$id."<br>"; 
        echo "ชื่อ-นามสกุลนักศึกษา : ".$studentName."<br>"; 
        echo "เพศ : ".$sex."<br>"; 
    }
    Student($id, $studentName, $sex);
    ?>
    
    <?php 
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
    ?>
    <br />

    <?php 
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
=======
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
>>>>>>> 23eb6296eeb90e0162e445ca65f7fc9e235b6951
    ?>
    <br />
    <div class="buttom-area">
        <button class="btn btn-secondary"><a href='2-27.html'>Back</a></buttom>
    </div>
    
</body>
>>>>>>> 15d7f8cecbe70420c453a4b9bececb55e45e22e4
</html>