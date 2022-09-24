<!DOCTYPE html>
<html>
<body>
Name: <?php echo $_GET["name"]; ?><br>
Major: <?php echo $_GET["major"]; ?><br>
Favorite Web Language: <?php echo $_GET["fav_language"]; ?><br>
Development Evironment:
<?php
    if (isset($_GET['vscode'])||isset($GET['brackets'])||isset($GET['other'])) 
    {
        if (isset($_GET['vscode'])){
            echo $_GET['vscode'];
        }
        else{}
        if (isset($GET['brackets'])){
            echo $_GET['brackets'];
        }
        else{}
        if (isset($GET['other'])){
            echo $_GET['othername'];
        }
        else{}
    }
    else 
    {
        echo "No Development Enviroment Listed.";
    }
?>
</body>
</html>
