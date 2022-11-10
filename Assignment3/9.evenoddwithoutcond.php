<?php
        if(isset($_POST["sub"]))
        {
            $no=$_POST["a"];
            $arr = ["Even", "Odd"];
        
            echo "<h1 align='center' style='color:green';>Number is ".($arr[$no % 2])."</h1>";

        }
?>

<html>
    <body>
        <center>
        <form method="post">
            Enter No:
            <input type="text" name="a">
            <br>
            <br>
            <input type="submit" name="sub" value="Submit">
        </form>
        </center>
    </body>
</html>