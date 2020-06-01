<?php
include 'header.php';
include 'nav.php';
?>

<?php

if(isset($_GET['folderName']))
getFiles('images/'.$_GET['folderName']);

function getFiles($folder){
	$filePaths=scandir($folder,SCANDIR_SORT_NONE);
	$filePaths = array_diff($filePaths, array('.', '..'));

	echo '<div class="main" >';
	$contentElement='<div class="Images">';
	$indexCounter=0;
	foreach($filePaths as $file){
				$indexCounter++;
		$contentElement.='<img id="img'.$indexCounter.'" src="'.$folder.'/'.$file.'">';
	}
	echo $contentElement;
	echo '</div>';
	echo '</div>';
}
?>


