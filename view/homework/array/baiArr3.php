<?php 
    $n  = $dayso = $min = $max = $tongdayso = "";
    $mang = array();
    function taoMang($n, &$array){
        for ($i=0; $i < $n; $i++) { 
            # code...
            array_push($array, rand(0,100));
        }
    }
    function xuatMang($n, $array){
        $xuatmang ="";
        for ($i=0; $i < $n; $i++) { 
            # code...
            $xuatmang .= $array[$i]. " ";
        }
        return $xuatmang;
    }
    function timMin($n, $array){
        $min = $array[0];
        for ($i=0; $i < $n; $i++)
            if($min > $array[$i]) $min = $array[$i];
        return $min; 
    }
    function timMax($n, $array){
        $max = $array[0];
        for ($i=0; $i < $n; $i++)
            if($max < $array[$i]) $max =$array[$i];
        return $max; 
    }
    function tinhTong($n, $array){
        $tong = 0;
        for ($i=0; $i < $n; $i++) $tong += $array[$i];
        return $tong;
    }
    if(isset($_POST['submit'])){
        if(is_numeric($_POST['sophantu']) && $_POST['sophantu'] >= 0 && $_POST['sophantu'] <=20)    {
                $n =   $_POST['sophantu']; 
                taoMang($n, $mang);
                $dayso = xuatMang($n, $mang);
                $min = timMin($n, $mang);
                $max = timMax($n, $mang);
                $tongdayso = tinhTong($n, $mang);
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
            width: 700px;
            border: 1px solid black;
            
        }
        .title{
            background-color: #dc3545;
            height: 70px;
        }
     
        .form-group{
            display: flex;
            padding: 10px;
        }
        .form-group .label-group{
            min-width: 300px;
            font-weight: bold;
        }
       
        ::-webkit-input-placeholder { /* WsebKit, Blink, Edge */
            color:  red !important;
        }
        button{
            width: 190px;
            margin: 0px 10px 10px 320px;
            
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
            <h2 class="text-center">PHÁT SINH VÀ TÍNH TOÁN</h2>
        </div>
        <div class="form">
            <form action="" method="post">
            <div class="form-group">
                <div class="label-group"><label for="">Nhập số phần tử</label></div>
                <div>
                    <input type="text" name="sophantu" id="" class="form-control" value="<?php  echo $n; ?>" aria-describedby="helpId">
                </div> 
            </div>
            <button class="btn btn-danger" name="submit">
                Phát sinh và tính toán
             </button> 
             <div class="form-group">
                <div class="label-group"><label for="">Mảng</label></div>
                <div>
                    <textarea readonly><?php echo $dayso?></textarea>    
                </div> 
            </div>
            <div class="form-group">
                <div class="label-group"><label for="">GTLN (Max) trong mảng</label></div>
                <div>
                    <input type="text"  readonly  id="" class="form-control" value="<?php  echo $max; ?> " aria-describedby="helpId">
                </div> 
            </div>

            <div class="form-group">
                <div class="label-group"><label for="">GTNN (Min) trong mảng</label></div>
                <div>
                    <input type="text" readonly id="" class="form-control" value="<?php  echo $min; ?> " aria-describedby="helpId">
                </div> 
            </div>
        <div class="form-group">
            <div class="label-group">Tổng dãy số</div>
            <div> <input type="text" readonly  value="<?php echo $tongdayso; ?>" id="" class="form-control" placeholder="" aria-describedby="helpId"></div>
        </div>
        <div class="form-group">
            <div class="label-group" style="color:red">(Ghi chú: Các phần tử trong mảng sẽ có giá trịtừ 0 đến 20)</div>
                </div>
        </form>
        </div>
    </div>
</body>
</html>