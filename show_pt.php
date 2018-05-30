<?php
    require 'connectdb.php';
    $q = "SELECT * FROM producttype";
    $result = mysqli_query($dbcon, $q);
    if($result)
    {
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo "รหัสสินค้า".$row['pt_id']."<br>";
            echo "รายละเอียดสินค้า".$row['pt_name']."<br>";
            echo "<hr>";
        }
        mysqli_free_result($result);//คืน memory เผิ่อข้อมูลที่ดึงมามีขนาดใหญ่
    }
    else
    {
        echo "error" .mysql_error($dbcon);
    }
        mysqli_close($dbcon);
?>
