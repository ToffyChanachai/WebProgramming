<?php
    $BookID = $_POST['BookID'];
    $BookName = $_POST['BookName'];
    $TypeID = $_POST['TypeID'];
    $StatusID = $_POST['StatusID'];
    $Publish = $_POST['Publish'];
    $UnitPrice = $_POST['UnitPrice'];
    $UnitRent = $_POST['UnitRent'];
    $DayAmount = $_POST['DayAmount'];
    $image = $_POST['max_size'];

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookstore2";
    $conn = mysqli_connect( $hostname, $username, $password );
    if (!$conn) 
        die( "ไม่สามารถติดต่อกับ MySQL ได้" );
    mysqli_select_db ($conn, $dbname)or die ( "ไม่สามารถเลือกฐานข้อมูล bookstore ได้" );
    
    mysqli_query($conn, "set character_set_connection=utf8mb4");
    mysqli_query($conn, "set character_set_client=utf8mb4");
    mysqli_query($conn, "set character_set_results=utf8mb4");
    
    $Flag = true;
    $ImageFile = htmlspecialchars(trim($ImageFile));
    if ($ImageFile=="") {
        echo "<B><CENTER><li>คุณไม่ได้เลือกรูปภาพ.</CENTER></B><BR>";
    }
    else {
        $ImageFile_name; $ImageFile_type; $ImageFile_size;
        if ($ImageFile_type=="image/gif" or $ImageFile_type=="image/pjpeg") {
            if ($ImageFile_size<=$max_size) {
                copy($ImageFile, "pictures/$ImageFile_name");
                unlink($ImageFile);
                $image=$ImageFile_name;
                $Flag=true;
            }
            else {
                echo "<CENTER><li>รูปภาพมีขนาดใหญ่กว่า 50 kb.<BR></CENTER>";
                echo "<CENTER><input type=\"button\" value=\"กลับไปแก้ไข\" ";
                echo "onclick=\"history.back();\" style=\"cursor:hand\"></CENTER>";
                $Flag=false;
            }
        }
        else {
            echo "<CENTER><li>รูปภาพไม่ใช่ไฟล์ประเภท GIF หรือ JPG <BR></CENTER>";
            echo "<CENTER><input type=\"button\" value=\"กลับไปแก้ไข\" ";
            echo "onclick=\"history.back();\" style=\"cursor:hand\"></CENTER>";
            $Flag=false;
        }
    }
    if($Flag)
    {
        $BDate = date("Y-m-d");
        $sql = "insert into book (BookID ,BookName, TypeID, StatusID, Publish, UnitPrice, UnitRent, DayAmount ,Picture,BookDate) values ('$BookID','$BookName','$TypeID','$StatusID', '$Publish', '$UnitPrice','$UnitRent','$DayAmount','$image','$BDate')";
        mysqli_query($conn, $sql) or die("insert ลงตาราง book มีข้อผิดพลาดเกิดขึ้น".mysqli_error());
        echo "<br><br><CENTER><H2>บันทึกข้อมูลเรียบร้อย</H2><BR><BR></CENTER>";
        echo "<CENTER><A HREF=\"listofbook.php\">แสดงข้อมูลทั้งหมด</A></CENTER>";
    }
    mysqli_close($conn);
?>