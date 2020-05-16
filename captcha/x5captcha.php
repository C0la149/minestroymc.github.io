<?php
include("../res/x5engine.php");
$nameList = array("x7g","y2k","tmf","h5s","a7a","8wr","4dh","cu2","8es","lu8");
$charList = array("A","C","R","E","F","6","Z","3","G","M");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
