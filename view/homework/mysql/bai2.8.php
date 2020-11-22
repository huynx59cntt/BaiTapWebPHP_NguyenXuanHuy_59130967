<?php
    require_once 'hangding.php';
    $current_page = 1; //Đánh dấu trang hiện tại là 1
    $sql = 'select * from sua';
    //Phân trang
    $page = ceil(sizeof(getData($sql))/2);
    if(isset($_GET['pages'])){
        $current_page = $_GET['pages'];
    }
    else{
        $_GET['pages'] = 1;
    }//*
    $index = ($current_page-1) * 2;
    $sql = 'select * from sua limit '.$index.' , 2';
    $data = getData($sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Phân Trang</title>
    <style>
     
      .ptrang {
        display: flex;
        margin: 0 ;
        padding: 0;
      }
      .ptrang  li{
        display: block;
        list-style: none;
      }
      .ptrang  li a{
        font-size: 15px;
      }
        .tt{
        text-align: center;
        background-color: pink;
        color: red;
        width: 400px;
        height: 50px;
      }
      .dg{
        color: red;
      }
      .form-bt{
        width: 700px;
        height: 90vh;
        margin: 20px auto;
        overflow: hidden;
      }
      .form-hd{
        font-size: 50px; 
      }
      kbh{
        color: red;
      }
      p{
        font-size: 13px;
      }
    </style>
  </head>
  <body>
      <div class="form-bt"> 
        <div class="form-hd">Thông Tin Chi Tiết Các Loại Sữa</div>
     <table align="center" border="1">
       <?php foreach($data as $value) 
          echo '<tr ><th colspan="2" class="tt"> <h2>'.$value[1].'</h2></th></tr>
                <tr>
                <td><img src="../img/male.jpg" class="img-fluid" width="" height=""></td>
                <td>
                  <p><b>Thành phần dinh dưỡng:</b></p>
                  <p>'.$value[6].'</p>
                  <p><b>Lợi ích:</b></p>
                  <p>'.$value[7].'</p>
                  <p><b>Trọng lượng: </b><kbh>'.$value[4].'</kbh> - 
                    <b>Đơn giá: </b><kbh>'.$value[5].'</kbh></p>
                </td>
                </tr>';
       ?>
     </table>
     </div>
     <ul class="ptrang">
      <?php
        echo '<li><a href="?page=homework&bt=mysql&dohomework=8&pages=1"> <<  </a></li>';
        if(isset($_GET['pages'])){
            $nextPage = $_GET['pages'];
            if($_GET['pages'] > 1){
                $nextPage--;
            }     
        }
        echo '<li><a href="?page=homework&bt=mysql&dohomework=8&page='.$nextPage.'"> <  </a></li>';
        for ($i=1; $i <= $page; $i++) {
            if ($i == $_GET['pages'])
            {
                echo '<li><b><a href="?page=homework&bt=mysql&dohomework=8&pages'.$i.'"> Trang '.$i.'  </a></b></li>';
            }
            else echo '<li><a href="?page=homework&bt=mysql&dohomework=8&pages='.$i.'"> Trang '.$i.'  </a></li>';
        }
        if(isset($_GET['page'])){
            $backPage = $_GET['pages'];
            if($_GET['pages'] < $page){
                $backPage++;
              
            }     
        }
        echo '<li><a href="?page=homework&bt=mysql&dohomework=8&pages='.$backPage.'"> >  </a></li>';
        echo '<li><a href="?page=homework&bt=mysql&dohomework=8&pages='.$page.'"> >>  </a></li>';
      ?>
     </ul>
 </body>
</html>