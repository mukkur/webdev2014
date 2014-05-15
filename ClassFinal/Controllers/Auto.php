<?php
    //$q=$_GET['q'];
    $mysqli = new mysqli("localhost", "plotkinm", "FaceBooK", "'plotkinm_db") or die("Database Error");
    $auto = $mysqli->real_escape_string($_GET["q"]);
    //$main = $mysqli->real_escape_string($_POST["mainlist_id"]); AND cat_code='$main'
    $sql = $mysqli->query("SELECT State FROM US_Zip_Codes WHERE State LIKE '%$auto%' ORDER BY State" ); 

    if($sql)
    {
        while($row=mysqli_fetch_array($sql))
        {
            echo $row['State']."\n";
        }
    }
?>