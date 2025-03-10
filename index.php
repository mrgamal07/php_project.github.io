<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <form action="login.php" method="post" >
        <h2>Login</h2>
        <?php if(isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?> /></p>
            <?php } ?>

        <label>user name</label>
        <input type="text" name="username" placeholder="user name"><br>

        <label>password</label>
        <input type="password" name="password" placeholder="password"><br>
        <button type="submit">login</button>
    </form>

</body>
</html>