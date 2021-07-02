
<?php
    if (isset($_POST['submitEmail'])){
        $email = $_POST['emial'];

        echo "<h4>Welcome", $email ."</h4>";
    }
 ?>

<!DOCTYPE html>
<html lang="en">
    <form action="playground.php" method="POST">
        <input name="emial" placeholder="Enter your email..."><br>
        <button type="submit" name="submitEmail">Submit</button>
    </form>
</html>