<link rel="stylesheet" href="../css/homeworkform.css">
<style>
    .homewok-right{
        margin: auto;
    }
</style>
<div class="row ">
        <div class="col-md-2 homework-left text-center">
            <h4 >FORM</h4>
            <h4>Danh sách bài tập</h4>
            <ul class="nav  flex-column ">
                <li class="nav-item">
                <a class="nav-link" href="?page=homework&bt=form&dohomework=1">Bài 1</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=homework&bt=form&dohomework=2">Bài 2</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=homework&bt=form&dohomework=3">Bài 3</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=homework&bt=form&dohomework=4">Bài 4</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=homework&bt=form&dohomework=5">Bài 5</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=homework&bt=form&dohomework=6">Bài 6</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=homework&bt=form&dohomework=8">Bài 8</a>
                </li>
            </ul>
        </div>
        <div class="col-md-9 homewok-right">
        <?php 
            if(isset($_GET['dohomework'])){
                $page = $_GET['dohomework']; 
            }else $page = null;
            switch($page){
                case '1': include('bai1.php');
                            break;
                case '2': include('bai2.php');
                            break;
                case '3': include('bai3.php');
                            break;
                case '4': include('bai4.php');
                            break;
                case '5': include('bai5.php');
                            break;
                case '6': include('bai6.php');
                            break;   
                case '6kq.php': include('bai6kq.php');
                        break;  
                case '8kq.php': include('bai8kq.php');
                        break ;
                case '8': include('bai8.html');
                            break;   
            }
        ?>
        </div>
</div>