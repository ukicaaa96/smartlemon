<?php
session_start();
if(isset($_POST['search'])){
	$parameter = (isset($_POST['search-text'])) ? $_POST['search-text'] : "";
	$ud = new Userdata($parameter);
	if($ud->isSessionExist()){
		$ud->showData();
	} else{
		echo "not logged in";
	}
}

?>