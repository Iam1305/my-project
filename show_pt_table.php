<?php
    require "connectdb.php";
    $q = "select * from producttype";
    $result = mysqli_query($dbcon,$q);    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charser="UTF8">
        <title>แสดงข้อมูลหมวดสินค้า</title>
        <style>
            table,th,td{
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <table style = "width:700px">
            <tr>
                <th>รหัส</th>
                <th>รายละเอียดหมวดสินค้า</th>
            </tr>
<?php
    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
?>
            <tr>
                <td><?php echo $row['pt_id']?></td>
                <td><?php echo $row['pt_name']?></td>
            </tr>
<?php
    }
    mysqli_free_result($result);
    mysqli_close($dbcon);
?>      
        
        </table>

    </body>
</html>