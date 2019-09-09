<?php
require_once('Connection.php');
header('Access-Control-Allow-Origin: *');

    $sql='SELECT * FROM art_info';
    $result = mysqli_query($conn,$sql);
    
       while($row = mysqli_fetch_assoc($result)){
        echo'<div class="col l3 m4 s12 center ">
         
        <img class="card center " src="php/'.$row["file_location"].'" style="max-width:100%;height:250px" >
        <p>'.$row["Name_of_Art"].'</p>
        </div>';
    }
    
?>