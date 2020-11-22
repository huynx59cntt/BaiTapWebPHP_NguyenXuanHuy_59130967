<?php 
    require_once "hangding.php";
    $sql = 'select * from khach_hang';
    $data = getData($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
        img{
            width: 80px;
        }
    </style>
</head>
<body>
    
    
<table  class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Mã khách hàng</th>
                <th>Tên khách hàng</th>  
                <th>Giới tính</th>
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
                    <td>'. $value[1] .'</td>';
                    if($value[2] == 1)
                    {
                        echo "<td> <img src=".'../img/male.jpg'."> </td>";
                    }
                    else echo "<td> <img src=".'../img/female.jpg'."> </td>";

                    echo '
                    <td>'. $value[3] .'</td>
                    <td>'. $value[4] .'</td>
                    <td>'. $value[5] .'</td>
                </tr>';
            }
        ?>
        </tbody>
    </table>
</body>
</html>