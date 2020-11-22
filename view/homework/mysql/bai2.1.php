<?php 
    require_once "hangding.php";
    $sql = 'select * from hang_sua';
    $data = getData($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
<table  class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Mã hàng sữa</th>
                <th>Tên hàng sữa</th>  
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($data as $value)
                {
                    echo '<tr>
                        <td>'. $value[0] .'</td>
                        <td>'. $value[1] .'</td>
                        <td>'. $value[2] .'</td>
                        <td>'. $value[3] .'</td>
                        <td>'. $value[4] .'</td>
                    </tr>';
                }
            ?>
        </tbody>
    </table>
</body>
</html>