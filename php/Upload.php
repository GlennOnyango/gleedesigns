<?php
session_start();
require_once 'Connection.php';
$name = $type_of_art = '';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = test_inputs($_POST['name']);
    $type_of_art = test_inputs($_POST['type_of_work']);

    $variable = "There is an empty field";
    switch ($variable) {
        case $name:
            echo 'You left the name field empty';
            break;

        case $type_of_art:
            echo 'You left the type of art field empty';
            break;

        default:


            if($type_of_art == "Video Editing"){
            
                $target_dir = 'videos/';
            $target_file = $target_dir . basename($_FILES['File_to_be_uploaded']['name']);
            if (file_exists($target_file)) {
                echo 'File alerdy exist';
            } elseif ($_FILES['File_to_be_uploaded']['size'] > 20000000) {
                echo 'This file is past 20MB';
            }else {

                if (move_uploaded_file($_FILES['File_to_be_uploaded']['tmp_name'], $target_file)) {
                    $size_in_mb = $_FILES['File_to_be_uploaded']['size'] / (1024 * 1024);
                    $sql = 'INSERT INTO video_art (Video_name,file_location,file_size)
           VALUES("' . $name . '","' . $target_file . '","' . $size_in_mb . '")';

                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        header('http://localhost/Chiri_Man/Controller.html');
                    } else {
        
                        echo"<div style='border-style:solid;border-color:#64b5f6;border-size:1px;background-color:#90caf9;width:20%;height:100px;margin-left:40%;margin-top:20%'><h5 style='text-align:center;color:white;font-size:24px'>Error sending file to Server</h5></div>";


                    }
                } else {
                  echo"<div style='border-style:solid;border-color:#64b5f6;border-size:1px;background-color:#90caf9;width:20%;height:100px;margin-left:40%;margin-top:20%'><h5 style='text-align:center;color:white;font-size:24px'>Error Uploading file: ".$_FILES['File_to_be_uploaded']['error']."</h5></div>";

                }
            }

            }
                else{

                    
            $target_dir = 'uploads/';
            $target_file = $target_dir . basename($_FILES['File_to_be_uploaded']['name']);
            if (file_exists($target_file)) {
                echo 'File alerdy exist';
            } elseif ($_FILES['File_to_be_uploaded']['size'] > 20000000) {
                echo 'This file is past 20MB';
            } else {

                if (move_uploaded_file($_FILES['File_to_be_uploaded']['tmp_name'], $target_file)) {
                    $size_in_mb = $_FILES['File_to_be_uploaded']['size'] / (1024 * 1024);
                    progess();
                    $sql = 'INSERT INTO art_info (Name_of_Art,Type_of_Art,file_location,total_file_size)
           VALUES("' . $name . '","' . $type_of_art . '","' . $target_file . '","' . $size_in_mb . '")';

                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        header('http://localhost/Chiri_Man/Controller.html');
                    } else {
                        echo 'Error sending file to Server';
                    }
                } else {
                    echo 'Error Uploading file';
                }
            }

                }

            break;
    }
}


function test_inputs($data)
{
    if (!empty($data)) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    } else {
        return 'There is an empty field';
    }
}
function progess(){
    $key = ini_get("session.upload_progress.prefix") . "test";
    if (!empty($_SESSION[$key])) {
        $current = $_SESSION[$key]["bytes_processed"];
        $total = $_SESSION[$key]["content_length"];
        //echo $current < $total ? ceil($current / $total * 100) : 100;
        $newtotal=($total-$current)/100;
        echo"<div class='progress'>
        <div class='determinate' style='width: ".$newtotal."%'></div>
    </div>";
    }
    else {
        echo 100;
    }
}
