<?php include "welcome.php";?>
<!DOCTYPE html>
<htmL>
    <body>
        <?php
        echo "<h1>Register</h1>";
        echo "<form method='post' action ='welcome.php'>";
        echo "First Name: <input type='text' name='name'><br>";
        echo "Surname: <input type='text' name='surname'><br>";
        echo "Username: <input type='text' name='username'><br>";
        echo "<input type='submit' name='submit'>";
        echo "</form>";
        ?>
    </body>
</htmL>