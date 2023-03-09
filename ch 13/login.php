<?php
    session_start();
    session_destroy();
?>
<form action="checkUser.php" method="post">
    <center>
    <table border='1' width='300' >
        <tr><td bgcolor = '#00008B' colspan='2' align='center'>กรุณาป้อนชื่อผู้ใช้งานและรหัสผ่าน</td></tr>
        <tr><td bgcolor = '#0000FF' style="color:#7FFF00;">Username :</td> <td bgcolor = '#0000FF' ><input type="text" name="Username"></td></td>
        <tr><td style="color:#7FFF00;">Password :</td> <td><input type="password" name="Password"></td></td>
        <tr><td colspan='2' align='center' ><input  style="background-color:#7FFF00" type="submit" value=" OK "></td></tr>
    </table>
    </center>
</form>