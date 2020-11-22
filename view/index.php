<?php 
    session_start();
  
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" type="text/css" href="../css/music.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        #content{
            margin-top: 8%;
            min-height: 70vh;
}
    </style>
</head>
  <body>
        <div id="wrapper"> 

        <div id="header">
            <?php include('header.php'); ?>
        </div>
        <div id="content">
               <?php 
            
                if(isset($_GET['page'])){
                        $page = $_GET['page']; 
                }else $page =null;
                
                if($page == null) {
                         $page = 'home'; 
                }
                
                if(!isset($_SESSION['token']))
                  {
                    include('home/home.php');
 
                }
                else
                switch ($page) {
                         case 'home':
                             include('home/home.php');
                             break;
                         case 'homework':
                             include('homework/homework.php');
                             break;
                         case 'info':
                             include('info/info.php');
                             break;
                         case 'product':
                             include('product/product.php');
                             break;
                     }
               ?>
        </div>
        
        <div id="footer">
               <?php include('footer.php') ?>
        </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   </body>
</html>