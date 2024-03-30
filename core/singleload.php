<?php
$validTypes = ["image/jpeg","image/jpg","image/png"];
$maxSize = 1;

if(!is_dir("../image")){
    mkdir("../image");
}

$image = $_FILES["image"];
$size = $image["size"]/1000000;

if(!in_array($image["type"],$validTypes)){
    echo "Error type load file";
    die();
}elseif($size>$maxSize){
    echo "Error max size load file";
    die();
}

$ext = pathinfo($image["name"],PATHINFO_EXTENSION);
$fileName = uniqid() . ".$ext";

if(move_uploaded_file($image["tmp_name"],"../image/$fileName")){
    echo "Success load file";
}else{
    echo "Error load file";
}