<?php
    $BookID = $_REQUEST['$BookID'];
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookstore2";
    $conn = mysqli_connect($hostname, $username, $password);
    if( !$conn ) 
        die ( "ไม่สามารถติดต่อกับ MySQL ได้" );
    mysqli_select_db($conn, $dbname) or die ( "ไม่สามารถเลือกฐานข้อมูล bookstore ได้" );
    
    $sql = "delete from book where BookID = '$BookID'";
    mysqli_query($conn, $sql) or die ( "delete จาตาราง book มีข้อผิดพลาดเกิดขึ้น".mysqli_error());
    mysqli_close($conn);
    header("Location:listofbook.php");
?>