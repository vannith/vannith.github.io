<?php
include 'header.php';
include 'nav.php';
?>

<?php

if(isset($_GET['folderName']))
getFiles('images/'.$_GET['folderName']);

function getFiles($folder){
	$filePaths=scandir($folder);
	$filePaths = array_diff($filePaths, array('.', '..'));

	echo '<div class="col-md-10 float-left" >';
	$contentElement='<div class="Images float-left">';
	$indexCounter=0;
	foreach($filePaths as $file){
				$indexCounter++;
		$contentElement.='<img id="img'.$indexCounter.'" class="float-left" href="show_image.php?imageName="'.$file.'&folderName='.$folder.'" src="'.$folder.'/'.$file.'">';
	}
	echo $contentElement;
	echo '</div>';
	echo '</div>';
}
?>


