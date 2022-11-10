<?php
if(isset($_POST["sub"]))
{
    $p=$_POST["phy"];
    $ch=$_POST["chem"];
    $bi=$_POST["bio"];
    $mat=$_POST["math"];
    $com=$_POST["comp"];
    //total of Subject
    $total= $p + $ch + $bi + $mat + $com;
    //average
    $avg=$total/5;
    //percentage
    $percentage=($total/500)*100;
    //grade
    $grade;


    if ($avg >= 90 && $avg >= 80)
    {   
         $grade = "Outstanding";
    }

    else if($avg >= 70 && $avg < 80)
    {
        $grade = "Distinction";
    }
    else if ($avg >= 60 && $avg < 70)
    {
        $grade = "First Class";
    }
    else
    {
        $grade = "Pass Class";
    }
    // It will print the final output
    echo "<h1 align='center'>Your Total marks = $total</h1>" ."<br>";
    echo "<h1 align='center'>Your Average is= $avg </h1>"."<br>";
    echo "<h1 align='center'>Your Percentage is = $percentage </h1>"."<br>";
    echo "<h1 align='center'>Your Grade is = $grade </h1>". "<br>";

}
?>
<html>
    <body>
        <center>
            <table border="2" style="margin-top:-10%">
                <form method="POST">
                    <br><br>
                    <br>
                    <br>
                    
                    Enter Your Obtained Marks Subject Wise:
                    
                    <br><br>
                    <tr>
                        <td>
                    <input type="text" name="phy" placeholder="Enter Your Physics Marks*">
                    </tr>
                    </td>
                    <br><br>
                    <tr>
                        <td>
                    <input type="text" name="chem" placeholder="Enter Your Chemistry Marks*">
                    </tr>
                    </td>
                    <br><br>
                    <tr>
                        <td>
                    <input type="text" name="bio" placeholder="Enter Your Biology Marks*">
                    </tr>
                    </td>
                    <br><br>
                    <tr>
                        <td>
                    <input type="text" name="math" placeholder="Enter Your Maths Marks*">
                    </tr>
                    </td>
                    <br><br>
                    <tr>
                        <td>
                    <input type="text" name="comp" placeholder="Enter Your Computer Marks*">
                    </tr>
                    </td>
                    <br><br>
                    <tr>
                        <td>
                            <center>
                    <input type="submit" name="sub" value="submit">
                    </center>
                    </tr>
                    </td>
                    
                </form>
            </table>
        </center>
    </body>
</html>