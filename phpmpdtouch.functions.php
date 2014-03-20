<?php

function getPlayer(){

  include("mpd.class.php");
  
  $mpd = new mpd("localhost","6600","password");

}

function getHeader(){

  echo '<link rel="stylesheet" type="text/css" href="css/main.css">';

  echo '<div class="mainPlayerTable">
	</div>';



}


?>