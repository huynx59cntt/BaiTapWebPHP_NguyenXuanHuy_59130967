<?php
       require_once "hangding.php";
       $sql = "Select s.Ten_sua, hs.Ten_hang_sua, ls.Ten_loai, s.Trong_luong, s.Don_gia, s.Hinh
       From sua s join hang_sua hs on s.Ma_hang_sua = hs.Ma_hang_sua
                   join loai_sua ls on s.Ma_loai_sua = ls.Ma_loai_sua";
        $data  = getData($sql);
    ?>
<!doctype html>
<html lang="en">
  <head>
    <title>List Sản Phẩm Sữa</title>
    <!-- Required meta tags -->
    <style>
      .tt{
        text-align: center;
        background-color: pink;
        color: red;
        width: 250px;
        height: 50px;
      }
    </style>
    <!-- Bootstrap CSS -->
    <table align="center" border="1">
      <tr>
        <th colspan="2" class="tt">THÔNG TIN CÁC SẢM PHẨM</th>
      </tr>
      <?php 
        foreach($data as $value){
          echo '<tr>
            <td><img src="../img/male.jpg" width="100" height="100"></td>
              <td>'.$value[0].'<br>   
                  Nhà sản xuất:'.$value[1].'<br>
                  '.$value[2].' - '.$value[3].' gr - '.$value[4].' VNĐ
              </td>
                </tr>';      
        }
      ?>
    </table>

    </body>
</html>