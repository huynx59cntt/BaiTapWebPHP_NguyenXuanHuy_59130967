<?php 
    require_once "hangding.php";
    $current_page = 1;
$sql = 'select * from sua,loai_sua,hang_sua
    where sua.Ma_loai_sua = loai_sua.Ma_loai_sua 
    and sua.Ma_hang_sua = hang_sua.Ma_hang_sua';
    
    $page = ceil(sizeof(getData($sql))/5);
    if(isset($_GET['pages'])){
        $current_page = $_GET['pages'];
    }
    else{
        $_GET['pages'] = 1;
    }
    $index = ($current_page-1) * 5;
    $sql = 'select * from sua,loai_sua,hang_sua
                        where sua.Ma_loai_sua = loai_sua.Ma_loai_sua 
                              and sua.Ma_hang_sua = hang_sua.Ma_hang_sua
                        limit '.$index.' , 5';
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
       .pagination li {
           margin-right: 5px;
       }
       .pagination li a:link{
           text-decoration: none;
       }
       table tr td,table tr th{
           width: 9.9%;
           text-align: center;
       }
    </style>
</head>
<body>
    
    
<table  class="table table-striped table-hover" style="font-size:12px">
        <thead class="thead-dark">
            <tr>
                <th>Mã sữa</th>
                <th>Tên sữa</th>  
                <th>Mã hàng sữa</th>
                <th>Mã loại sữa</th>
                <th>Trọng lượng</th>
                <th>Đơn giá</th>
                <th>TP_dinh_dưỡng</th>
                <th>lợi ích</th>
                <th>Ảnh minh họa</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            foreach($data as $value)
            {
                echo '<tr>
                    <td>'. $value[0] .'</td>
                    <td>'. $value[1] .'</td>
                    <td>'. $value[12] .'</td>
                    <td>'. $value[10] .'</td>
                    <td>'. $value[4] .'</td>
                    <td>'. $value[5] .'</td>
                    <td>'. $value[6] .'</td>
                    <td>'. $value[7] .'</td>
                    <td>'. $value[8] .'</td>
                </tr>';
            }
        ?>
        </tbody>
    </table>
    <ul class="pagination">
        <?php
            echo '<li><a href="?page=homework&bt=mysql&dohomework=4&pages=1"> FIRST PAGE </a></li>';
            if(isset($_GET['pages'])){
                $nextPage = $_GET['pages'];
                if($_GET['pages'] > 1){
                    $nextPage--;
                }     
            }
            echo '<li><a href="?page=homework&bt=mysql&dohomework=4&pages='.$nextPage.'"> BACK  </a></li>';
            for ($i=1; $i <= $page; $i++) {
                if ($i == $_GET['pages'])
                {
                    echo '<li><b><a href="?page=homework&bt=mysql&dohomework=4&pages='.$i.'"> Trang '.$i.'  </a></b></li>';
                }
                else echo '<li><a href="?page=homework&bt=mysql&dohomework=4&pages='.$i.'"> Trang '.$i.'  </a></li>';
            }
            if(isset($_GET['pages'])){
                $backPage = $_GET['pages'];
                if($_GET['pages'] < $page){
                    $backPage++;
                  
                }     
            }
            echo '<li><a href="?page=homework&bt=mysql&dohomework=4&pages='.$backPage.'"> NEXT  </a></li>';
            echo '<li><a href="?page=homework&bt=mysql&dohomework=4&pages='.$page.'"> END PAGE </a></li>';
        ?>
    </ul> 
</body>
</html>

