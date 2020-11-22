<?php 
    $dayso  = $tangdan = $giamdan = "";
    $arr = array();

    function hoanVi(&$a, &$b){
        $temp = $a;
        $a = $b;
        $b = $temp;
    }
    function tangDan(&$arr){
        for ($i=0; $i < count($arr)- 1; $i++) { 
            for ($j=$i+1; $j < count($arr); $j++) { 
                if($arr[$i] > $arr[$j]) hoanVi($arr[$i] , $arr[$j]);
            }
        }
    }
    function giamDan(&$arr){
        for ($i=0; $i < count($arr)- 1; $i++) { 
            for ($j=$i+1; $j < count($arr); $j++) { 
                if($arr[$i] < $arr[$j]) hoanVi($arr[$i] , $arr[$j]);
            }
        }
    }
    function xuatMang($arr){
        $kq="";
        for ($i=0; $i < count($arr); $i++) { 
            $kq .= $arr[$i] . " ";
        }
        return $kq;
    }
    if(isset($_POST['submit'])){
        if(!empty($_POST['dayso'])){
            $dayso = $_POST['dayso'];
            $arr = explode(",", $dayso);
            tangDan($arr);
            $tangdan = xuatMang($arr);
            giamDan($arr);
            $giamdan = xuatMang($arr);
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
            <h2>SẮP XẾP MẢNG</h2>
        </div>
        <div class="form">
            <form action="" method="post">
            <div class="form-group">
                <div class="label-group"><label for="">Nhập mảng</label></div>
                <div>
                    <input type="text" name="dayso" id="" class="form-control" value="<?php  echo $dayso; ?>" aria-describedby="helpId">
                </div> 
             
            </div>
            <button class="btn btn-danger" name="submit">
                    Sắp xếp tăng/giảm
                 </button>
            <div class="form-group">
                <div class="label-group"><label for="" style="color: red; font-weight: bold; font-size: 20px">Sau khi sắp xếp</label></div>
           
            </div>
            <div class="form-group">
                <div class="label-group"><label for="">Tăng dần: </label></div>
                <div>
                    <input type="text" name="tangdan" readonly  id="" class="form-control" value="<?php  echo $tangdan; ?> " aria-describedby="helpId">
                </div> 
            </div>

        <div class="form-group">
            <div class="label-group">Giảm dần</div>
            <div> <input type="text" readonly name="giamdan" value="<?php echo $giamdan; ?>" id="" class="form-control" placeholder="" aria-describedby="helpId"></div>
        </div>
        <div class="form-group">
            <div class="label-group" style="color:red">(Ghi chú: Các phần tử trong mảng sẽ cách nhau bới dấu "," )</div>
                </div>
        </form>
        </div>
    </div>
</body>
</html>