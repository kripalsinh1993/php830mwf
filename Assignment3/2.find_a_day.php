<?php
if(isset($_POST["sub"]))
{
    $day=$_POST["day"];

    switch ($day)
    {
        case "1":
            echo "<h1 align='center'> It's Monday </h1>";
            break;
        case "2":
            echo "<h1 align='center'>It's Tuesday </h1>";
            break;
        case "3":
            echo "<h1 align='center'>It's Wednesday </h1>";
            break;
        case "4":
            echo "<h1 align='center'>It's Thursday </h1>";
            break;
        case "5":
            echo "<h1 align='center'>It's Friday </h1>";
            break;
        case "6":
            echo "<h1 align='center'>It's Saturday </h1>";
            break;
        case "7":
            echo "<h1 align='center'>It's Sunday </h1>";
            break;

        default:
            echo "<h1 align='center'> Invalid number ?</h1>";
    
    }

}
?>
<html>
    <body>
        <center>
            <form method="POST">

            Enter Day No:
            <input type="text" name="day" placeholder="Enter your Day*">
            <br><br>
            
            <input type="submit" name="sub" value="Submit">
        
            </form>
        </center>
    </body>
</html>