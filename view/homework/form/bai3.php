<?php
    
    $tt =  $errorName = $numberOld = $numberNew = $name = $chisocu = $chisomoi = "";
    if(isset($_POST['submit'])){
        if(empty($_POST['tenchuho'])){
            $errorName = "Chưa nhập tên chủ hộ";
        }else {
            $name  = $_POST['tenchuho'];
        }
// 
        if(empty($_POST['chisocu'])){
            $numberOld = "Chưa nhập chỉ số cũ";
        }else{
            $chisocu = $_POST['chisocu'];
            if(!is_numeric($_POST['chisocu']))
                $numberOld = "Chỉ số cũ phải là số"; 
            
        }
           
    
        if(empty($_POST['chisomoi'])){
            $numberNew = "Chưa nhập chỉ số mới";
        }else {
            $chisomoi = $_POST['chisomoi'];
            if(!is_numeric($_POST['chisomoi']))
                $numberNew = "Chỉ số mới phải là số"; 
             
        }

        if(is_numeric($chisomoi) && is_numeric($chisocu)){
            $tt = ($chisomoi - $chisocu) * $_POST['price'];
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
<style>
     .form-bt{
        margin: 40px auto;
        width: 70%;
        border: 1px solid black;
    }
    .title{
        background-color: #dc3545;
        height: 70px;
    }
    .title h2{
        text-align: center;
        color: #fff;
        line-height: 70px;
    }
  
    .form{
        padding: 20px;
    }
    .form-group{
        display: flex;
    }
    .form-group .label-group{
        min-width: 150px;
        font-weight: bold;
    }
    .form-group input{
        min-width: 400px;
    }
    ::-webkit-input-placeholder { /* WsebKit, Blink, Edge */
        color:  red !important;
        font-weight: bold;
    }
    button{
        width: 150px;
        margin-left: 150px;
    }
</style>
</head>
<body>
<div class="form-bt">
        <div class="title">
            <h2>THANH TOÁN TIỀN ĐIỆN</h2>
        </div>
        <div class="form">
            <form action="" method="post">
            <div class="form-group">
                <div class="label-group"><label for="">Tên chủ hộ</label></div>
                <div><input type="text" name="tenchuho" id="" class="form-control" value="<?php echo $name ?>" aria-describedby="helpId"></div>
            </div>
            <p class="text-danger"><?php echo $errorName ?> </p>
            <div class="form-group">
                <div class="label-group"><label for="">Chỉ số cũ</label></div>
                <div> <input type="text" name="chisocu" value="<?php echo $chisocu ?>" id="" class="form-control" value="<?php echo $chisocu ?>" aria-describedby="helpId"></div>
            </div>
            <p class="text-danger"><?php echo $numberOld ?> </p>
            <div class="form-group">
                <div class="label-group"><label for="">Chỉ số mới</label></div>
                <div> <input type="text" name="chisomoi" value="<?php echo $chisomoi ?>" id="" class="form-control" value="<?php echo $chisomoi ?>" aria-describedby="helpId"></div>
            </div>    
            <p class="text-danger"><?php echo $numberNew ?> </p>
            <div class="form-group">
                <div class="label-group"><label for="">Đơn giá</label></div>
                <div> <input type="text" readonly name="price" value="20000" id="" class="form-control" value="" aria-describedby="helpId"></div>
                </div>
            <div class="form-group">
                <div class="label-group"><label for="">Số tiền thanh toán</label></div>
                <div> <input type="text" readonly value="<?php echo $tt; ?>" id="" class="form-control" value="" aria-describedby="helpId"></div>
            </div>
            <button class="btn btn-danger" name="submit">
                Tính
            </button> 
              </form>
        </div>
    </div>
    
</body>
</html>
