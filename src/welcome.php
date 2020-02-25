<?php 
    if(isset($_POST["submit"])){
        echo "Welcome {$_POST['name']}";
        echo "\nYour new username is {$_POST['username']}";
    }; 
