

<?php
     function getData($sql){
        $conn = mysqli_connect("localhost", "root","", "listsong");
        $data = [];
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
            $data[] = $row;
        }
        mysqli_close($conn);
        return $data;
    }
    $sql = 'select * from songs';
    $data = getData($sql);
    $song = "";
?>
<style>
    .js-pscroll tbody tr:hover{
            cursor: pointer;
            background-color: #d7cae4 !important;
            font-weight: bold;
    }
</style>
<!--main visible-box and buttom-->
<div class="overallcontain">
    <!--audio file-->

    <?php 
      
        if(!isset($_GET['song'])){
           
                echo '
                <audio id="myTrack">
                <source src="../view/product/track/tuuyen.mp3" type="audio/mp3"/>
            </audio>
                ';
        }
        else{
            $song = $_GET['song'];
            $sql = 'select * from songs where id = "'.$_GET['song'].'"';
            $dataSong = getData($sql);
            echo '
            <audio id="myTrack">
                <source src="../view/product/track/'.$dataSong[0][3].'" type="audio/mp3"/>
            </audio>
            ';

        }
    ?>
 
    
    <div class="mainbox">
    
    	<div class="roundbox">
        	<img src="../img/xuanhuy.png">
          
           
            <div class="button">
            	<a class="backward"><i class="fa fa-backward" aria-hidden="true"></i></a>
                
            	<button type="button" id="playButton"></button>
          
                <a class="forward"><i class="fa fa-forward" aria-hidden="true"></i></a>
            </div>
            
         </div>
         	<!--mute or volume btn-->
             <button type="button" id="muteButton"></button>
             

             <div class="container-table100">
                <div class="wrap-table100">
                    <div class="table100 ver1 m-b-110">
                        <div class="table100-head">
                            <table>
                                <thead>
                                    <tr class="row100 head text-center">
                                        <th class="cell100 ">DANH SÁCH BÀI HÁT</th>
                                       
                                    </tr>
                                </thead>
                            </table>
                        </div>
    
                        <div class="table100-body js-pscroll">
                            <table>
                                <tbody>
                                    <?php 
                                    foreach($data as $player)
                                       if($player[0] == $song)
                                        echo '
                                        <tr class="row100 body" style="background: #f0e7f9;" onclick="getSong('.$player[0].')">
                                            <td class="cell100 column1">'.$player[0].'</td>
                                            <td class="cell100 column2">'.$player[1].'</td>
                                            <td class="cell100 column2">'.$player[2].'</td>
                                        </tr>
                                        ';
                                        else
                                        echo '
                                        <tr class="row100 body bg-white " onclick="getSong('.$player[0].')">
                                            <td class="cell100 column1">'.$player[0].'</td>
                                            <td class="cell100 column2">'.$player[1].'</td>
                                            <td class="cell100 column2">'.$player[2].'</td>
                                        </tr>
                                        ';
                                    ?>
                               
                                  </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
         
    </div>
    
</div>


<!-- backward playbarbox -->

<div class="playbar-box"> 

<?php 
    $song = "";
    if(!isset($_GET['song'])){
           echo '
            <div class="play-content">
                <span class="text1">Một bản nhạc buồn nhưng có giai điệu vui</span><br>
                <span class="text2">Tú Uyên</span>
                <div id="defultBar">
                    <div id="progressBar"></div>
                </div>
            </div>
           ';
      }
      else{
      
            echo '
            <div class="play-content">
                <span class="text1">'.$dataSong[0][1].'</span><br>
                <span class="text2">'.$dataSong[0][2].'</span>
                <div id="defultBar">
                    <div id="progressBar"></div>
                </div>
            </div>
        ';
    }
    ?>

    <div class="timer-text">
    	<span id="currentTime">00:00</span>
        <span id="fullDuration">00:00</span>
    </div>
</div>




<script>

    
$(document).ready(function(){
  $('a#click-a').click(function(){
    $('.nav').toggleClass('nav-view');
  });
});





var mytrack = document.getElementById('myTrack');
var playButton = document.getElementById('playButton');
var muteButton = document.getElementById('muteButton');

var duration = document.getElementById('fullDuration');
var currentTime = document.getElementById('currentTime');

var minutes = pad(parseInt(mytrack.duraction/60));
var seconds = pad(parseInt(mytrack.duration%60));


var barSize = 200;
var bar = document.getElementById('defultBar');
var progressBar = document.getElementById('progressBar');

function getSong(id){
    window.location.href = './index.php?page=product&song='+id;
}
//Fullduraction time of audio track timer JS.
mytrack.addEventListener("loadedmetadata", function () {
    //you can display the duration now
    var minutes = pad(parseInt(mytrack.duration / 60));
    var seconds = pad(parseInt(mytrack.duration % 60));
    duration.innerHTML = minutes + ':' + seconds;
});



playButton.addEventListener('click',playOrPause, false);
muteButton.addEventListener('click',muteOrUnmute, false);


function playOrPause(){
	if(!mytrack.paused && !mytrack.ended){
		mytrack.pause();
		
		playButton.style.backgroundImage = 'url(../icon/icons8-play-50.png)';
		playButton.style.backgroundColor ='#FFF';
		
		window.clearInterval(updateTime);//stop when pause
	}
	else{
		mytrack.play();
		
		playButton.style.backgroundImage = 'url(../icon/icons8-pause-50.png)';
		playButton.style.backgroundColor ='#fff4f4';
		
		updateTime = setInterval(update,500); //update time each
	}
}

//Mute btn JS
function muteOrUnmute(){
	if(mytrack.muted == true){
		mytrack.muted = false;
		
		muteButton.style.backgroundImage = 'url(../icon/icons8-voice-filled-15.png)';
		muteButton.style.backgroundColor ='#FFF';
	}
	else{
		mytrack.muted = true;
		
		muteButton.style.backgroundImage = 'url(../icon/icons8-mute-filled-15.png)';
		muteButton.style.backgroundColor ='#fff4f4';
	}
}

//currentTime JS
function update(){
	if(!mytrack.ended){
		var playedMinutes = pad(parseInt(mytrack.currentTime/60));
		var playedSeconds = pad(parseInt(mytrack.currentTime%60));
		currentTime.innerHTML = playedMinutes + ':' + playedSeconds;
		
		
		var size = parseInt(mytrack.currentTime*barSize/mytrack.duration);
		progressBar.style.width = size + "px";
	}
	else{
		currentTime.innerHTML = "0.00";
		
		//whenever audio ended play buttom replace at end
		playButton.style.backgroundImage = 'url(../icon/icons8-play-50.png)';
		playButton.style.backgroundColor ='#FFF';
		
		progressBar.style.width = "0px";
		window.clearInterval(updateTime);
	}
}
function pad(d){
	return (d<10) ? '0'+d.toString() : d.toString();
}
</script>
