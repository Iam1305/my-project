<?php
    require "connectdb.php";

    $p_id = 30;
    $p_name = 'อlyl7777ๆ';
    $p_price = 10000;
    $q = "UPDATE producta SET p_name ='$p_name',p_price = '$p_price' WHERE p_id = '$p_id'";
    $result = mysqli_query($dbcon, $q);


    if($result)
    {
        echo "แก้ไขข้อมูลเรียบร้อย";
    }
    else
    {
        echo "ไม่สามารถแก้ไขได้";
    }
    mysqli_close($dbcon);
?>