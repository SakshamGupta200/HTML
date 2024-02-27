<?php 
$msg = "";
  
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "image/".$filename;
          
    $db = mysqli_connect("localhost", "root", "", "libarary");
  
        // Get all the submitted data from the form
        $sql = "INSERT INTO photo (filename) VALUES ('$filename')";
  
        // Execute query
        mysqli_query($db, $sql);
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }
        else
        {
            $msg = "Failed to upload image";
      }
       //$result = mysqli_query($db, "SELECT * FROM photo");
      echo"$msg";
  }
 
 ?>
 <body>
 	<form method="POST" enctype="multipart/form-data">
            <input type="file" name="uploadfile"  value="" />
  
            <div>
                <button type="submit" name="upload"> UPLOAD  </button>
            </div>
        </form>
 </body>