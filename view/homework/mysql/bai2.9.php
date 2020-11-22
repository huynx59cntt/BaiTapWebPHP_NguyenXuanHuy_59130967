<?php 
    require_once "hangding.php";
    $tensua = $result = "" ;
    if(isset($_POST['tensua'])){
        $tensua = $_POST['tensua'];
    }
    $sql = 'SELECT * FROM sua WHERE Ten_sua LIKE "%'.$tensua.'%" ';
    $data = getData($sql);
    if(count($data) > 0) $result = " Có ".count($data)." sản phẩm được tìm thấy";
    else    $result = "Không có sản phẩm nào được tìm thấy";
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
       .form{
           margin-left: 36%;
       }
    </style>
  
</head>
  <body>
      
    <div class="text-center ">
        <h2>TÌM KIẾM THÔNG TIN SỮA</h2>
        <form action="" class="form-inline form" method="post" >
            <div class="form-group ml-35">
                <label for="">Tên sữa</label>
                <input type="text" name="tensua" value="<?php echo $tensua; ?>" id="" class="form-control ml-2" placeholder="" aria-describedby="helpId">
            </div>
            <button  type="submit" class="btn btn-danger ml-2">Tìm kiếm</button>
        </form>
    </div>
       <div class="text-center">
         <p class="text-danger"><?php echo $result ?></p>
         <div>
             <table border="1">
                 <?php 
                    foreach($data as $value){
                        echo '
                        <tr><td colspan="2" class="text-center"> <h2>'.$value[1].'</h2></td></tr>
                        <tr>
                          <td><img src="../img/male.jpg" alt=""></td>
                          <td>
                            <p><b>Thành phần dinh dưỡng</b></p>
                            <p>'.$value[6].'</p>
                            <p><b>Lợi ích</b></p>
                            <p>'.$value[7].'</p>
                            <p><b>Trọng lượng: </b> <kbh class="text-danger">'.$value[4].' 
                            </kbh></span> <span>- Đơn giá: <kbh class="text-danger"> '.$value[5].' </kbh></span></p>
                          </td>
                        </tr>';
                    }
                 ?>
             </table>
         </div>
       </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>