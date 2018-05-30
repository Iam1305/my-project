<?php
    require 'connectdb.php';

    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $p_date = $_POST['p_date'];
    $p_status = $_POST['p_status'];
    $pt_id = $_POST['pt_id'];

    $q = " INSERT INTO producta (p_name,p_price,p_date,p_status,pt_id) 
    VALUES ('$p_name','$p_price','$p_date','$p_status','$pt_id')";

    $result = mysqli_query($dbcon, $q);

    if($result){
   
        echo "<script type='text/javascript'>";
        echo  "alert('เพิ่มสินค้าเรียบร้อย');";
        echo "window.location='product_form.php';";
        echo "</script>";
  }
  else{
        echo "<script type='text/javascript'>";
            echo "window.location='product_form.php';";
        echo "</script>";
  }

    mysqli_close($dbcon);

?>


