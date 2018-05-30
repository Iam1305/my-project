<?php 
    require "connectdb.php";
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf8">
        <style>
            label {
                display : block;
            }
        </style>
    </head>
    <body>
    <form action="product_insert2.php" method="POST" enctype="multipart/form-data"  name="addprd" class="form-horizontal" id="addprd">
        
        <div class="form-group">
          <div class="col-sm-12">
            <p> ชื่อสินค้า</p>
            <input type="text"  name="p_name" class="form-control" required placeholder="ชื่อสินค้า" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> ราคา</p>
            <input type="num"  name="p_price" class="form-control" required placeholder="ราคา" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3">
            <p> วันที่ </p>
            <input type="date"  name="p_date" class="form-control" required placeholder="วันที่" />
          </div>
        <div class="form-group">
          <div class="col-sm-3">
            <p> สถานะ </p>
            <input type="radio"  name="p_status" class="form-control" />ใช้ซื้อขาย
            <input type="radio"  name="p_status" class="form-control" />ปรับปรุง           
          </div>
          <br>
            <?php
                $q = "SELECT * FROM producttype";
                $result = mysqli_query($dbcon, $q);
            ?>
                <select name="pt_id" id="pt_id">
                    <option value="">---เลือกประเภทสินค้า---</option>
                        <?php
                            while ($row = mysqli_fetch_array($result, MYSQLI_NUM)){
                                echo "<option value='$row[0]'>$row[1]</option>";
                            }
                        ?>
                    
                </select>    
                <br>     
          <div class="form-group">
          <div class="col-sm-12">
            <br><button type="submit" class="btn btn-primary" name="btnadd"> + เพิ่มสินค้า </button>
            <a href="backend.php" class="btn btn-primary">กลับหน้าหลัก</a>
          </div>
        </div>
      </form>
        
    </body>
</html>