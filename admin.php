<?php
//Login page protection
if($_GET["username"]!="favour" && $_GET["password"]!="hart"){
header("Location: nextpage.php");
}

  // Create database connection
  $db = mysqli_connect("localhost", "root", "chemistry1", "project1");


  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['texty']);

  	// image file directory
	  $target = "images/". time() . '-' . basename($image);
	  

  
  	//execute query;
  	

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		  $msg = "Image uploaded successfully";
		  $sql = "INSERT INTO images (image, image_text) VALUES ('$target', '$image_text')";
          mysqli_query($db, $sql);

		  


  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM images LIMIT 1");
?>

<?php
 // Create database connection


 // Initialize message variable
 $msg = "";

 // If upload button is clicked ...
 if (isset($_POST['submittext'])) {
     // Get image name
     $learn=$_POST["learn"];
     $teach=$_POST["teach"];
     $travel=$_POST["travel"];
         $sqlupdate = "UPDATE `text_body` SET `travel_experience`='$travel',`teaaching_experience`='$teach',`learning_experience`='$learn'";
         
         mysqli_query($db, $sqlupdate);
         if ($db->query($sqlupdate) === TRUE) {
            echo "<script>alert('Record updated successfully');</script>";
        } else {
            echo "<script>alert('Error, please try again!');</script>";
        }
        
        $db->close();
 }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Image Upload</title>

    <style>
    .body3{
    background-image: url('https://78.media.tumblr.com/82efbe8c9a22f5ea0aa1faf5bf630c02/tumblr_ovd7v6M8b81wulsfyo1_500.gif');
    height: 200px; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.header1{
    font-size:45px;
    text-align:center;
    color:white;
    
}



    </style>
            <!-- <link rel="stylesheet" type="text/css" href="css/project.css">              -->
</head>
<body class= "body3">

        <h3 class="header1">Does this look like an Admin page?</h3>
        <hr>

<div id="content">

    <?php
		 echo($msg);
		 while ($row = mysqli_fetch_array($result)) {
                 echo "<div id='img_div'>";
      	        echo "<img src='".$row['image']."' >";
      	        echo "<p>".$row['image_text']."</p>";
                echo "</div>";
         }
         
    ?>
  <form method="POST" action="" enctype="multipart/form-data">
  	        <input type="hidden" name="size" value="1000000">
  	        <div>
  	     <input id="image" type="file" name="image">
            </div>
            <div>
            <button type="submit" name="upload">POST</button>
            </div>
            </form>

</div>
    <div id="text_content">
    <form method= "POST" action="">
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
          placeholder="Travel experience..." name="travel"></textarea><br>
          <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
          placeholder="Teaching experience..." name="teach"></textarea><br>
          <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	placeholder="Learning experience..." name="learn"></textarea><br>
  		<button type="submit" name="submittext">POST</button>
          </div>
    
</body>
</html>