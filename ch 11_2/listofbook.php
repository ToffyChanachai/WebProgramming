<html>
<<<<<<< HEAD

<head>
    <title>Update Table Book</title>
</head>

<body>
    <?php
=======
<head><title>Update Table Book</title></head>
<body>
<?php
>>>>>>> 9c03b46ef7b95629bb571e5ef515b17734b5837c
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookstore2";
    $conn = mysqli_connect($hostname, $username, $password);
<<<<<<< HEAD
    if (!$conn) die("ไม่สามารถติดต่อกับ MySQL ได้");
    mysqli_select_db($conn, $dbname) or die("ไม่สามารถเลือกฐานข้อมูล school ได้");
    mysqli_query($conn, "set character_set_connection=utf8mb4");
    mysqli_query($conn, "set character_set_client=utf8mb4");
    mysqli_query($conn, "set character_set_results=utf8mb4");
    $sqltxt = "SELECT * FROM book order by BookID";
    $result = mysqli_query($conn, $sqltxt);
=======
    if (!$conn) 
        die ( "ไม่สามารถติดต่อกับ MySQL ได้" );
    mysqli_select_db($conn, $dbname) or die ( "ไม่สามารถเลือกฐานข้อมูล school ได้" );
    
    mysqli_query($conn, "set character_set_connection=utf8mb4");
    mysqli_query($conn, "set character_set_client=utf8mb4");
    mysqli_query($conn, "set character_set_results=utf8mb4");

    $sqltxt = "select * from book order by BookID";
    $result = mysqli_query ($conn, $sqltxt);
    
>>>>>>> 9c03b46ef7b95629bb571e5ef515b17734b5837c
    echo "<CENTER><H3>รายชื่อหนังสือ</H3></CENTER>";
    echo "<table width=\"400\" border=\"0\" bordercolor=\"D1D7DA\" ";
    echo "align = \"center\" valign = \"top\" >";
    echo " <br><b><tr align=\"center\" bgcolor=\"#0099CC\">";
    echo "<td width =\"30\" align=\"center\">ลำดับ</font></td>";
    echo "<td width =\"100\" align=\"center\" >รหัสหนังสือ</td>";
    echo "<td align=\"center\" width = \"200\">ชื่อหนังสือ</td>";
    echo "<td align=\"center\" width =\"80\" >ลบ</a></font></td>\n</b>";
<<<<<<< HEAD
    $a = 1;
    while ($rs = mysqli_fetch_array($result)) {
        echo "<tr align=\"center\" bgcolor=\"#CCFFFF\">";
        echo "<td align=\"center\" bgcolor =\"#0099CC\">$a</td>";
        echo "<td align=\"center\"> ";
        echo "<a href=\"detailbook.php?id=$rs[0]\">$rs[0]</a></td>";
        echo "<td align=\"center\">$rs[1]</td>";
        echo "<td align=\"center\"> <a href=\"deletebook.php?id=$rs[0]\" ";
=======
    $a=1;
    while ($rs = mysqli_fetch_array ( $result ) )
    {
        echo "<tr align=\"center\" bgcolor=\"#CCFFFF\">";
        echo "<td align=\"center\" bgcolor =\"#0099CC\">$a</td>";
        echo "<td align=\"center\"> ";
        echo "<a href=\"detailbook.php?BookID='.$rs[0]'\">$rs[0]</a></td>";
        echo "<td align=\"center\">$rs[1]</td>";
        echo "<td align=\"center\"> <a href=\"deletebook.php?BookID=$rs[0]\"";
>>>>>>> 9c03b46ef7b95629bb571e5ef515b17734b5837c
        echo "onclick=\"return confirm(' ยืนยันการลบข้อมูลหนังสือ $rs[1] ')\">[ลบ] ";
        echo "</a></font></td>\n";
        $a++;
    }
<<<<<<< HEAD
    ?>
    </tr>
    </table><BR><BR>
    <div align="center"> <A HREF="addbook.php">เพิ่มรายการหนังสือ</A></div><BR>
    <?php
    mysqli_close($conn);
    ?>
</body>

</html>
=======
?>
</tr></table><BR><BR>
<div align = "center"> <A HREF="addbook.php">เพิ่มรายการหนังสือ</A></div><BR>
<?
    mysqli_close ( $conn );
?>
>>>>>>> 9c03b46ef7b95629bb571e5ef515b17734b5837c
