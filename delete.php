<?php
    require "connectdb.php";

    $p_id = 11;
     
    $q = "DELETE FROM producta WHERE p_id = '$p_id'";
   $result = mysqli_query($dbcon, $q);

   if($result)
   {
       echo "ลบข้อมูลเรียบร้อย";
   }
   else
   {
       echo "ไม่สามารถลบข้อมูลได้";
   }
   mysqli_close($dbcon);
?>