<?php
	require_once('vendor/autoload.php'); 

	/*Imagick object*/

    $image = new Imagick('img/geeksforgeeks.png');

    /*transverseImage*/

    $image->transverseImage();
    header("Content-Type: image/jpg");
    echo $image->getImageBlob();
?>