<?php include "includes/check_session.php" ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/x-icon" href="img\logo1.ico">

	<link rel="stylesheet" type="text/css" href="css\index.css">
	<link rel="stylesheet" type="text/css" href="css\main.css">
	<link rel="stylesheet" type="text/css" href="css\categories.css">

	<script src="js\jquery.min.js"></script>

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
			<li class="navbar-menu"><a href="about.php">About</a></li>
			<li class="navbar-menu"><a href="sections.php">Sections</a></li>
			<li class="navbar-menu"><a id="current-link">Categories</a></li>
			<li>Welcome <?php echo $username; ?>!</li>
		</ul>
	</div>

	<div class="main">
		<div id="blue-gradient"></div>
		<div class="content">
			<h1>Categories for <span id="section-title"></span></h1>
			<br>
			<div id="section-buttons">
				<?php include 'includes/sections_buttons.php'; ?>
			</div>

			<br><hr>
			<h2>Awards</h2>

			<div id="table-awards">
			    <table>
			        <caption>With Honors</caption>
			        <thead>
			            <tr>
			                <th>#</th>
			                <th>LRN</th>
			                <th>Name</th>
			                <th>AVG</th>
			            </tr>
			        </thead>
			        <tbody id="table-honors">
			        </tbody>
			    </table>

			    <table>
			        <caption>With High Honors</caption>
			        <thead>
			            <tr>
			                <th>#</th>
			                <th>LRN</th>
			                <th>Name</th>
			                <th>AVG</th>
			            </tr>
			        </thead>
			        <tbody id="table-high">
			        </tbody>
			    </table>

			    <table>
			        <caption>With Highest Honors</caption>
			        <thead>
			            <tr>
			                <th>#</th>
			                <th>LRN</th>
			                <th>Name</th>
			                <th>AVG</th>
			            </tr>
			        </thead>
			        <tbody id="table-highest">
			        </tbody>
			    </table>
			</div>

			<br><br><hr>

			<h2>Top 10 (by Subjects)</h2>

			<div id="subjects-table-1">
			    <table>
			        <caption>English</caption>
			        <thead>
			            <tr>
			                <th>#</th>
			                <th>Name</th>
			                <th>Grade</th>
			            </tr>
			        </thead>
			        <tbody id="subject-english">
			        </tbody>
			    </table>

			    <table>
			        <caption>Math</caption>
			        <thead>
			            <tr>
			                <th>#</th>
			                <th>Name</th>
			                <th>Grade</th>
			            </tr>
			        </thead>
			        <tbody id="subject-math">
			        </tbody>
			    </table>

			    <table>
			        <caption>Science</caption>
			        <thead>
			            <tr>
			                <th>#</th>
			                <th>Name</th>
			                <th>Grade</th>
			            </tr>
			        </thead>
			        <tbody id="subject-science">
			        </tbody>
			    </table>

			    <table>
			        <caption>Filipino</caption>
			        <thead>
			            <tr>
			                <th>#</th>
			                <th>Name</th>
			                <th>Grade</th>
			            </tr>
			        </thead>
			        <tbody id="subject-filipino">
			        </tbody>
			    </table>
			</div>

			<div id="subjects-table-2">
			    <table>
			        <caption>MT</caption>
			        <thead>
			            <tr>
			                <th>#</th>
			                <th>Name</th>
			                <th>Grade</th>
			            </tr>
			        </thead>
			        <tbody id="subject-mt">
			        </tbody>
			    </table>

			    <table>
			        <caption>AP</caption>
			        <thead>
			            <tr>
			                <th>#</th>
			                <th>Name</th>
			                <th>Grade</th>
			            </tr>
			        </thead>
			        <tbody id="subject-ap">
			        </tbody>
			    </table>

			    <table>
			        <caption>ESP</caption>
			        <thead>
			            <tr>
			                <th>#</th>
			                <th>Name</th>
			                <th>Grade</th>
			            </tr>
			        </thead>
			        <tbody id="subject-esp">
			        </tbody>
			    </table>

			    <table>
			        <caption>MAPEH</caption>
			        <thead>
			            <tr>
			                <th>#</th>
			                <th>Name</th>
			                <th>Grade</th>
			            </tr>
			        </thead>
			        <tbody id="subject-mapeh">
			        </tbody>
			    </table>
			</div>
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

	<script type="text/javascript">
		let firstButton = document.querySelector("#section-buttons button");

		let buttonValueParts = firstButton.innerText.split("-");

		let buttonValueCurrent = firstButton.value;
		let gradeCurrent = buttonValueParts[0];
		let sectionCurrent = buttonValueParts[1];

		function getSectionInfo(currentSection) {
		    var xhttp = new XMLHttpRequest();
		    xhttp.onreadystatechange = function() {
		        if (this.readyState == 4 && this.status == 200) {
		            var response = JSON.parse(this.responseText);
		            sectionCurrent = response.sectionName;
		            gradeCurrent = response.grade;

		            reloadSectionTitle(gradeCurrent, sectionCurrent);
		        }
		    };
		    xhttp.open("GET", "includes/get_section_info.php?buttonValueCurrent=" + currentSection, true);
		    xhttp.send();
		}
		getSectionInfo(buttonValueCurrent);
		function reloadSectionTitle(grade, section) {
			document.getElementById("section-title").innerHTML = grade + " - " + section;
		}
		reloadSectionTitle(gradeCurrent, sectionCurrent);
 
		function reloadSectionButtons() {
			function reload() {
			    $.get('includes/sections_buttons.php', function(data) {
			        $('#section-buttons').html(data);
			    });
			}

			$(document).ready(function() {
			    reload();
			});
		}
		reloadSectionButtons();

		document.addEventListener("click", function(event) {
			if (event.target.classList.contains("buttons-generated")) {
				let buttonValue = event.target.value;

				buttonValueCurrent = buttonValue;

				getSectionInfo(buttonValueCurrent);
				displayHonors(buttonValueCurrent);
				displaySubjectsGrades(buttonValueCurrent);
			}
		});

		function displayHonors(currentSection) {
		    var xhttp = new XMLHttpRequest();
		    xhttp.onreadystatechange = function() {
		        if (this.readyState == 4 && this.status == 200) {
		        	console.log("Response Text:", this.responseText); 
		            // var responseData = JSON.parse(this.responseText);

		            var responseData;
			        if (this.responseText.trim() === "0 results[]") {
			            responseData = [];
			        } else {
			            try {
			                responseData = JSON.parse(this.responseText);
			            } catch (error) {
			                console.error("Error parsing JSON:", error);
			                responseData = [];
			            }
			        }

		            // sort uli :))
		            responseData.sort(function(a, b) {
		                return b.avg - a.avg;
		            });

		            document.getElementById("table-honors").innerHTML = "";
		            document.getElementById("table-high").innerHTML = "";
		            document.getElementById("table-highest").innerHTML = "";

		            var indexHonors = 0;
		            var indexHigh = 0;
		            var indexHighest = 0;

		            responseData.forEach(function(entry) {
		                var avg = parseFloat(entry.avg);

		                var newRow = document.createElement("tr");
		                newRow.innerHTML = "<td>" + (avg >= 90 && avg < 95 ? ++indexHonors : avg >= 95 && avg < 98 ? ++indexHigh : ++indexHighest) + "</td>" +
		                                    "<td>" + entry.lrn + "</td>" +
		                                    "<td>" + entry.first_name + " " + entry.last_name + "</td>" +
		                                    "<td>" + entry.avg + "</td>";

		                if (avg >= 90 && avg < 95) {
		                    document.getElementById("table-honors").appendChild(newRow);
		                } else if (avg >= 95 && avg < 98) {
		                    document.getElementById("table-high").appendChild(newRow);
		                } else if (avg >= 98 && avg <= 100) {
		                    document.getElementById("table-highest").appendChild(newRow);
		                }
		            });
		        }
		    };
		    xhttp.open("GET", "includes/display_honors.php?currentSection=" + currentSection, true);
		    xhttp.send();
		}

		displayHonors(buttonValueCurrent);

		function displaySubjectsGrades(currentSection) {
		    var xhttp = new XMLHttpRequest();
		    xhttp.onreadystatechange = function() {
		        if (this.readyState == 4 && this.status == 200) {
		        	console.log("Response Text:", this.responseText); 


					var responseData;
			        if (this.responseText.trim() === "0 results[]") {
			            responseData = [];
			        } else {
			            try {
			                responseData = JSON.parse(this.responseText);
			            } catch (error) {
			                console.error("Error parsing JSON:", error);
			                responseData = [];
			            }
			        }

			       
					['english', 'math', 'science', 'filipino', 'mt', 'ap', 'esp', 'mapeh'].forEach(function(subject) {
					    document.getElementById("subject-" + subject).innerHTML = "";
					});


		            for (var subject in responseData) {
		                if (responseData.hasOwnProperty(subject)) {
		                    var subjectData = responseData[subject];
		                    var tableRows = '';
		                    subjectData.forEach(function(student, index) {
		                        var studentIndex = index + 1;
		                        tableRows += "<tr><td>" + studentIndex + "</td><td>" + student.first_name + " " + student.last_name + "</td><td>" + student[subject] + "</td></tr>";
		                    });
		                    document.getElementById("subject-" + subject).innerHTML = tableRows;
		                }
		            }
		        }
		    };
		    xhttp.open("GET", "includes/display_subjects_grades.php?currentSection=" + currentSection, true);
		    xhttp.send();
		}

		displaySubjectsGrades(buttonValueCurrent);
	</script>
</body>
</html>