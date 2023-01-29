<html>
<head>
    <title> การคำนวณหาพื้นที่ </title>
    <meta charset="UTF-8">
</head>
<style>
</style>
<body>    
    <center> 
        <form action="test2.php" method="post" name="form1" id="form1">
            
            <h1>Enter participants scores</h1>
            P 1  <input type="text" name="line[]" maxlength="10" value=""/><br /> 
            P 2  <input type="text" name="line[]" maxlength="10" value=""/><br /> 
            P 3  <input type="text" name="line[]" maxlength="10" value=""/><br /> 
            P 4  <input type="text" name="line[]" maxlength="10" value=""/><br /> 
            P 5  <input type="text" name="line[]" maxlength="10" value=""/><br /> 
            
            <br />
            <input type="submit" name="btnSubmit" value="Submit" /> <input type="reset" name="reset" value="Reset" />
        </form>
        <?php 
            if(isset($_POST['btnSubmit'])) {
            $line = $_POST['line'];
            $sum = 0;
            $countLine = count($line);
            sort($line);//min to max
            rsort($line);// max to min
        ?>
        <h1>Result</h1>
        <?php
            
            echo "Max to Min : ";
            for($i = 0; $i < $countLine; $i++){
                echo $line[$i].", ";
                $sum = $sum + $line[$i];
            } 
            echo "<br>";
            echo "Max : ".max($line)."<br>";
            echo "Min : ".min($line)."<br>";
            echo "Sum : ".$sum."<br>";

            
        }
        ?>
        </center>

            
       
</body>
</html>