
<?php
    if (isset($_POST['submitEmail'])){
        $email = $_POST['emial'];
        $name = $_POST['name'];
        $password = $_POST['password'];

        echo "<h4>Welcome ", $email ."</h4>" . "<br>";
        echo  $name ."</h4>". "<br>";
        echo  $password ."</h4>";
    }
 ?>

<!DOCTYPE html>
<html lang="en">
    <form action="playground.php" method="POST">
        <input type="emial" required name="emial" placeholder="Enter your email..."><br>
        <input type="text"  required name="name" placeholder="Enter name..."><br>
        <input type="password" required name="password" placeholder="Enter password..."><br>
        <button type="submit" name="submitEmail">Submit</button>
    </form>
</html>