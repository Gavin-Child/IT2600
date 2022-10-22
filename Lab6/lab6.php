<?php
    $first_name = $_POST["first"];
    $middle_name = $_POST["middle"];
    $middle_initial = $middle_name[0];
    $last_name = $_POST["last"];
    echo $first_name . " " . $middle_initial . ". " . $last_name;
?>
<br>
<?php
    $string = $_POST["split"];
    $token = strtok($string, "-");
 
    while ($token !== false)
    {
        echo "$token<br>";
        $token = strtok("-");
    }
?>
<?php
    $shuffle = $_POST["shuffle"];
    echo str_shuffle($shuffle);
?>
<br>
<?php
    $lowercase = $_POST["tolower"];
    echo strtolower($lowercase);
?>
<br>
<?php
    $compare1 = $_POST["compare1"];
    $compare2 = $_POST["compare2"];
    echo strcmp($compare1,$compare2);
    echo "<br>";
    echo strcasecmp($compare1,$compare2);
?>
<br>
<?php
    $num1 = (int)$_POST["num1"];
    $num2 = (int)$_POST["num2"];
    echo (min($num1,$num2));
    echo "<br>";
    echo (max($num1,$num2));
    echo "<br>";
    echo (($num1 + $num2)/2);
?>
<br>
<?php
    echo rand(1,100);
?>
<br>
<?php
    $currency = $_POST["currency"];
    echo sprintf("$%.2f",$currency);
?>
<br>
<?php
    $year = $_POST["year"];
    $month = $_POST["month"];
    $day = $_POST["day"];
    $hour = $_POST["hour"];
    $minute = $_POST["minute"];
    $timestamp = mktime($hour,$minute,null,$month,$day,$year);
    echo date('Y-m-d \a\t H:i:s',$timestamp);
    echo "<br>";
    echo date('l, F d, Y \a\t g:i a', $timestamp);
?>
<br>
<?php
    $now = time();
    $year = $_POST["year"];
    $month = $_POST["month"];
    $day = $_POST["day"];
    $hour = $_POST["hour"];
    $minute = $_POST["minute"];
    $timestamp = mktime($hour,$minute,null,$month,$day,$year);

    $hoursuntill = ($now-$timestamp)/3600;
    echo $hoursuntill;
?>