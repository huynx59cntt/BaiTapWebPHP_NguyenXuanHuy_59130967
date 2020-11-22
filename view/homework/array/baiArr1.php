<?php
  $message = "";
  $array = array();
    function cauA($n){
        $regex = "/^\d+$/";
        if(preg_match($regex, $n)) return 1;
        return 0;
    }
    function cauB($n, &$array){
        for ($i=0; $i < $n; $i++) { 
            array_push($array, rand(-50,50));
        }
    }
    function cauC($n, $array){
        $dem = 0;
        for ($i=0; $i < $n; $i++) { 
            # code...
            if($array[$i]%2==0) $dem++;
        }
        return $dem;
    }
    function cauD($n, $array){
        $dem = 0;
        for ($i=0; $i < $n; $i++) { 
            # code...
            if($array[$i]<100) $dem++;
        }
        return $dem;
    }
    function cauE($n, $array){
        $tongAm = 0;
        for ($i=0; $i < $n; $i++) { 
            # code...
            if($array[$i]<0) $tongAm += $array[$i];
        }
        return $tongAm;
    }

    function cauF($n, $array){
        $arr="";
        for ($i=0; $i < $n; $i++) { 
            # code...
            if($array[$i]==0) $arr.=($i+1)." ";
        }
        return $arr;
    }
    function cauG($n, &$array){
        for ($i=0; $i < $n - 1; $i++)
            for ($j=$i+1; $j < $n; $j++){
                if($array[$i] > $array[$j]){
                    $temp = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $temp;
                }
            }
    }
    function XuatMang($n, $array){
        $arr="";
        for ($i=0; $i < $n; $i++) { 
            $arr .=$array[$i]. " ";
        }
        return $arr;
    }
    $cauA = $cauB = $cauC = $cauD = $cauE = $cauF = $cauG = $n = "";
    if(isset($_POST['submit'])){
      if($_POST['numberN'] == '0'){
        $cauA = "Số 0 là không đượt đượt!!";
      }else
        if(!empty($_POST['numberN'])){
            $n = $_POST['numberN'];
            if(!cauA($n)){
                $cauA = "Không phải là số nguyên dương";
            }
            else {
                $cauA = "Là số nguyên dương";
                cauB($n, $array);
                $cauB = XuatMang($n, $array);
                $cauC = cauC($n, $array);
                $cauD = cauD($n, $array);
                $cauE = cauE($n, $array);
                $cauF = cauF($n, $array);
                 cauG($n, $array);
                $cauG = XuatMang($n, $array);
            }
                
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1</title>
    <style>
        .c{
            width: 800px;
            height: auto;
            padding-top: 5%;
        }
     .lable{
         width: 285px;
     }
   
     table tr td input{
        width: 300px;
     }
     table tr td textarea{
        width: 300px;
     }

    </style>
    
</head>
<body>
    <div class="c ">
        <form method="post" class="text-center">
            <span>Nhập vào N </span>
            <span> <input type="text" value="<?php echo $n?>"name="numberN" id=""> </span>
            <span> <input type="submit" name="submit" class="bg-danger" id="" value="Kiểm tra"> </span>
        </form>
        <div class="mt-3 p-3">
           <table class="table">
               <tr>
                   <td class="lable">Kiểm tra số nguyên dương</td>
                   <td><input type="text" value="<?php echo $cauA?>" name="songuyenduong" id="" readonly></td>
               </tr>
               <tr>
                   <td class="lable">Mảng phát sinh ngẫu nhiên</td>
                   <td>
                        <textarea readonly><?php echo $cauB?></textarea>    
                    </td>
               </tr>
               <tr>
                   <td class="lable">Đếm phần tử trong mảng có giá trị là chẵn</td>
                   <td><input type="text"value="<?php echo $cauC?>" readonly></td>
               </tr>
               <tr>
                   <td class="lable">Đếm số phần tử trong mảng có giá trị là số nhỏ hơn 100</td>
                   <td><input type="text"value="<?php echo $cauD?>" readonly></td>
               </tr>
               <tr>
                   <td class="lable">Tính tổng của các phần tử trong mảng có giá trị là số âm</td>
                   <td><input type="text"value="<?php echo $cauE?>" readonly></td>
               </tr>
               <tr>
                   <td class="lable">In ra vị trí của các phần tử trong mảng có giá trị bằng 0</td>
                   <td><input type="text" value="<?php echo $cauF?>" readonly></td>
               </tr>
               <tr>
                   <td class="lable">Sắp xếp các phần tử theo thứ tự tăng dần rồi in mảng ra màn hình  </td>
                   <td>
                        <textarea readonly><?php echo $cauG?></textarea>    
                    </td> </tr>
           </table>               
        </div>
    </div>

</body>
</html>