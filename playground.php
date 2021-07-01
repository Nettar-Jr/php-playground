<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $name = $email = $comment = $gender = $website = "";

        
    ?>

    <h1>PHP Form Validation</h1>
    <form action="<?php echo htmlspecialchar($_SERVER["PHP_SELF"]); ?>">
        Nmae: <input type="text" name="name"><br>
        Email: <input type="text" name="email"><br>
        website: <input type="text" name="website"><br>
        Comment: <textarea name="comment" id="comment" cols="40" rows="5"></textarea><br>

        Gender:
        <input type="radio" name="gender" value="Male">
        <input type="radio" name="gender" value="Female">
        <input type="radio" name="gender" value="Other">
        <br> <br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        echo "<h2> Your Inputs: </h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
        echo "<br>";
    ?>

    
</body>
</html>