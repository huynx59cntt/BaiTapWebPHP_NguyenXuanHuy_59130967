<?php 

    $so1 = $_POST['so1'];
    $so2 = $_POST['so2'];
    $tt = $_POST['optradio'];

function chonPhep($tt){
        switch($tt){
            case '+': return "Cộng"; 
            case '-': return "Trừ";  
            case '*': return "Nhân"; 
            case '/': return "Chia"; 
            default: return "Chia lấy dư"; 
        }
    }
    function ketQua($so1, $so2, $tt){
        switch($tt){
            case '+': return $so1 + $so2; 
            case '-': return $so1 - $so2;  
            case '*': return $so1 * $so2; 
            case '/': if($so2 == '0')
                        return "không chia được";
                    else return $so1 / $so2;
                    
            default : if($so2 == '0')
                            return '0';
                     else 
                        return  $so1 % $so2;
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
    }
    button{
      
        margin-left: 150px;
    }
    .form-message-erorr{
        height: 30px;
        margin-left: 150px;
    }
    .form-message-erorr small{
        color:red;
    }
</style>
</head>
<body>
<div class="form-bt">
        <div class="title">
            <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
        </div>
        <div class="form">
            <form action="" method="post">
            <div class="form-group">
                <div class="label-group"><label for="">Chọn phép tính</label></div>
                <div > <?php echo chonPhep($tt)?></div>
            </div>
        <div class="form-group">
            <div class="label-group">Số thứ nhất</div>
            <div> <input type="number" name="so1" value="<?php echo $so1 ?>" id="" class="form-control"  aria-describedby="helpId">           
        </div>
        </div>
        <div class="form-group">
            <div class="label-group">Số thứ hai</div>
            <div> <input type="text" name="so2" id="" value="<?php echo $so2 ?>" class="form-control"  aria-describedby="helpId">           
        </div>
        </div>
        <div class="form-group">
            <div class="label-group">Kết Quả</div>
            <div> <input type="text" readonly name="ketqua" value="<?php echo ketQua($so1,$so2,$tt) ?>" class="form-control"  aria-describedby="helpId">  </div>  
        </div>
           <a href="javascript:window.history.back(-1);"> Quay lại trang trước</a>
              </form>
        </div>
    </div>
</body>
</html>