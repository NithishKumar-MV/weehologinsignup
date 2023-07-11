<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action=login.php>
        <h2>login</h2>
        <?php  if(isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?> </p>
      <?php } ?>
        <label> user name </label>
        <input type="text" name="uname" placeholder="User Name"><br>
        <label> user name </label>
        <input type="password" name="password" placeholder="password">
        <button type=" submit"> login </button>
    </form>
</body>
</html>