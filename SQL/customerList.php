<html>
<head>
    <title> </title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    echo "<center>";
    echo "<br><h3>รายชื่อลูกค้า</h3>";
    echo '<table width = "800" border = "0"';
    echo '<tr><td align = "left"><a href = "form.php">เพิ่มข้อมูลลูกค้า</a></td><tr>';

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

    $sql = "select * from customer order by customerId";
    $result = mysqli_query ($conn, $sql);

    echo '<br><table width="800" border="1">';
    echo '<tr bgcolor ="">';
    echo '<th width ="150">รหัส</th>';
    echo '<th width ="300">ชื่อ-นามสุล</th>';
    echo '<th width ="200">ที่อยู่</th>';
    echo '<th width ="300">อีเมล</th>';
    echo '<th width ="200">หมายเลขโทรศัพท์</th>';
    echo '<th width ="80">แก้ไข</th>';
    echo '<th width ="80">ลบ</th></tr>';

    while ($rs = mysqli_fetch_array($result)) {
        echo '<tr align="center" bgcolor="">';
        echo '<td>'.$rs["customerId"].'</td>';
        echo '<td align="left">'.$rs["customerName"].'</td>';
        echo '<td align = "left">'.$rs["customerAddress"].'</td>';
        echo '<td align="left">'.$rs["customerEmail"].'</td>';
        echo '<td align="left">'.$rs["customerTelephone"].'</td>';

        echo '<td><a href="customerUpdate1.php?customerId='.$rs["customerId"].'">[แก้ไข]</a></td>';

        echo '<td><a href = "customerDelete.php ? customerId='.$rs["customerId"].'"onclick="return confirm(\'ยืนยันการลบข้อมูลลูกค้ารหัส '.$rs["customerId"].'\')">[ลบ]</a></td>';
        echo '</tr>';
    }
    echo '</table>';
    mysqli_close ($conn);
    ?>
</body>
<html>