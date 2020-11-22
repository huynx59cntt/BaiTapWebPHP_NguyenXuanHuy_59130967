<?php 


  if(isset($_POST['submitLogin'])){
    if($_POST['username'] == "huydeptrai" && $_POST['password'] == "123"){
      $_SESSION['token'] = "sdfljksdfklsdjfiowjfow123123@3hfiljd;";
        echo '<script>
        swal ( "Đăng nhập đúng" ,  "Cảm ơn đã vào trang web của Hy!" ,  "success" )
      </script>';
    }
    else{
      echo '<script>
        swal ( "Đăng nhập sai" ,  "Vui lòng đăng nhập lại! \n TK: huydeptrai \nMK: 123" ,  "error" )
      </script>';
    }
  }
?>
<link rel="stylesheet" href="../css/header.css">
<style>
.form-login{
  padding: 5%;
}

</style>
<div id="header">
      <header class="text-center m-3" id="sticky-header">
          <h2 >BÀI TẬP CÁ NHÂN</h2>
          <h6>Nguyễn Xuân Huy - 59130967</h6>
      </header>
<nav class="navbar navbar-expand-md bg-dark navbar-dark" id="nav-bar">
  <!-- Brand -->
  <a class="navbar-brand" href="#"> <img src="../img/logo.PNG" alt="" class="logo"></a>
  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <!-- Navbar links -->
  <div class="collapse navbar-collapse  justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav ">
      <li class="nav-item ">
        <a class="nav-link" href="?page=home">Home</a>
      </li>
      <?php 
          if(!isset($_SESSION['token'])){
            echo '
              <li class="nav-item dropdown" onclick="checkLogin()">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="">
                  Bài Tập
              </a>
            </li>
              <li class="nav-item" onclick="checkLogin()">
                <a class="nav-link" href="#">Thông tin cá nhân</a>
              </li>
              <li class="nav-item" onclick="checkLogin()">
                <a class="nav-link" href="#">Giải Trí</a>
              </li>
              <li class="nav-item"  data-toggle="modal" data-target="#myModal">
                <a class="nav-link" >Đăng nhập  <span class="mr-2"><i class="fa fa-sign-in"></i></a>
              </li>
            ';
          }else{
            echo '
         
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                Bài Tập
            </a>
            <div class="dropdown-menu bg-dark ">
              <a class="dropdown-item text-left" href="?page=homework&bt=form">Bài tập Form</a>
              <a class="dropdown-item text-left" href="?page=homework&bt=array">Bài tập Array</a>
              <a class="dropdown-item text-left" href="?page=homework&bt=mysql">Bài tập MySQL</a>
            </div>
          </li>
            <li class="nav-item" >
              <a class="nav-link" href="?page=info">Thông tin cá nhân</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=product">Giải Trí</a>
            </li>
            <li class="nav-item"  data-toggle="modal" data-target="#myModal" onclick="destroy()">
            <a class="nav-link" >Đăng Xuất  <span class="mr-2"><i class="fa fa-sign-in"></i></a>
          </li>
>
          ';
          }
      ?>
    </ul>
  </div>
</nav>
      <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <button type="button" class="close text-right" data-dismiss="modal">&times;</button>
        <div class="">
          <h4 class="text-center ">ĐĂNG NHẬP</h4></h4>
        </div>
        <div class="form-login">
          <form action="" method="post">
              <div class="form-group">
                <label for="" class="">Tên đăng nhập</label>
                <input type="text" name="username"  class="form-control" placeholder="" aria-describedby="helpId">
              </div>
              <div class="form-group">
                <label for="" class="">Mật Khẩu</label>
                <input type="password" name="password" class="form-control" placeholder="" aria-describedby="helpId">
              </div>
                <div class=" text-center">
                  <button type="submit" name="submitLogin" class="btn btn-danger" >Đăng nhập</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  </div>

<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("nav-bar");

var sticky = navbar.offsetTop;
var scrolltop = document.scrollTop
function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
    }
}
function checkLogin(){
  swal ( "Chưa Đăng Nhập" ,  "Phải đăng nhập mới xem đượt!" ,  "error" )
}
function destroy()
{
  var xhr = new XMLHttpRequest();
    xhr.onload = function() {
        document.location = 'logout.php';
    }
    xhr.open('GET', 'index.php', true);
    xhr.send();
}
</script>