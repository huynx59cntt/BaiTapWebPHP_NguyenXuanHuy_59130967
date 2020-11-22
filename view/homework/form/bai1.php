<?php
    $errorWidth = $errorHeight = $ChuVi = $DienTich = $chieudai = $chieurong = "";

    if(isset($_POST['submit'])){
        if(empty($_POST['chieudai']))   $errorHeight = "Chưa nhập vào chiều dài";
        else {
            if(is_numeric($_POST['chieudai']))
                $chieudai = $_POST['chieudai'];
            else  $errorHeight = "Chiều dài phải là số";
        } 
            
        if(empty($_POST['chieurong']))   $errorWidth = "Chưa nhập vào chiều rộng";
        else {
            if(is_numeric($_POST['chieurong']))
                $chieurong = $_POST['chieurong'];
            else  $errorWidth = "Chiều rộng phải là số";
        } 
        if($chieudai!="" && $chieurong!=""){
            if($chieudai < 1)   $errorHeight = "Chiều dài không được là số nhỏ hơn 1";
            else{
                if($chieurong < 1)  $errorWidth = "Chiều rộng không được là số nhỏ hơn 1";
                else{
                    if($chieurong > $chieudai){
                        $errorHeight = "Chiều dài không được nhỏ hơn chiều rộng";
                        $errorWidth = "Chiều rộng không được lớn  hơn chiều dài";
                    }
                    else{
                        $ChuVi = ($chieudai + $chieurong) * 2;
                        $DienTich = $chieurong * $chieudai;
                    }
                }
            } 
           
        }
    }
?>
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
            width: 150px;
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
     <div class="form-bt">
        <div class="title">
            <h2>DIỆN TÍCH VÀ CHU VI HÌNH CHỮ NHẬT</h2>
        </div>
        <div class="form">
            <form action="#" method="post">
            <div class="form-group">
                <div class="label-group"><label for="">Chiều dài</label></div>
                <div>
                    <input type="text" name="chieudai" id="" class="form-control" value="<?php  echo $chieudai; ?>" aria-describedby="helpId">
                </div>      
            </div>
            <div class="form-message-erorr"> <small><?php echo $errorHeight ?></small></div>
        <div class="form-group">
            <div class="label-group">Chiều rộng</div>
            <div> <input type="text" name="chieurong" id="" class="form-control" value="<?php echo $chieurong ?>" aria-describedby="helpId">           
        </div>
        </div>
        <div class="form-message-erorr"> <small><?php echo $errorWidth ?></small></div>
        <div class="form-group">
            <div class="label-group">Chu vi</div>
            <div> <input type="text" readonly name="chuvi" value="<?php echo $ChuVi; ?>" id="" class="form-control" placeholder="" aria-describedby="helpId"></div>
        </div>
        <div class="form-group">
            <div class="label-group">Diện tích</div>
            <div> <input type="text" readonly name="dientich" value="<?php echo $DienTich; ?>" id="" class="form-control" placeholder="" aria-describedby="helpId"></div>
        </div>
        <button class="btn btn-danger" name="submit">
            Tính
        </button> 
              </form>
        </div>
    </div>
<!DOCTYPE html>
