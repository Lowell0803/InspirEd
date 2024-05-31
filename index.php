<?php include "includes/check_session.php" ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="img\logo1.ico">

    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">

    <style type="text/css">
        #footer-home {
            margin-top: 18%;
        }
    </style>

    <title>InspirEd</title>
</head>
<body>
    
    <div class="navbar">
        <div class="navbar-logo">
            <img src="img\logo1.png">
            <h1>InspirEd</h1>
        </div>
        
        <ul>
            <?php if ($isAdmin) { ?>
                <li class="navbar-menu"><a href="archives.php">Archives</a></li>
            <?php } ?>
            <li class="navbar-menu"><a id="current-link">Home</a></li>
            <li class="navbar-menu"><a href="about.php">About</a></li>
            <li class="navbar-menu"><a href="sections.php">Sections</a></li>
            <li class="navbar-menu"><a href="categories.php">Categories</a></li>
            <li>Welcome <?php echo $username; ?>!</li>
        </ul>
    </div>

    <div class="header">
        <img src="img\school1.jpg">

        <div class="header-content">
            <h6>LEARNING MANAGEMENT SYSTEM</h6>
            <h2>An Online Platform for <br> Faculties</h2>
            <p>This is a learning management system for the faculties of <br> Balagtas Central School</p>
            
            <?php if (!isset($_SESSION['username'])) { ?>
                <a href="login.php"><button>Login</button></a>
            <?php } else { ?>
                <button onclick="alert('You are currently logged-in. Please log out.');">Login</button>
            <?php } ?>
        </div>
    </div>

    <div class="footer" id="footer-home">
        <h6>© 2024 InspirEd. All rights reserved.</h6>
        <h6>BSM CS 3A - Web Dev & System Analysis / Design</h6>
        <h6>Aquino | Balinagay | Bernabe | Rosal</h6>
        <?php if (isset($_SESSION['username'])) { ?>
	        <h6><a href="includes/logout.php">Logout</a></h6>
	    <?php } ?>
    </div>
</body>
</html>

<!-- Big thanks to Jam Rosal for the outline of the System's Logo -->