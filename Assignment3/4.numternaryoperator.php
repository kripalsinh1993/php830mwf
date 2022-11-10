<?php

if(isset($_POST["sub"]))
{

    $n1 = $_POST["no1"]; 
    $n2 = $_POST["no2"]; 
    $n3 = $_POST["no3"];
 
    $max = ($n1 > $n2) ? ($n1 > $n3 ? $n1 : $n3) : ($n2 > $n3 ? $n2 : $n3);
 
    echo "<h1 align='center'>Largest number among  $n1 $n2 $n3 is  $max</h1>";
}
?>
<html>
    <body>
        <center>
            <table border="2">
            <form method="POST">
                <tr>
                    <td>
                Enter no1:
                <input type="text" name="no1" placeholder="Enter no1*">
                </tr>
                </td>
                <br><br>
                <tr>
                    <td>
                Enter no2:
                <input type="text" name="no2" placeholder="Enter no2*">
                </tr>
                </td>
                <br><br>
                <tr>
                    <td>
                Enter no3:
                <input type="text" name="no3" placeholder="Enter no3*">
                </tr>
                </td>
                <br><br>
                <tr>
                    <td>
                        <center>
                <input type="Submit" name="sub" value="Submit">
                </center>
                </tr>
                </td>
            </form>
            </table>
        </center>
    </body>
</html>