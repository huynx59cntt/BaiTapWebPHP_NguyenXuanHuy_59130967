<?php
    $dayso = $socantim = $mang = $ketqua = "";
    $arr = array();
    function timKiem($x, $arr){
        $vitri = "";
        for ($i=0; $i < count($arr); $i++) { 
            if($arr[$i] == $x) $vitri .=($i+1)." ";
        }
        return $vitri;
    }
    if(isset($_POST['submit'])){
        if(!empty($_POST['dayso'])){
            $dayso = $_POST['dayso'];
            $arr = explode(",", $dayso);            
        }
        if(is_numeric($_POST['socantim']) && (!empty($_POST['socantim']))){
            $socantim = $_POST['socantim'];
            $mang = $dayso;
            if(timKiem($socantim,$arr) == "")
                $ketqua = "Không tìm thấy ".$socantim. " trong mảng";
            else $ketqua = "Tìm thấy ".$socantim." trong mảng tại vị trí ".(timKiem($socantim, $arr)).".";
            
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
            min-width: 500px;
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
            <h2>TÌM KIẾM</h2>
        </div>
        <div class="form">
            <form action="" method="post">
            <div class="form-group">
                <div class="label-group"><label for="">Nhập Mảng</label></div>
                <div>
                    <input type="text" name="dayso" id="" class="form-control" value="<?php  echo $dayso; ?>" aria-describedby="helpId">
                </div> 
            </div>
            <div class="form-group">
                <div class="label-group"><label for="">Nhập số cần tìm</label></div>
                <div>
                    <input type="text" name="socantim"  id="" class="form-control" value="<?php  echo $socantim; ?>" aria-describedby="helpId">
                </div> 
            </div>
            <button class="btn btn-danger" name="submit">
                Tìm Kiếm
             </button> 
            
            <div class="form-group">
                <div class="label-group"><label for="">Mảng</label></div>
                <div>
                    <input type="text" name="max" readonly  id="" class="form-control" value="<?php  echo $mang; ?>" aria-describedby="helpId">
                </div> 
            </div>

        <div class="form-group">
            <div class="label-group">Kết quả tìm kiếm</div>
            <div> <input type="text" readonly name="tongdayso" value="<?php echo $ketqua; ?>" id="" class="form-control" placeholder="" aria-describedby="helpId"></div>
        </div>
        <div class="form-group">
            <div class="label-group" style="color:red">(Ghi chú: Các phần tử trong mảng sẽ cách nhau bới dấu "," )</div>
                </div>
        </form>
        </div>
    </div>
</body>
</html>