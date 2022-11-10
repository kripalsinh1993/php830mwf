<?php

if(isset($_POST["sub"]))
{
    $n=$_POST["num"];

    $arm = 0;
    $c = $n;

    while($n > 0)
    {
        $r = $n % 10;
        $arm = ($r * $r * $r) + $arm;
        $n = $n / 10;
    }
    if($c == $arm)
    {
        echo "<h1 align='center'>$c is an armstrong number</h1>";
    }
    else 
    {
        echo "<h1 align='center'>$c is not an armstrong number</h1>";   
    }

}

?>
<html>
    <body>
        <center>
            <br><br>
            <form method="POST">
            Enter no:
            <input type="text" name="num" placeholder="Enter No*">
            <br><br>

            <input type="submit" name="sub" value="Submit">
            </form>
        </center>
    </body>
</html>