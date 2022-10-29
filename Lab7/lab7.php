<?php session_start();?>
<html>
  <head>
    <title>Lab7</title>
    <style>
    * { font-family:Arial, Helvetica, sans-serif; }
    input { width:220px; }
    </style>
  </head>
<body>

<?php
$server_side_lang = array("PHP", "ASP.NET", "Ruby", "Java", "Scala", "JavaScript", "Python");
sort($server_side_lang);
for($i=0; $i<count($server_side_lang); $i++)
{
  echo($server_side_lang[$i]."<br>");
  
}
echo"<br>";
?>
<?php
  $usage_ssl = array();
  $usage_ssl["Python"] = 1.4;
  $usage_ssl["ASP.NET"] = 8.3;
  $usage_ssl["Ruby"] = 5.2;
  $usage_ssl["PHP"] = 78.9;
  $usage_ssl["Java"] = 3.6;
  $usage_ssl["Scala"] = 2.0;
  arsort($usage_ssl);
  foreach($usage_ssl as $lang => $rate)
  {
    echo "$lang : $rate% <br>";
  }
?>

<?php
  $_SESSION['fullname'] = 'Gavin Child';
  $_SESSION['courseid'] = 'IT-2600';
  setcookie('favlanguage','Python');
  setcookie('favoperatingsystem','Windows');
?>
<?php include("lab7favorites.php");?>
</body>
</html>
