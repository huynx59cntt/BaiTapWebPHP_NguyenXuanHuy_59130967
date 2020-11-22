<?php
        require_once 'hangding.php';
        $sql = 'select * from sua';
        $dong =  ceil(sizeof(getData($sql))/5);
    ?>
<!doctype html>
<html lang="en">
  <head>

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
    </style>
  </head>
  <body>
      
  <table align="center" border="1">
      <tr>
        <th colspan="5" class="tt">THÔNG TIN CÁC SẢM PHẨM</th>
      </tr>
      
      <?php 
        for($i = 0; $i < $dong; $i++){
            $sql = 'select Ten_sua,Trong_luong,Don_gia,Hinh from sua limit '.($i*5).',5';
            $data = getData($sql);
            echo '<tr class="text-center"> ';
            foreach($data as $value){
                echo ' <td> 
                        <p><b> '.$value[0].' </b></p>
                        <p><span><kbh> '.$value[1].' </kbh>gr</span>
                        <span> - <kbh> '.$value[2].' </kbh> VNĐ</span> 
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