<html>
<head>
    <title> </title>
    <meta charset="UTF-8">
</head>
<body>
<<<<<<< HEAD
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

    mysqli_query($conn, "set character_set_connection=utf8mb4");
    mysqli_query($conn, "set character_set_client=utf8mb4");
    mysqli_query($conn, "set character_set_results=utf8mb4");

    $sql = "select * from customer WHERE customerId = '$customerId'";

    $dbQuery = mysqli_query($conn, $sql);

    if (!$dbQuery)
        die("select join มีข้อผิดพลาด".mysqli_error());

    $result = mysqli_fetch_object($dbQuery);
?>
<form action="customerUpdate2.php" method="post" name="form1" id="form1">
<table border="1" align="center" width="700">
    
    <tr>
        <th colspan="2" bgcolor="" height="21">แก้ไขข้อมูลลูกค้า</th>
    </tr>
    <tr>
        <td width="200">รหัส: </td>
        <td width="400"><input type="text" name="customerId" size="13" value="<?php echo $result->customerId ?>" readonly></td>
    </tr>
=======

<form action="formcal.php" method="post" name="form1" id="form1">
<table border="1" align="center" width="700">
>>>>>>> 495ec28472f3f9385fd854ba973a50a3a61eee19
    <tr>
        <td colspan="2" align="center">
            <big> เพิ่มข้อมูลลูกค้า </big>
        </td>
    </tr> 

    <tr>
        <td colspan="2"><font color = red> *required field </font></td>
    </tr> 

    <tr>
        <td> ชื่อ-นามสกุล : </td>
<<<<<<< HEAD
        <td><input type="text" name="fullname" size="60" value="<?php echo $result->customerName ?>"/> </td>
=======
        <td><input type="text" name="fullname" size="60"/> </td>
>>>>>>> 495ec28472f3f9385fd854ba973a50a3a61eee19
    </tr>

    <tr>
        <td> ที่อยู่ : </td>
        <td>
<<<<<<< HEAD
            <textarea name = "address" cols="55" rows="5"  required ><?php echo $result->customerAddress ?></textarea><font color = "red">*</font>
=======
            <textarea name = "address" cols="55" rows="5" required></textarea><font color = "red">*</font>
>>>>>>> 495ec28472f3f9385fd854ba973a50a3a61eee19
        </td>
        
    </tr>

    <tr>
        <td> อีเมล : </td>
<<<<<<< HEAD
        <td><input type="text" name="email" size="60" placeholder = "E-Mail" value="<?php echo $result->customerEmail ?>"/></td>
=======
        <td><input type="text" name="email" size="60" placeholder = "E-Mail"/></td>
>>>>>>> 495ec28472f3f9385fd854ba973a50a3a61eee19
    </tr>

    <tr>
        <td> หมายเลขโทรศัพท์ : </td>
<<<<<<< HEAD
        <td><input type="text" name="tel" size="13" maxlength = "13" minlength = "10" value="<?php echo $result->customerTelephone ?>"/> </td>
=======
        <td><input type="text" name="tel" size="13" maxlength = "13" minlength = "10"/> </td>
>>>>>>> 495ec28472f3f9385fd854ba973a50a3a61eee19
    </tr>
</table>

<br>
<center>
<input type="submit" name="btnSubmit" value="บันทึกข้อมูล" /> <input type="reset" name="reset" value="ล้างข้อมูล" />
</center>
</form>

</body>
</html>