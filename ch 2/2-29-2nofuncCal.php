<html>
<head><title></title></head>
<body>
<h1>ข้อมูลผู้ใช้ใส่มา</h1>
<?php
    $username = $_POST['username'];
    $comment = $_POST['comment'];

    echo "Username : ".$username."<br>"; 
    echo "ความคิดเห็น : ".$comment."<br>"; 
?>
    <div class="buttom-area">
        <button class="btn btn-secondary"><a href='2-29-1nofunc.php'>Back</a></buttom>
    </div>
</body>
</html>