<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Weeho Dashboard</title>
    <?php session_start(); ?>
    <?php  include("events.php"); ?>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar starts here -->
<div class="whitebg">
    <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase">
      <img src="images/Weeho.png" alt="Weeho logo" class="logo img-fluid">
    </div>
  
    <div class="list-group list-group-flush my-3">
      <a href="#" class="list-group-item list-group-item-action bg-transparent text-dark active" onclick="toggleDropdown('eventDropdown')">
        <i class="fas fa-tachometer-alt me-2"></i> Dashboard
      </a>
      <a href="form2.html" class="list-group-item list-group-item-action bg-transparent text-primary fw-bold">
        <i class="fas fa-calendar-plus me-2"></i> Book an Event
      </a>
      <a href="#" class="list-group-item list-group-item-action bg-transparent text-primary fw-bold">
        <i class="fas fa-calendar-plus me-2"></i>Create an Event
      </a>
      <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
        <i class="fas fa-project-diagram me-2"></i>Logout
      </a>
    </div>
  </div>
  <!-- Sidebar ends here -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0 dashboard-heading">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle second-text fw-bold" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i> User
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><button class="dropdown-item fw-bold" onclick="openpopup()"><i class="fas fa-user"></i> Profile</button></li>
                                <li><a href="#" class="dropdown-item fw-bold"><i class="fas fa-cog"></i> Settings</a></li>
                                <li><a href="logout.php" class="dropdown-item fw-bold"><i class="fas fa-sign-out-alt"></i> Logout</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="row g-3 my-2">
                        <div class="col-md-3">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                    <h3 class="fs-2" id="0101">10</h3>
                                    <p class="fs-5">Total Events</p>
                                </div>
                                <i class="fas fa-calendar-alt fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>
                    
                        <div class="col-md-3">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                    <h3 class="fs-2" id="0102">5</h3>
                                    <p class="fs-5">Total Events in this Month</p>
                                </div>
                                <i class="fas fa-calendar fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>
                    
                        <div class="col-md-3">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                    <h3 class="fs-2" id="0103">12</h3>
                                    <p class="fs-5">Completed Events</p>
                                </div>
                                <i class="fas fa-check-circle fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>
                    
                        <div class="col-md-3">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                    <h3 class="fs-2" id="0104">8</h3>
                                    <p class="fs-5">Pending Events</p>
                                </div>
                                <i class="fas fa-exclamation-circle fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    
    <?php//profile popup?>
    <div class="popup" id="popup">
            <img src="images/backGimg.jpg">
            <table>
                <tr>
                    <td>
                        name:     
                    </td>
                    <td>
                        shahid ali
                    </td>
                </tr>
                <tr>
                    <td>
                        email:
                    </td>
                    <td>
                        asd@hkasd.com
                    </td>
                </tr>
                <tr>
                    <td>
                        phone:
                    </td>
                    <td>
                        123456789
                    </td>
                </tr>
                <tr>
                    <td>
                        city:
                    </td>
                    <td>
                        asdas
                    </td>
                </tr>
            </table>
    </div>

    <?php //  animated counter ?> 
    <script>
        function toggleDropdown(id) {
            var dropdown = document.getElementById(id);
            if (dropdown) {
                dropdown.classList.toggle('show');
            }
        }
    </script>
</body>
</html>