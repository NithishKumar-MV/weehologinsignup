<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
        }
        .alb{
            width: 200px;
			height: 200px;
			padding: 5px;
			border-radius: 50%;
        }
        .alb img {
			width: 100%;
			height: 100%;
			border-radius: 50%;
		}
    </style>
    <?php include("conn.php"); session_start(); ?>
</head>
<body>
            <h2 style="color:red;">profile photo</h2>
            <br> <br>
            <?php  
                $result = mysqli_query($conn,"SELECT * FROM login_user WHERE email='" . $_SESSION["name"] . "'");
                $row  = mysqli_fetch_assoc($result);
                if($row['img_url'] != ""){ ?>
                <div class="alb">
                <img src="images/<?=$row['img_url']?>" >
                <table><tr><td>
                <form action="delete.php" method="post">
                <input type="submit" 
                  name="submit"
                  value="delete">
                </form>
                </td><td>
                <form action="upload.php" method="post">
                <input type="file" 
                  name="my_image">
                <input type="submit" 
                  name="submit"
                  value="change">
                </form>
                </div>
               <?php }else{ ?>
                <table><tr>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type="file" 
                  name="my_image">

           <input type="submit" 
                  name="submit"
                  value="Upload">
                </form>
                </td>
                </tr>
                </table>
                <?php } ?>
</body>
</html>