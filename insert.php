<?php
    require "connectdb.php";

    $pt_name = "รองเท้า";

    $query = "INSERT INTO producttype (pt_id,pt_name) VALUES ('','$pt_name')";
    $result = mysqli_query($dbcon, $query);
    if ($result) {
        echo "success";
    }
    else {
        echo "error" .mysqli_error($dbcon);
    }
    
    

?>
