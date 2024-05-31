<?php include "includes/check_session.php" ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="img\logo1.ico">

	<link rel="stylesheet" type="text/css" href="css\index.css">
    <link rel="stylesheet" type="text/css" href="css\main.css">
	<link rel="stylesheet" type="text/css" href="css\about.css">

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
            <li class="navbar-menu"><a href="index.php">Home</a></li>
            <li class="navbar-menu"><a id="current-link">About</a></li>
            <li class="navbar-menu"><a href="sections.php">Sections</a></li>
            <li class="navbar-menu"><a href="categories.php">Categories</a></li>
            <li>Welcome <?php echo $username; ?>!</li>
        </ul>
    </div>

    <div class="main">
        <div id="blue-gradient"></div>
        <div class="content">
            <p class="headline">School's Vision and Mission<hr></p>
         
            <div class="two-hovers">
                <div class="hover1">
                    <p class="vision"><b>Vision</b></p> <hr>
                    <div class = "container">
                    	<span class="description">We dream of Filipinos who passionately love their country and whose values and competencies enable them to realize their full potential and contribute meaningfully to building the nation. As a learner-centered public institution, the Department of Education continuously improves itself to better serve its stakeholders.</span>
                    </div>
                </div>
                <div class = "hover2">
                	<p class= "mission"><b>Mission</b></p> <hr>
                	<div class = "container">
                		<span class="description">To protect and promote the right of every Filipino to quality, equitable, culture-based, and complete basic education where: Students learn in a child-friendly, gender-sensitive, safe, and motivating environment. Teachers facilitate learning and constantly nurture every learner. Administrators and staff, as stewards of the institution, ensure an enabling and supportive environment for effective learning to happen. Family, community, and other stakeholders are actively engaged and share responsibility for developing life-long learners. </span>
                    </div>
                </div>
            </div>

            <p class="headline2">School's Core Values<hr></p>

            <div class="core-values">
                <div class="core-value">
                    <img src="img\makadiyos.png" alt="MD">
                    <div class="text-overlay">Makadiyos</div>
                </div>
                <div class="core-value">
                    <img src="img\nature.png" alt="MD2">
                    <div class="text-overlay">Makakalikasan</div>
                </div>

                <div class="core-value">
                    <img src="img\makatao.png" alt="MD3">
                    <div class="text-overlay">Makatao</div>
                </div>
                <div class="core-value">
                    <img src="img\nation.png" alt="MD4">
                    <div class="text-overlay">Makabansa</div>
                </div>
            </div>

            <br>
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