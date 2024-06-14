<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Form Example</title>
</head>
<body>
<?php
 if(isset($_POST["submit1"]))
  {
   $name=$_POST["user_name"];
   $email=$_POST["user_mail"];
   $fileHandle = fopen('TrabalhoFinal\emailList.txt', 'w') OR die ("Can't open file\n");
   $result = fwrite ($fileHandle, "NEW MESSAGE FROM " . $name . ", " . $email . ", " . $message . "\r\n");
   fclose($fileHandle);
   if ($result)
    {
     echo "Message added!"; 
    }
   else 
    {
     echo "Message not added!"; 
    }
  }
 else
  {
   echo "Some ERROR has occurred!";
 }
?>

 

</body>
</html>
