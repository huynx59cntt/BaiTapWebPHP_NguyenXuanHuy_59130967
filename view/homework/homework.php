<link rel="stylesheet" href="../css/homework.css">
<section class="homework">
        <?php 
            if(isset($_GET['bt'])){
                $page = $_GET['bt']; 
            }else $page =null;
               
            switch($page){
                case 'form':  include('form/index.php');
                            break;
                case 'array': include('array/index.php');
                            break;
                case 'mysql': include('mysql/index.php');
                            break;
            }
        ?>
</section>