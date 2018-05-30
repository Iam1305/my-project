<?php
    require "connectdb.php";
    $q = "SELECT * FROM producta INNER JOIN producttype 
    ON producta.pt_id=producttype.pt_id ORDER BY producta.p_id DESC";
    $result = mysqli_query($dbcon, $q);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf8">
    <title>แสดงรายการสินค้า</title>
    <style>
        table,th,td {
            border : 1px solid black;
            border-collapse : collapse;
        }
    </style>
</head>

<body>
    <h2 align = center>รายการสินค้า</h2>
    <table style = "width:900px" >
        <tr>
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>ราคาสินค้า</th>
            <th>วันที่เพิ่ม</th>
            <th>หมวดสินค้า</th>
        </tr>
                <?php
                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                ?>
        <tr>
        <td><?php echo $row['p_id']?></td>
        <td><?php echo $row['p_name']?></td>
        <td><?php echo $row['p_price']?></td>
        <td><?php echo $row['p_date']?></td>
        <td><?php echo $row['pt_id']?></td>
        </tr>
                <?php
                    }
                    mysqli_free_result($result);
                    mysqli_close($dbcon);
                ?>
    </table>

</body>
</html>