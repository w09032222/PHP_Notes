<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>form</title>
</head>

<body>
    <form action="form.php" method="POST">
        <input type="text" placeholder="enter here" />
        <input type="submit" name="submit" />
    </form>
    <?php
    if (isset($_POST['submit'])) {
        echo "text entered";
    }
    ?>
</body>

</html>