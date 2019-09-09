<?php
require_once('Connection.php');
header('Access-Control-Allow-Origin: *');
if(!$conn){echo'Bad Connection';}
else{
    
if(isset($_POST['name'])){
    $query = 'DELETE FROM art_info WHERE Name_of_Art = "'.$_POST['name'].'"';
    $res = mysqli_query($conn,$query);
    if($res){
        $sql='SELECT * FROM art_info';
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)){
        while($row = mysqli_fetch_assoc($result)){
            echo'<div class="col l3 m3 s12 card transparent ">
            <div class="card-image">
            <img class="" src="php/'.$row["file_location"].'"  >
            <span class="card-title"><button class="btn btn-flat" id="'.$row["Name_of_Art"].'">'.$row["Name_of_Art"].'</button></span>
            </div>
            
            </div>';
        }
    echo'<script>
    
    $(":button").click(function(){
        var Name_of = $(this).text();
        $.post("http://localhost/Chiri_Man/php/RemoveR.php",{name:Name_of},
            function (data, textStatus, jqXHR) {
                $("#remove_place").html(data);    
            },
            
        );
    });
    </script>';
    
        }
    }else{
        echo mysqli_error($conn);
    }
}
}
?>