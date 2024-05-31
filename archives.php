<?php
session_start();

if (isset($_SESSION['username']) && $_SESSION['username'] === 'admin') {
    include "includes/check_session.php";
} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/x-icon" href="img\logo1.ico">

	<link rel="stylesheet" type="text/css" href="css\index.css">
	<link rel="stylesheet" type="text/css" href="css\main.css">
	<link rel="stylesheet" type="text/css" href="css\sections.css">
	<link rel="stylesheet" type="text/css" href="css\archives.css">

	<title>InspirEd</title>

	<script src="js\jquery.min.js"></script>
	<script type="text/javascript" src="js\sections.js"></script>

</head>
<body>
	<div class="navbar">
		<div class="navbar-logo">
			<img src="img\logo1.png">
			<h1>InspirEd</h1>
		</div>
		<ul>
			<?php if ($isAdmin) { ?>
                <li class="navbar-menu"><a href="archives.php" id="current-link">Archives</a></li>
            <?php } ?>
			<li class="navbar-menu"><a href="index.php">Home</a></li>
			<li class="navbar-menu"><a href="about.php">About</a></li>
			<li class="navbar-menu"><a href="sections.php">Sections</a></li>
			<li class="navbar-menu"><a href="categories.php">Categories</a></li>
			<li>Welcome <?php echo $username; ?>!</li>
		</ul>
	</div>
	<div style="clear:both"></div>

	<div class="main">
		<div id="blue-gradient"></div>
		<div class="content">
			<h2>Archives</h2>
			<table>
				<thead>
					<tr>
						<th>#</th>
						<th>LRN</th>
						<th>First Name</th>
						<th>Middle Name</th>
						<th>Last Name</th>
						<th>Grade</th>
						<th>Section</th>
						<th>English</th>
						<th>Math</th>
						<th>Science</th>
						<th>Filipino</th>
						<th>Mother Tongue</th>
						<th>AP</th>
						<th>ESP</th>
						<th>MAPEH</th>
						<th>AVG</th>
						<th>Archived Date</th>
					</tr>
				</thead>
				<tbody id="table-body">
				</tbody>
			</table>

			<div style="clear:both"></div>				
		</div>
	</div>

	<div class="footer">
		<h6>© 2024 InspirEd. All rights reserved.</h6>
		<h6>BSM CS 3A - Web Dev & System Analysis / Design</h6>
		<h6>Aquino | Balinagay | Bernabe | Rosal</h6>
		<?php if (isset($_SESSION['username'])) { ?>
	        <h6><a href="includes/logout.php">Logout</a></h6>
	    <?php } ?>
	</div>

</body>

<script>
$(document).ready(function() {
    $.ajax({
        url: 'includes/get_archives_data.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            // sort uli round 3 :)
            data.sort(function(a, b) {
                return b.id - a.id;
            });

            $.each(data, function(index, row) {
                $('#table-body').append(
                    '<tr>' +
                    '<td>' + row.id + '</td>' +
                    '<td>' + row.lrn + '</td>' +
                    '<td>' + row.first_name + '</td>' +
                    '<td>' + row.middle_name + '</td>' +
                    '<td>' + row.last_name + '</td>' +
                    '<td>' + row.grade + '</td>' +
                    '<td>' + row.section + '</td>' +
                    '<td>' + row.english + '</td>' +
                    '<td>' + row.math + '</td>' +
                    '<td>' + row.science + '</td>' +
                    '<td>' + row.filipino + '</td>' +
                    '<td>' + row.mt + '</td>' +
                    '<td>' + row.ap + '</td>' +
                    '<td>' + row.esp + '</td>' +
                    '<td>' + row.mapeh + '</td>' +
                    '<td>' + row.avg + '</td>' +
                    '<td>' + row.archived_date + '</td>' +
                    '</tr>'
                );
            });
        }
    });
});
</script>


</html>