<?php
	require_once("ClientInfo.php");
	$os 	= ClientInfo::getOs();
	$browser= ClientInfo::getBrowser();
	$robot 	= ClientInfo::isRobot(); 	
	$address= ClientInfo::getAddress();
	echo "你的操作系统是".$os;
	echo "<br>";
	echo "你的浏览器是".$browser['name'].",版本为".$browser['version'];
	echo "<br>";
	if($robot) {
		echo "哇，你是蜘蛛";
	} else {
		echo "你不是蜘蛛哦";
	}
	echo "<br>";
	if($address) {
		echo "你来自".implode('-', $address);
	} else {
		echo "啊呀，你难道是火星来的";
	}