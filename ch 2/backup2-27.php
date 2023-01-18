<html>
<head><title></title></head>
<body>
<?php
    $id = $_POST['id'];
    $studentName = $_POST['studentName'];
    $password = $_POST['password'];
    $sex = $_POST['sex'];

    echo "<p>";
    echo "<b>ข้อมูลผู้ใช้ใส่มา </b><br />";
    echo "รหัสนักศึกษา : <i> $id </i> <br/>";
    echo "ชื่อ-นามสกุลนักศึกษา : <i> $studentName </i> <br/>";
    echo "เพศ : <i> $sex </i> <br/>";
    echo "งานอดิเรก : ";
   
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
    echo "<br>";
    echo "สี = ";
    for($i = 0; $i<count($_POST['Color']); $i++)
    {
        if(trim($_POST['Color'][$i]) != "")
        {
            
            echo " ". $_POST['Color'][$i];
        }  
    } 
    echo "<br>";
?>
<a style="color:red" href='2-27.html'> <big> Back </big></a>
</body>
</html>