<?php 
    $dayso = $gtcthaythe = $gtthaythe = $mangcu = $mangmoi = "";
    $arr = array();

    function xuatMang($arr){
        $kq="";
        for ($i=0; $i < count($arr); $i++) { 
            $kq .= $arr[$i] . " ";
        }
        return $kq;
    }
    function thayThe(&$arr, $soCu, $soMoi){
        for ($i=count($arr)-1; $i >=0 ; $i--) { 
            if($arr[$i] == $soCu) $arr[$i] =  $soMoi;
        }
    }
    if(isset($_POST['submit'])){
        if(!empty($_POST['dayso'])){
            $dayso = $_POST['dayso'];
            $arr = explode(",", $dayso);
            if(is_numeric($_POST['gtcthaythe']) && (!empty($_POST['gtcthaythe'])) &&
            is_numeric($_POST['gtthaythe']) && (!empty($_POST['gtthaythe']))){
                $gtcthaythe = $_POST['gtcthaythe'];
                $gtthaythe = $_POST['gtthaythe'];
               $mangcu = xuatMang($arr);
                thayThe($arr, $gtcthaythe, $gtthaythe);
                $mangmoi = xuatMang($arr);
            }
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
            width: 80%;
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
            min-width: 200px;
            font-weight: bold;
        }
        .form-group input{
            min-width: 400px;
        }
        ::-webkit-input-placeholder { /* WsebKit, Blink, Edge */
            color:  red !important;
        }
        button{
            width: 190px;
            margin: 0px 10px 10px 200px;
            
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
            <h2>THAY THẾ</h2>
        </div>
        <div class="form">
            <form action="" method="post">
            <div class="form-group">
                <div class="label-group"><label for="">Nhập các phần tử</label></div>
                <div>
                    <input type="text" name="dayso" id="" class="form-control" value="<?php  echo $dayso; ?>" aria-describedby="helpId">
                </div> 
            </div>
            <div class="form-group">
                <div class="label-group"><label for="">Giá trị cần thay thế</label></div>
                <div>
                    <input type="text" name="gtcthaythe"  id="" class="form-control" value="<?php  echo $gtcthaythe; ?>" aria-describedby="helpId">
                </div> 
            </div>
            <div class="form-group">
                <div class="label-group"><label for="">Giá trị thay thế</label></div>
                <div>
                    <input type="text" name="gtthaythe"  id="" class="form-control" value="<?php  echo $gtthaythe; ?>" aria-describedby="helpId">
                </div> 
            </div>
            <button class="btn btn-danger" name="submit">
                Thay thế
             </button> 
            
            <div class="form-group">
                <div class="label-group"><label for="">Mảng cũ</label></div>
                <div>
                    <input type="text" name="mangcu" readonly  id="" class="form-control" value="<?php  echo $mangcu; ?> " aria-describedby="helpId">
                </div> 
            </div>

        <div class="form-group">
            <div class="label-group">Mảng sau khi thay thế</div>
            <div> <input type="text" readonly name="mangmoi" value="<?php echo $mangmoi; ?>" id="" class="form-control" placeholder="" aria-describedby="helpId"></div>
        </div>
        <div class="form-group">
            <div class="label-group" style="color:red">(Ghi chú: Các phần tử trong mảng sẽ cách nhau bới dấu "," )</div>
                </div>
        </form>
        </div>
    </div>
</body>
</html>