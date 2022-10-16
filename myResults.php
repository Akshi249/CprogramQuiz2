<!DOCTYPE html>
<html>
<head>
<title>results</title>
<style>
body{
background-image:url('image.jpeg');
background-repeat:no-repeat;
background-attachment:fixed;
background-size:100% 100%;
}
</style>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
 if(!empty($_POST['fr'])){
   $x=$_POST['fr'];
   if($x>=3)
   echo "<h1 style='font-style:bold;text-align:center;color:green;margin-top:70px;font-size:25px'>EXCELLENT</h1>";
   else
   echo "<h1 style='font-style:bold;text-align:center;color:green;margin-top:70px;font-size:25px'>Your need to practice more</h1>";
  echo "<h1 style='font-style:bold;text-align:center;color:green;font-size:30px'>Your have scored $x in QUIZ ON C PROGRAMMING</h1>";
  }
 else
  echo "some error has occurred";
}
?>
</body>
</html>