<?php
$validTypes = ["image/jpeg","image/jpg","image/png"];
$maxSize = 1;

if(!is_dir("../images")){
    mkdir("../images");
}

$images = $_FILES["images"];
$fileCount = count($images["name"]);
$imagesList = [];

for($i=0; $i<$fileCount; $i++){
    foreach($images as $key => $item){
        $imagesList[$i][$key] = $item[$i];
    }
}

foreach($imagesList as $image){
    $size = $image["size"]/1000000;
    if(!in_array($image["type"],$validTypes)){
        echo "Error type load file: " . $image["name"] . "<br>";
        continue;
    }elseif($size>$maxSize){
        echo "Error max size load file: " . $image["name"] . "<br>";
        continue;
    }
    $ext = pathinfo($image["name"],PATHINFO_EXTENSION);
    $fileName = uniqid() . ".$ext";
    if(move_uploaded_file($image["tmp_name"],"../images/$fileName")){
        echo "Success load file " . $image["name"] . "<br>";
    }else{
        echo "Error loade file " . $image["name"] . "<br>";
    }
}