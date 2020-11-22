<link rel="stylesheet" href="../css/homeworkform.css">
<style>
    .homewok-right{
        margin: auto;
        padding: 5%;
    }
</style>
<div class="row ">
        <div class="col-md-2 homework-left text-center">
            <h4 >MYSQL</h4>
            <h4 >Danh sách bài tập</h4>
            <ul class="nav  flex-column ">
                <li class="nav-item">
                <a class="nav-link" href="?page=homework&bt=mysql&dohomework=1">Bài 2.1</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=homework&bt=mysql&dohomework=2">Bài 2.2</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=homework&bt=mysql&dohomework=3">Bài 2.3</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=homework&bt=mysql&dohomework=4">Bài 2.4</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=homework&bt=mysql&dohomework=5">Bài 2.5</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=homework&bt=mysql&dohomework=6">Bài 2.6</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=homework&bt=mysql&dohomework=7">Bài 2.7</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=homework&bt=mysql&dohomework=8">Bài 2.8</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=homework&bt=mysql&dohomework=9">Bài 2.9</a>
                </li>
            </ul>
        </div>
        <div class="col-md-9 homewok-right">
        <?php 
            if(isset($_GET['dohomework'])){
                $page = $_GET['dohomework']; 
            }else $page = null;
            switch($page){
                case '1': include('bai2.1.php');
                            break;
                case '2': include('bai2.2.php');
                            break;
                case '3': include('bai2.3.php');
                            break;
                case '4': include('bai2.4.php');
                            break;
                case '5': include('bai2.5.php');
                            break;
                case '6': include('bai2.6.php');
                            break;   
                case '7': include('bai2.7.php');
                            break;   
                case '8': include('bai2.8.php');
                            break;   
                case '9': include('bai2.9.php');
                            break;   
            }
        ?>
        </div>
</div>