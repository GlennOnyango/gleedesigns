<?php
header('Access-Control-Allow-Origin: *');
require_once 'Connection.php';
if(isset($_POST['option'])){

if($_POST['option']!="Video Editing" && $_POST['option']!="Tools I Use"){

    $sql='SELECT * FROM art_info WHERE Type_of_Art ="'.$_POST['option'].'"';
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_assoc($result)){
        echo'<div class="col l3 m3 s12 center">
        <img class="card center z-depth-5" src="php/'.$row["file_location"].'" style="max-width:100%;height:250px" >
        </div>';
    }}
}elseif($_POST['option'] == "Video Editing"){
    
$sql='SELECT * FROM video_art';
$result = mysqli_query($conn,$sql);
echo"<div style='margin:24px'>";
   while($row = mysqli_fetch_assoc($result)){
    echo'<video class="responsive-video col l3 m4 s12 center"  controls>
    <source src="php/'.$row["file_location"].'" height="250">
    </video>';
   //echo'<div class="col l3 m3 s12 video container center"><iframe height="250" src="php/'.$row["file_location"].'" frameborder="1" allowfullscreen></iframe> </div>';
}
echo"</div>";
}elseif($_POST['option']=="Tools I Use"){
    echo"
   <div class='row' style='margin:20px'>
   <div class='col l3 m3 card indigo darken-4' style='margin-left:15%;border:10px solid skyblue'>
<div class='card-content'>
<p><h1 class='blue-text accent-1'>Ps</h1></p>
<a href='#'><h5 class='card-title blue-text accent-1 red-text'>Adobe Photoshop</h5></a>
</div>

   </div>

   <div class='col l3 m3 card blue-grey darken-4' style='margin-left:5px;border:10px solid #ec407a'>
   <div class='card-content'>
   <p><h1 class='pink-text lighten-1'>Id</h1></p>
   <a href='http://localhost/Chiri_Man/index.html'><h5 class='card-title pink-text lighten-1'>Adobe Indesign</h5></a>
   </div>
   
      </div>

      <div class='col l3 m3 card brown darken-4' style='margin-left:5px;border:10px solid #ff9100'>
<div class='card-content'>
<p><h1 class='orange-text lighten-1'>Ai</h1></p>
<a href='#'><h5 class='card-title orange-text lighten-1'>Adobe Illustrator</h5></a>
</div>

   </div>
   <div class='col l3 m3 card brown darken-4' style='border:10px solid #dd2c00'>
<div class='card-content'>
<p><h1 class='deep-orange-text darken-4'>Ai</h1></p>
<a href='#'><h5 class='card-title deep-orange-text darken-4'>Adobe Animate</h5></a>
</div>

   </div>
   <div class='col l3 m3 card'>
<div class='card-content'>
<img src='php/tools/art-artistic-background-1020315.jpg' width='100%' height='85%' class='card-image' >
<a href='#'><h5 class='card-title'>Adobe Maya</h5></a>
</div>

   </div>

   <div class='col l3 m3 card'>
<div class='card-content'>
<img src='php/tools/art-artistic-background-1020315.jpg' width='100%' height='85%' class='card-image' >
<a href='#'><h5 class='card-title'>Adobe 3D Max</h5></a>
</div>

   </div>
   <div class='col l3 m3 card'>
<div class='card-content'>
<img src='php/tools/art-artistic-background-1020315.jpg' width='100%' height='85%' class='card-image' >
<a href='#'><h5 class='card-title'>Adobe Lightroom</h5></a>
</div>

   </div>

   <div class='col l3 m3 card'>
<div class='card-content'>
<img src='php/tools/art-artistic-background-1020315.jpg' width='100%' height='85%' class='card-image' >
<a href='#'><h5 class='card-title'>Autodesk Mudbox</h5></a>
</div>

   </div>

   <div class='col l3 m3 card'>
<div class='card-content'>
<img src='php/tools/art-artistic-background-1020315.jpg' width='100%' height='85%' class='card-image' >
<a href='#'><h5 class='card-title'>Adobe Fuse</h5></a>
</div>

   </div>
   <div class='col l3 m3 card'>
<div class='card-content'>
<img src='php/tools/art-artistic-background-1020315.jpg' width='100%' height='85%' class='card-image' >
<a href='#'><h5 class='card-title'>Naxon Cinema 4D</h5></a>
</div>

   </div>
   <div class='col l3 m3 card'>
<div class='card-content'>
<img src='php/tools/art-artistic-background-1020315.jpg' width='100%' height='85%' class='card-image' >
<a href='#'><h5 class='card-title'>Adobe Premier Pro</h5></a>
</div>

   </div>

   </div>
   ";
}


}
elseif(isset($_POST['all_options'])){
    $sql='SELECT * FROM art_info ';
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_assoc($result)){
        echo'<div class="col l3 m3 s12 center">
        <img class="card center" src="php/'.$row["file_location"].'" style="max-width:100%;height:250px" >
        </div>';
    }}
}
?>