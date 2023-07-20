<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/styles.css" />
    <title>Weeho Dashboard</title>
    <?php session_start(); ?>
</head>
<body onload="load()">
    <style>
        #logo-container {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 20vh; /* Adjust as needed */
        }
  
        #logo {
          width: 100px; /* Adjust as needed */
          height: auto; /* Preserve the aspect ratio */
        }
        /* Additional styles as needed */
      </style>
    <div class="d-flex" id="wrapper">
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0 dashboard-heading"><a href="dashboard.php">Dashboard</a></h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item-dropitem">
                            <a href="#" class="nav-link dropdown-toggle second-text fw-bold" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i> User
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a href="profile.php" class="dropdown-item">Profile</a></li>
                                <li><a href="#" class="dropdown-item">Settings</a></li>
                                <li><a href="logout.php" class="dropdown-item">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>                
            </nav>

           
        </div>
    </div>
        <div class="container-fluid px-4"></div>
          <section class="container forms">
        <div class="form login">
          <div class="form-content">
            <header>Profile</header>
              <div class="field input-field">
                <h3 style="color:white;">Name: <?php if(isset($_SESSION["name"])) echo $_SESSION["name"]; else header("Location:login.php")?></h3>
              </div>
              
              <div class="field input-field">
                <h3 style="color:white;">Email: <?php echo $_SESSION["email"]; ?></h3>
              </div>
  
              <div class="field input-field">
                <h3 style="color:white;">Phone: <?php echo $_SESSION["phone"]; ?></h3>
              </div>
  
              <div class="field input-field">
                <h3 style="color:white;">City: <?php echo $_SESSION["city"]; ?></h3>
              </div>
        </div>
          </section>
        </div>
   
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
    </body>
</html>