<?php
$user = $_POST['target'];
$client = $_POST['client'];
$url = '/upload/fileserver/'.$_FILES['file']['name'];
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
$filename = $temp[0];
if ($_FILES["file"]["size"] < 200000000)
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {

    if (file_exists("../upload/fileserver/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../upload/fileserver/" . $_FILES["file"]["name"]);
      include ('dbconnect.php');
      $query = mysqli_query($coninfo,"INSERT INTO FileServer (Filename,Filelocation,User,Groupname,Client) VALUES ('" . $filename . "','" . $url . "','" . $user . "','" . $user . "','" . $client . "')");
      
      header('Location: http://portal.businessonmarketst.com/user-hud.php');
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>