<html>
<head>
    <title> การสร้างฟอร์ม </title>
    <meta charset="UTF-8">
</head>
<body>
    <?php 
        if(isset($_POST['btnSubmit'])) {
            $username = $_POST['username'];
            $comment = $_POST['comment'];
        ?>

        <div class="result">
        <h1>ข้อมูลผู้ใช้ใส่มา</h1>
        <?php 
                echo "Username : ".$username."<br>"; 
                echo "ความคิดเห็น : ".$comment."<br>"; 
            ?>
                <div class="buttom-area">
                    <button class="btn btn-secondary"><a href='2-29nofunc.php'>Back</a></buttom>
                </div>
        
        <?php
        }
        else {
        ?>

        <form action="2-29nofunc.php" method="post" name="form1" id="form1">
            Username : <input type="text" name="username" maxlength="10" /><br /> <br />
            Password : <input type="password" name="pass" maxlength="6" /><br /> <br />
            ความคิดเห็น : <textarea cols="40" name="comment" rows="5" ></textarea><br />
            <br />
            <input type="submit" name="btnSubmit" value="Submit" /> <input type="reset" name="res" value="Reset" />
        </form>
    <?php }
    ?>
</body>
</html>