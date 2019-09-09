<?php
require_once('Connection.php');
header('Access-Control-Allow-Origin: *');

    $sql='SELECT * FROM art_info';
    $result = mysqli_query($conn,$sql);
   

    while($row = mysqli_fetch_assoc($result)){
    
    
    
    
        $rl = $row["file_location"];
        
        $height = 300;$width = 100;

list($ori_width,$ori_height) = getimagesize($row["file_location"]);
print_r($row["file_location"]);

$ori_ratio = $ori_width/$ori_height;
$ratio = $width/$height;
$width = $height * $ori_ratio;
$height = $width * $ori_ratio;
//echo $width."".$height;

echo"<img src=".$rl." style='max-width:".$width.";height:".$height."px>";
    }

    

?>