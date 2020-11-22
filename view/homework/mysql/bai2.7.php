<?php
        require_once 'hangding.php';
        $sql = 'select * from sua';
        $dong =  ceil(sizeof(getData($sql))/5);
        $data;
    ?>
<!doctype html>
<html lang="en">
  <head>
    <title>List Dạng Cột</title>
    <!-- Required meta tags -->
    <style>
      .tt{
        text-align: center;
        background-color: pink;
        color: red;
        width: 400px;
        height: 50px;
      }
      kbh{
        color:red;
      }
      .nameMilk:hover{
          cursor: pointer;
          text-decoration: underline;
      }
    </style>
  </head>
  <body>
      
  <table align="center" border="1">
      <tr>
        <th colspan="5" class="tt">THÔNG TIN CÁC SẢM PHẨM</th>
      </tr>
      
      <?php 
        for($i = 0; $i < $dong; $i++){
            $sql = 'select * from sua limit '.($i*5).',5';
            $data = getData($sql);
            echo '<tr class="text-center"> ';
            foreach($data as $value){
                echo ' <td> 
                        <p class="nameMilk"> <a href="Bai2-7-1.php?id='.$value[0].'"> '.$value['Ten_sua'].' </a></p>
                        <p><span><kbh> '.$value['Trong_luong'].' </kbh>gr</span>
                        <span> - <kbh> '.$value['Don_gia'].' </kbh> VNĐ</span> 
                        </p>
                        <img src="../img/female.jpg" width="100" height="100">
                
                    </td>  ';
            }
            echo '</tr>';
        }
      ?>
    </table>

</body>
</html>