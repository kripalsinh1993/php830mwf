<?php

    if(isset($_POST["sub"]))
    {
        $ye=$_POST["year"];


        if($ye % 4 ==0)
        {
            echo "<center><h1 align='center'>year is leap year</h1></center>";

        }
        else
        {
            echo "<center><h1 align='center'>year is not leap year</h1></center>";
        }

    }
?>
<html>
<body>
    <center>
        <form method="POST">
            <br><br>
            <br><br>
            <br><br>
            Leap year or Not
            <input type="text" name="year" placeholder="Enter a year*">
            <br><br>
            <input type="submit" name="sub" value="submit">
        </form>
    </center>
</body>
</html>