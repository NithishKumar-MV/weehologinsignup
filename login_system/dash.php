<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Dashboard</title>
    <!-- connect events.php file  -->
    <?php  include("events.php"); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body {
            background-image: url("images/backGimg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Roboto', sans-serif;
        }

        .navbar-custom {
            background-color: #333;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .navbar-custom .navbar-brand {
            color: #fff;
            font-size: 24px;
            font-weight: bold;
        }

        .navbar-custom .navbar-nav .nav-link {
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .navbar-custom .navbar-nav .nav-link:hover {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.2);
        }

        .navbar-custom .navbar-nav .form-control {
            font-family: 'Roboto', sans-serif;
        }

        .sidebar-heading {
            color: #ffffff;
            font-size: 24px;
            font-style: inherit;
            font-weight: bold;
            margin-top: 40px;
            margin-bottom: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.02);
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            color: #333;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-text {
            color: #555;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #333;
            color: #fff;
            border-radius: 20px;
            font-size: 16px;
            font-weight: bold;
            padding: 10px 20px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #555;
        }

        .logo-img {
            height: 100px;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="images/Weeho.png" alt="Logo" class="logo-img">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Attendees</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        User
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <!-- Sidebar -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-3">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action active" aria-current="true">Overview</li>
                    <li class="list-group-item list-group-item-action">Personal Parties</li>
                    <li class="list-group-item list-group-item-action">Personal Ceremony</li>
                    <li class="list-group-item list-group-item-action">Corporate Parties</li>
                    <li class="list-group-item list-group-item-action">Corporate Celebration</li>
                    <li class="list-group-item list-group-item-action">MICE Events</li>
                </ul>
            </div>
        </div>

            <!-- Main Content Area -->
            <div class="col-lg-9">
                <div class="container">
                    <section class="mt-4">
                        <h1 class="sidebar-heading">Event Summary</h1>

                        <div class="row">
                            <div class="col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Total Events</h5>
                                        <p class="card-text"><?php $row = mysqli_fetch_assoc($result); echo $row['total_events']; ?></p>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-3 mb-10">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Total Events in this Month</h5>
                                        <p class="card-text"><?php $row = mysqli_fetch_assoc($result); echo $row['total_events']; ?></p>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Completed Events</h5>
                                        <p class="card-text"><?php $row = mysqli_fetch_assoc($result); echo $row['total_events']; ?></p>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-3 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Pending Events</h5>
                                        <p class="card-text"><?php $row = mysqli_fetch_assoc($result); echo $row['total_events']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>                        

                        <h1 class="sidebar-heading mt-5">Personal Parties</h1>
                        <p>Explore and manage your personal parties.</p>

                        <!-- Personal Party List -->
                        <div class="card mt-4">
                            <div class="card-body">
                                <h5 class="card-title">Birthday Parties</h5>
                                <p class="card-text">Plan and celebrate birthdays with your loved ones.</p>
                                <p>Date: TBD</p>
                                <p>Time: TBD</p>
                                <p>Location: TBD</p>
                            </div>
                        </div>

                        <div class="card mt-4">
                            <div class="card-body">
                                <h5 class="card-title">Friends Parties</h5>
                                <p class="card-text">Organize fun and memorable parties with your friends.</p>
                                <p>Date: TBD</p>
                                <p>Time: TBD</p>
                                <p>Location: TBD</p>
                            </div>
                        </div>

                        <div class="card mt-4">
                            <div class="card-body">
                                <h5 class="card-title">Family Get-Together</h5>
                                <p class="card-text">Create lasting memories with your family through special get-togethers.</p>
                                <p>Date: TBD</p>
                                <p>Time: TBD</p>
                                <p>Location: TBD</p>
                            </div>
                        </div>
            <h1 class="sidebar-heading mt-5">Personal Ceremony</h1>
                    <p>Plan and celebrate memorable personal ceremonies.</p>

                    <!-- Personal Ceremony List -->
                    <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title">Baby Naming Ceremony</h5>
                            <p class="card-text">Celebrate the arrival of your bundle of joy with a special baby naming ceremony.</p>
                            <p>Date: TBD</p>
                            <p>Time: TBD</p>
                            <p>Location: TBD</p>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title">House Warming Ceremony</h5>
                            <p class="card-text">Mark the beginning of a new chapter in your home with a house warming ceremony.</p>
                            <p>Date: TBD</p>
                            <p>Time: TBD</p>
                            <p>Location: TBD</p>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title">Wedding Ceremony</h5>
                            <p class="card-text">Celebrate the union of two souls with a joyous wedding ceremony.</p>
                            <p>Date: TBD</p>
                            <p>Time: TBD</p>
                            <p>Location: TBD</p>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title">Engagement Ceremony</h5>
                            <p class="card-text">Announce your engagement and celebrate the beginning of a beautiful journey together.</p>
                            <p>Date: TBD</p>
                            <p>Time: TBD</p>
                            <p>Location: TBD</p>
                        </div>
                    </div>
                    <!-- Corporate Parties -->
<h1 class="sidebar-heading mt-5">Corporate Parties</h1>
<p>Plan and organize corporate parties and events.</p>

<!-- Corporate Parties List -->
<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">Annual Company Gala</h5>
        <p class="card-text">Celebrate the achievements of your company with an extravagant gala event.</p>
        <p>Date: TBD</p>
        <p>Time: TBD</p>
        <p>Location: TBD</p>
    </div>
</div>

<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">Product Launch Party</h5>
        <p class="card-text">Introduce and promote your latest product with a memorable launch party.</p>
        <p>Date: TBD</p>
        <p>Time: TBD</p>
        <p>Location: TBD</p>
    </div>
</div>

<!-- Team Indoor Parties -->
<h1 class="sidebar-heading mt-5">Team Indoor Parties</h1>
<p>Organize fun and engaging indoor parties for your team members.</p>

<!-- Team Indoor Parties List -->
<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">Game Night</h5>
        <p class="card-text">Bring your team together for a night of friendly competition and games.</p>
        <p>Date: TBD</p>
        <p>Time: TBD</p>
        <p>Location: TBD</p>
    </div>
</div>

<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">Movie Marathon</h5>
        <p class="card-text">Enjoy a movie marathon with your team and create a bonding experience.</p>
        <p>Date: TBD</p>
        <p>Time: TBD</p>
        <p>Location: TBD</p>
    </div>
</div>

<!-- Team Outdoor Parties -->
<h1 class="sidebar-heading mt-5">Team Outdoor Parties</h1>
<p>Plan exciting outdoor parties and team-building activities for your team.</p>

<!-- Team Outdoor Parties List -->
<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">Adventure Retreat</h5>
        <p class="card-text">Embark on an adventurous retreat and build teamwork through thrilling activities.</p>
        <p>Date: TBD</p>
        <p>Time: TBD</p>
        <p>Location: TBD</p>
    </div>
</div>

<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">Sports Tournament</h5>
        <p class="card-text">Organize a sports tournament for your team to promote teamwork and friendly competition.</p>
        <p>Date: TBD</p>
        <p>Time: TBD</p>
        <p>Location: TBD</p>
    </div>
</div>
<!-- Corporate Celebration -->
<h1 class="sidebar-heading mt-5">Corporate Celebration</h1>
<p>Explore and manage your corporate celebrations.</p>

<!-- Corporate Celebration List -->
<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">Company Inauguration</h5>
        <p class="card-text">Celebrate the inauguration of your company.</p>
        <p>Date: TBD</p>
        <p>Time: TBD</p>
        <p>Location: TBD</p>
    </div>
</div>

<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">Company Anniversary</h5>
        <p class="card-text">Celebrate another successful year of your company.</p>
        <p>Date: TBD</p>
        <p>Time: TBD</p>
        <p>Location: TBD</p>
    </div>
</div>

<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">Product Launching</h5>
        <p class="card-text">Introduce and launch a new product with a special event.</p>
        <p>Date: TBD</p>
        <p>Time: TBD</p>
        <p>Location: TBD</p>
    </div>
</div>

<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">Brand Launching</h5>
        <p class="card-text">Launch your brand and make a memorable impact in the market.</p>
        <p>Date: TBD</p>
        <p>Time: TBD</p>
        <p>Location: TBD</p>
    </div>
</div>
<!-- MICE Events -->
<h1 class="sidebar-heading mt-5">MICE Events</h1>
<p>Explore and manage your MICE events.</p>

<!-- MICE Events List -->
<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">Conferences & Offsites</h5>
        <p class="card-text">Organize conferences and offsite meetings for your company.</p>
        <p>Date: TBD</p>
        <p>Time: TBD</p>
        <p>Location: TBD</p>
    </div>
</div>

<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">Customer Meets</h5>
        <p class="card-text">Host special events to connect with your valuable customers.</p>
        <p>Date: TBD</p>
        <p>Time: TBD</p>
        <p>Location: TBD</p>
    </div>
</div>

<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">Exhibitions & Expo</h5>
        <p class="card-text">Participate in exhibitions and expos to showcase your products and services.</p>
        <p>Date: TBD</p>
        <p>Time: TBD</p>
        <p>Location: TBD</p>
    </div>
</div>

<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">Annual Day</h5>
        <p class="card-text">Celebrate the annual day of your company with a grand event.</p>
        <p>Date: TBD</p>
        <p>Time: TBD</p>
        <p>Location: TBD</p>
    </div>
</div>

<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">Family Day</h5>
        <p class="card-text">Organize a special day for employees and their families to enjoy together.</p>
        <p>Date: TBD</p>
        <p>Time: TBD</p>
        <p>Location: TBD</p>
    </div>
</div>

<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">Team Building Activities</h5>
        <p class="card-text">Engage your team with fun and collaborative team building activities.</p>
        <p>Date: TBD</p>
        <p>Time: TBD</p>
        <p>Location: TBD</p>
    </div>
</div>

<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">Rewards & Recognition</h5>
        <p class="card-text">Recognize and reward your employees for their outstanding contributions.</p>
        <p>Date: TBD</p>
        <p>Time: TBD</p>
        <p>Location: TBD</p>
    </div>
</div>

<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">Milestone Events</h5>
        <p class="card-text">Celebrate significant milestones and achievements of your company.</p>
        <p>Date: TBD</p>
        <p>Time: TBD</p>
        <p>Location: TBD</p>
    </div>
</div>
        </section>
    </div>
</div>
        </div>
    </div>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>