<html>
<head>
    <title> </title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    $customerId = $_REQUEST['customerId'];
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "bookstore";
    $conn = mysqli_connect($hostname, $username, $password);
    if (!$conn)
        die("ไม่สามารถติดต่อกับ MySQL ได้");
    mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล bookStore ได้");

    $sql = "delete from customer where customerId = '$customerId'";
    mysqli_query($conn, $sql) or die ("delete จากตาราง customer มีข้อผิดพลาดเกิดขึ้น".mysqli_error());
    mysqli_close($conn);
    header("location:customerList.php");
    ?>

</body>
</html>