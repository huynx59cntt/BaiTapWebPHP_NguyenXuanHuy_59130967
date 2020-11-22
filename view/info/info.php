<link rel="stylesheet" href="../css/info-style.css">
<section class="info">
<figure class="snip1336" id="card"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample69.jpg" alt="sample69" />
  <figcaption >
    <img src="../img/xuanhuy.png" alt="profile-sample5" class="profile" />
    <h2>Nguyễn Xuân Huy<span>Developer</span></h2>
    <p>
    ɯ ɐ l n ǝ ᴉ ɥ u n ɐ ɔ n ǝ ʎ ɥ u ᴉ ɯ ɐ l ᴉ o u u o n ɯ ᴉ ɥ ɔ ɥ u ᴉ ɯ ᴉ ɥ ʇ ʎ ɐ u n ɥ ɔ ƃ u o p ɔ o n p ɔ o p n ɐ ɔ n ǝ u
    </p>
    <a  id="more-info">More Info</a>
    <a class="follow">Follow</a>
  </figcaption>
</figure>
    <div  class="show-info" id="showIF">
        <h3 class="text-danger text-right" id="close">X</h3>
        <div class="show-info-content">
            <h2 class="text-center ">Sinh Viên Đại học Nha Trang</h2>
            <h6 class="text-center">Khoa Công Nghệ Thông Tin - Khóa 59</h6>
            <p>Giới Tính: Nam</p>
            <p>Ngày Sinh: 27-12-1999</p>
            <p>Mã Số Sinh Viên: 59130967</p>
            <p>Mối Quan Hệ: Độc Thân</p>
            <p>Số Điện Thoại: 0924740562</p>
            <p>Email: huy.nx.59cntt@ntu.edu.vn</p>
            <p>Facebook: facebook.com/huy.spring.99</p>
            <p>Sở thích: Tú Uyên</p>
          </div>
       
    </div>
</section>
<script>

    document.addEventListener("DOMContentLoaded", function(event) {
        var showInfo = document.getElementById('more-info');
        var card = document.getElementById('card');
        var showIF = document.getElementById('showIF');
        var close = document.getElementById('close');
    showInfo.addEventListener("click",function(){
        card.classList.remove("moveOut");
        card.classList.add("move");
        showIF.classList.remove("resetwidthshow");
        showIF.classList.add("setwidthshow");
      
    })
    close.addEventListener("click",function(){
        card.classList.remove("move");
        card.classList.add("moveOut");
        showIF.classList.remove("setwidthshow");
        showIF.classList.add("resetwidthshow");
    }) ;
    

  });
</script>