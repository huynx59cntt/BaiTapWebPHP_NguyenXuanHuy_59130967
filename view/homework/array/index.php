<link rel="stylesheet" href="../css/homeworkform.css">
<style>
    .homewok-right{
        margin: auto;
    }
</style>
<div class="row ">
        <div class="col-md-2 homework-left text-center">
            <h4 >Array</h4>
            <h4>Danh sách bài tập</h4>
            <ul class="nav  flex-column ">
                <li class="nav-item">
                <a class="nav-link" href="?page=homework&bt=array&dohomework=1">Bài 1</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=homework&bt=array&dohomework=2">Bài 2</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=homework&bt=array&dohomework=3">Bài 3</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=homework&bt=array&dohomework=4">Bài 4</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=homework&bt=array&dohomework=5">Bài 5</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=homework&bt=array&dohomework=6">Bài 6</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=homework&bt=array&dohomework=7">Bài 7</a>
                </li>
            </ul>
        </div>
        <div class="col-md-9 homewok-right">
        <?php 
            if(isset($_GET['dohomework'])){
                $page = $_GET['dohomework']; 
            }else $page = null;
            switch($page){
                case '1': include('baiArr1.php');
                            break;
                case '2': include('baiArr2.php');
                            break;
                case '3': include('baiArr3.php');
                            break;
                case '4': include('baiArr4.php');
                            break;
                case '5': include('baiArr5.php');
                            break;
                case '6': include('baiArr6.php');
                            break;   
                case '7': include('baiArr7.php');
                            break;   
            }
        ?>
        </div>
</div>