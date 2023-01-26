<html>
<head>
    <title> การคำนวณหาพื้นที่ </title>
    <meta charset="UTF-8">
</head>
<style>
    body{
        position: relative;
        left : 40%;
    }
</style>
<body>     
        <form action="test1.php" method="post" name="form1" id="form1">
            
            <h1>การคำนวณหาพื้นที่</h1>
            <input type="text" name="width" maxlength="10" value=""/><br /> 
            <input type="text" name="length" maxlength="6" value=""/><br /> <br />
            <input type="radio" name="geo" value="สี่เหลี่ยมจตุรัส" /> สี่เหลี่ยมจตุรัส <br />
            <input type="radio" name="geo" value="สี่เหลี่ยมผืนผ้า" /> สี่เหลี่ยมผืนผ้า <br />
            <input type="radio" name="geo" value="สี่เหลี่ยมขนมเปียกปูน" /> สี่เหลี่ยมขนมเปียกปูน <br />
            <input type="radio" name="geo" value="สามเหลี่ยม" /> สามเหลี่ยม <br />
            <br />
            <input type="submit" name="btnSubmit" value="Submit" /> <input type="reset" name="reset" value="Reset" />
        </form>
        <?php 
            if(isset($_POST['btnSubmit'])) {
                $width = $_POST['width'];
                $length = $_POST['length'];
                $geo = $_POST['geo'];

            function Square($width) {
                $result = $width * $width;
                echo "พื้นที่สีเหลี่ยมจตุรัส : ".$result."<br>"; 
            }

            function Rectangle ($width, $length) {
                $result = $width * $length;
                echo "พื้นที่สี่เหลี่ยมผืนผ้า : ".$result."<br>"; 
            }

            function Rhombus  ($width, $length) {
                $result = $width * $length;
                echo "พื้นที่สี่เหลี่ยมขนมเปียกปูน : ".$result."<br>"; 
            }
            
            function Triangle ($width, $length) {
                $result = (1/2) * $width * $length;
                 echo "พื้นที่สามเหลี่ยม : ".$result."<br>"; 
            }

            if ($geo == "สี่เหลี่ยมจตุรัส") {     
                Square($width);
            }

            if ($geo == "สี่เหลี่ยมผืนผ้า") {   
                Rectangle ($width, $length);
            }

            if ($geo == "สี่เหลี่ยมขนมเปียกปูน") { 
                Rhombus  ($width, $length);
            }

            if ($geo == "สามเหลี่ยม") {     
                Triangle ($width, $length);
            }
        }
        ?>
            
       
</body>
</html>