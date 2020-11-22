<?php 
$td = $kqt = $toan = $ly = $hoa =  $toanE =   $lyE = $hoaE = " ";
    if(isset($_POST['submit'])){
        
        if(is_numeric($_POST['toan']) && ($_POST['toan']) >=0  && ($_POST['toan']) <=10 &&
           is_numeric($_POST['ly']) && ($_POST['ly']) >=0  && ($_POST['ly']) <=10 &&
           is_numeric($_POST['hoa']) && ($_POST['hoa']) >=0  && ($_POST['hoa']) <=10 
        ){
            $toan = $_POST['toan'];
            $ly = $_POST['ly'];
            $hoa = $_POST['hoa'];
            $td = $toan + $ly + $hoa;
            if($td >= $_POST['diemchuan'])
                $kqt = "Đậu";
            else     $kqt = "Rớt";
        }
        else
            $toanE =   $lyE = $hoaE = "Phải nhập đủ 3 trường và là số >= 0 và <=10";
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
            <h2>KẾT QUẢ THI ĐẠI HỌC</h2>
        </div>
        <div class="form">
            <form action="#" method="post">
            <div class="form-group">
                <div class="label-group"><label for="">Toán</label></div>
                <div><input type="text" name="toan" value="<?php echo $toan?>"id="" class="form-control" placeholder="" aria-describedby="helpId"></div>
            </div>
            <p class="text-danger"> <?php echo $toanE ?> </p>
            <div class="form-group">
                <div class="label-group"><label for="">Lý</label></div>
                <div> <input type="text" name="ly" value="<?php echo $ly ?>" id="" class="form-control" placeholder="" aria-describedby="helpId"></div>
            </div>
            <p class="text-danger"> <?php echo $lyE ?> </p>
            <div class="form-group">
                <div class="label-group"><label for="">Hóa</label></div>
                <div> <input type="text" name="hoa" value="<?php echo $hoa ?>" id="" class="form-control" placeholder="" aria-describedby="helpId"></div>
            </div>    
            <p class="text-danger"> <?php echo $hoaE ?> </p>
            <div class="form-group">
                <div class="label-group"><label for="">Điểm chuẩn</label></div>
                <div> <input type="text" readonly name="diemchuan" value="20" id="" class="form-control" placeholder="" aria-describedby="helpId"></div>
                </div>
            <div class="form-group">
                <div class="label-group"><label for="">Tổng điểm</label></div>
                <div> <input type="text" readonly value="<?php echo $td; ?>" id="" class="form-control" placeholder="" aria-describedby="helpId"></div>
            </div>
            <div class="form-group">
                <div class="label-group"><label for="">Kết Quả Thi</label></div>
                <div> <input type="text"  readonly value="<?php echo $kqt; ?>" id="" class="form-control" placeholder="" aria-describedby="helpId"></div>
            </div>
            <button class="btn btn-danger" name="submit">
                Xem kết quả
            </button> 
              </form>
        </div>
    </div>
</body>
</html>