<?php 
    $customerId = $_POST['customerId'];
    $customerName = $_POST['fullname'];
    $customerAddress = $_POST['address'];
    $customerEmail = $_POST['email'];
    $customerTelephone = $_POST['tel'];

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "bookstore";
    $conn = mysqli_connect($hostname, $username, $password);
    if (!$conn)
        die("ไม่สามารถติดต่อกับ MySQL ได้");
    mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล bookStore ได้");

    mysqli_query($conn, "set character_set_connection=utf8mb4");
    mysqli_query($conn, "set character_set_client=utf8mb4");
    mysqli_query($conn, "set character_set_results=utf8mb4");

    $sql = "update customer set customerName='$customerName', customerAddress='$customerAddress', customerEmail='$customerEmail', customerTelephone='$customerTelephone' where customerId='$customerId'";
    mysqli_query($conn, $sql) or die("update ลงตาราง customer มีข้อผิดพลาดเกิดขึ้น".mysqli_error());
    mysqli_close($conn);
    echo '<center>';
    echo '<br><br><h2>แก้ไขข้อมูลลูกค้ารหัส '.$customerId.' เรียบร้อย</h2>';
    echo '<br><br><a href="customerList.php?">กลับหน้า customerList.php</a>';
    echo '</center>';
?>