<?php
    echo $_SESSION['fullname'];
    echo "<br>";
    echo $_SESSION['courseid'];
    echo "<br>";
    $favlanguage = filter_input(INPUT_COOKIE, 'favlanguage');
    echo $favlanguage;
    echo "<br>";
    $favoperatingsystem = filter_input(INPUT_COOKIE, 'favoperatingsystem');
    echo $favoperatingsystem;
?>