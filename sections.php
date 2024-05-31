<?php include "includes/check_session.php" ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/x-icon" href="img\logo1.ico">

	<link rel="stylesheet" type="text/css" href="css\index.css">
	<link rel="stylesheet" type="text/css" href="css\main.css">
	<link rel="stylesheet" type="text/css" href="css\sections.css">

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
                <li class="navbar-menu"><a href="archives.php">Archives</a></li>
            <?php } ?>
			<li class="navbar-menu"><a href="index.php">Home</a></li>
			<li class="navbar-menu"><a href="about.php">About</a></li>
			<li class="navbar-menu"><a id="current-link">Sections</a></li>
			<li class="navbar-menu"><a href="categories.php">Categories</a></li>
			<li>Welcome <?php echo $username; ?>!</li>
		</ul>
	</div>
	<div style="clear:both"></div>

	<div class="main">
		<div id="blue-gradient"></div>
		<div class="content">
			<h2 id="section-title"></h2>
			<div id="section-buttons">
				<div id="sort">
					<?php include 'includes/sections_buttons.php'; ?>
				</div>
				&nbsp;
				<img src="img/plus.png" id="plus-button">&nbsp;
				<img src="img/minus.png" id="minus-button">&nbsp;
			</div>
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
					</tr>
				</thead>
					<tbody id="table-body" contenteditable>
					    <script type="text/javascript">
					        function sendDataToPHP(data) {
					            let xhr = new XMLHttpRequest();
					            xhr.open("POST", "includes/initialize_table_data.php", true);
					            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
					            xhr.onreadystatechange = function() {
					                if (xhr.readyState === XMLHttpRequest.DONE) {
					                    if (xhr.status === 200) {
					                        document.getElementById("table-body").innerHTML = xhr.responseText;
					                    } else {
					                        console.error('Error:', xhr.statusText);
					                    }
					                }
					            };
					            let params = 'firstSection=' + encodeURIComponent(data);
					            xhr.send(params);
					        }

					        let firstSection = document.querySelector("#section-buttons button").value;
					        sendDataToPHP(firstSection);
					    </script>
					</tbody>
			</table>

			<div id="modify-buttons">
				<input type="text" id="remove-num">
				<button onclick="removeStudent()" id="remove-button">Archive</button>
				<button onclick="addStudent()" id="add-button">Add</button>
				<button onclick="saveTable()">Save</button>
				<button onclick="restoreTable()">Reset</button>
			</div>

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

	<script type="text/javascript">
		function sortButtons(text) {
		    // var buttons = $("#sort").find("button");

		    // buttons.sort(function(a, b) {
		    //     var numA = parseInt($(a).text().match(/\d+/)[0]);
		    //     var numB = parseInt($(b).text().match(/\d+/)[0]);
		    //     return numA - numB;
		    // });

		    // $("#sort").empty().append(buttons);

		    console.log(text);
		}


		sortButtons("start");


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
		            sortButtons("sectioninfo");
		        }
		    };
		    xhttp.open("GET", "includes/get_section_info.php?buttonValueCurrent=" + currentSection, true);
		    xhttp.send();
		}
		getSectionInfo(buttonValueCurrent);


		
		function reloadSectionTitle(grade, section) {
			document.getElementById("section-title").innerHTML = grade + " - " + section;
			sortButtons("reload sectiontitle");
		}
		reloadSectionTitle(gradeCurrent, sectionCurrent);
 
		function reloadSectionButtons() {


			function reload() {
			    
			    $.get('includes/sections_buttons.php', function(data) {
			        $('#section-buttons').html(data);

			        $('#section-buttons').append('<img src="img/plus.png" id="plus-button">&nbsp;');
        			$('#section-buttons').append('<img src="img/minus.png" id="minus-button">&nbsp;');

        			var plus_image = document.getElementById("plus-button");
        			plus_image.onclick = addSection;

        			var minus_image = document.getElementById("minus-button");
        			minus_image.onclick = removeSection;

        			sortButtons("reload");
			    });
			}


			$(document).ready(function() {
			    reload();

			    sortButtons("reload ready");
			});

			sortButtons("reload last");
		}

		function addSection() {
		    let isAdmin = <?php echo ($isAdmin ? 'true' : 'false'); ?>;
		    if (isAdmin) {
		        var grade = window.prompt("Grade:");

		        if (grade !== null) {
		            var section = window.prompt("Section:");

		            alert("Grade: " + grade + "\nSection: " + section);

		            let gradeFiltered = "";
		            let gradeDigits = grade.match(/\d+/);
		            if (gradeDigits) {
		                let gradeNumber = parseInt(gradeDigits[0]);
		                if (gradeNumber >= 1 && gradeNumber <= 6) {
		                    gradeFiltered = gradeNumber.toString();
		                }
		            }

		            let sectionFiltered = section.trim().replace(/\s{2,}/g, ' ').substring(0, 20)

		            console.log("Filtered Grade:", gradeFiltered);
		            console.log("Filtered Section:", sectionFiltered);

		            if (!gradeFiltered || !sectionFiltered) {
		            } else {
		                $.ajax({
		                    type: 'GET',
		                    url: 'includes/add_table.php',
		                    data: { grade: gradeFiltered, section: sectionFiltered },
		                    success: function(response) {
		                        console.log('Data sent successfully');
		                        reloadSectionButtons();
		                        sortButtons("add");
		                    },
		                    error: function(xhr, status, error) {
		                        console.error('Error sending data:', error);
		                    }
		                });
		            }
		        }
		    } else {
		        alert("You do not have permission to add a section.\nPlease contact your administrator.");
		    }
		}
	
		var plus_image = document.getElementById("plus-button");
		plus_image.onclick = addSection;
		

		function removeSection() {
		    let isAdmin = <?php echo ($isAdmin ? 'true' : 'false'); ?>;
		    let sectionButtons = document.querySelectorAll("#section-buttons button");

		    if (sectionButtons.length > 1) {
		        if (isAdmin) {
		            var tableBody = document.getElementById("table-body");
		            var firstRow = tableBody.rows[0];
		            var sixthColumnValue, seventhColumnValue;

		            if (typeof firstRow !== 'undefined' &&
		                typeof firstRow.cells[5] !== 'undefined' &&
		                typeof firstRow.cells[6] !== 'undefined' &&
		                firstRow.cells[5].innerText !== 'undefined' &&
		                firstRow.cells[6].innerText !== 'undefined') {
		                sixthColumnValue = firstRow.cells[5].innerText;
		                seventhColumnValue = firstRow.cells[6].innerText;
		            } else {
		                sixthColumnValue = "1";
		                seventhColumnValue = "Default";
		            }

		            var section_name = sixthColumnValue + " - " + seventhColumnValue;
		            var section = buttonValueCurrent;

		            var confirmation = confirm("Do you really want to delete " + section_name + "?\nTable name in database: " + section + "\nThis action cannot be undone.");

		            if (confirmation) {
		                var xhr = new XMLHttpRequest();
		                xhr.open("GET", "includes/remove_table.php?section_id=" + encodeURIComponent(section) + "&grade=" + encodeURIComponent(sixthColumnValue) + "&section=" + encodeURIComponent(seventhColumnValue), true);
		                xhr.onreadystatechange = function () {
		                    if (xhr.readyState == 4 && xhr.status == 200) {
		                        alert(xhr.responseText);
		                        alert("Table deleted.");

		                        console.log("here1");

		                        reloadSectionButtons();
		                        sortButtons("remove");
		                        let buttons = document.querySelectorAll("#section-buttons button");
		                        let firstButton_afterRemove = buttons[1];
		                        console.log("here2");
		                        viewStudents(firstButton_afterRemove.value);
		                        console.log("here3");
		                        buttonValueCurrent = firstButton_afterRemove.value;
		                        getSectionInfo(buttonValueCurrent);
		                        console.log("here4");
		                    }
		                };
		                console.log(xhr);
		                xhr.send();
		                console.log("here5");
		            } else {
		                alert("Cancelled");
		            }
		        } else {
		            alert("You do not have permission to delete a section.\nPlease contact your administrator.");
		        }
		    } else {
		        alert("You cannot delete the last remaining section");
		    }
		}


		var minus_image = document.getElementById("minus-button");
		minus_image.onclick = removeSection;

		function makeNonEditable() {
			const rows = document.querySelectorAll("#table-body tr");

			rows.forEach(row => {
			    const cells = row.querySelectorAll("td");

			    cells.forEach((cell, index) => {
			    	if ([0, 5, 6, 15].includes(index)) {
			    		cell.contentEditable = false;
			    	}
			    });
			});
		}
		makeNonEditable();


		function viewStudents(currentSection) {
			let xhttp = new XMLHttpRequest();

			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("table-body").innerHTML = this.responseText;
					makeNonEditable();

					sortButtons("view");
		 		}
			};

			xhttp.open("GET", "includes/get_table_data.php?section=" + currentSection, true);
			xhttp.send();
		}

		
		document.addEventListener("click", function(event) {
			if (event.target.classList.contains("buttons-generated")) {
				let buttonValue = event.target.value;
				console.log("Button value:", buttonValue);

				buttonValueCurrent = buttonValue;
				console.log(buttonValue);
				viewStudents(buttonValue);

				console.log("Section:" + sectionCurrent);
				getSectionInfo(buttonValueCurrent);
				console.log("Section:" + sectionCurrent);
				
			}
		});

		function isLRNExists(lrn) {
		    let tableBody = document.getElementById("table-body");
		    for (let i = 0; i < tableBody.rows.length; i++) {
		        let lrnCell = tableBody.rows[i].cells[1];
		        if (lrnCell.innerHTML === lrn) {
		            return true; 
		        }
		    }
		    return false; 
		}

		function addStudent() {
			let tableBody = document.getElementById("table-body");
		    let numRows = tableBody.rows.length;

		    let firstSixDigits = '104728'; 
		    let currentYear = new Date().getFullYear();

		    let previousGrade = parseInt(gradeCurrent);

		    let yearMinusGrade = currentYear - previousGrade;
		    let yearMinusGradeDigits = yearMinusGrade.toString().slice(-2);
		    let lrnPrefix = firstSixDigits + yearMinusGradeDigits;

		    let randomDigits;
		    do {
		        randomDigits = Math.floor(Math.random() * 10000).toString().padStart(4, '0');
		        var newLRN = lrnPrefix + randomDigits;
		    } while (isLRNExists(newLRN)); 


			let table = document.getElementById("table-body");
			let row = table.insertRow(numRows);
			let id = row.insertCell(0);
			let lrn = row.insertCell(1);
			let first_name = row.insertCell(2);
			let middle_name = row.insertCell(3);
			let last_name = row.insertCell(4);
			let grade = row.insertCell(5)
			let section = row.insertCell(6);
			let english = row.insertCell(7);
			let math = row.insertCell(8);
			let science = row.insertCell(9);
			let filipino = row.insertCell(10);
			let mt = row.insertCell(11);
			let ap = row.insertCell(12);
			let esp = row.insertCell(13);
			let mapeh = row.insertCell(14);
			let avg = row.insertCell(15);

			id.innerHTML = numRows + 1;
			lrn.innerHTML = newLRN;
			first_name.innerHTML = "Juan";
			middle_name.innerHTML = "None";
			last_name.innerHTML = "Dela Cruz";

			grade.innerHTML = gradeCurrent;
			section.innerHTML = sectionCurrent;

			english.innerHTML = 70;
			math.innerHTML = 70;
			science.innerHTML = 70;
			filipino.innerHTML = 70;
			mt.innerHTML = 70;
			ap.innerHTML = 70;
			esp.innerHTML = 70;
			mapeh.innerHTML = 70;
			avg.innerHTML = 70;

			grade.setAttribute("contenteditable", "false");
			section.setAttribute("contenteditable", "false");
			id.setAttribute("contenteditable", "false");
			avg.setAttribute("contenteditable", "false");
		}

		function restoreTable() {
			var confirmation = confirm("Do you want to reset the table?\nThis will overwrite unsaved changes!");
		    if (!confirmation) {
		        return; 
		    }

			viewStudents(buttonValueCurrent);
			console.log("Table is restored.");
		}

		function saveTable() {
			var confirmation = confirm("Do you want to save this into the database?");
		    if (!confirmation) {
		        return; 
		    }

		    var table = document.getElementById("table-body");
			var data = []; 

			for (var i = 0, row; row = table.rows[i]; i++) {
			    var rowData = {};
			    var total = 0;

			    for (var j = 0, col; col = row.cells[j]; j++) {
			        var cellContent = col.textContent.trim();

			        if (j === 1) {
			            var sanitizedValue = cellContent.replace(/\D/g, '').substring(0, 12);
			            var formattedValue = sanitizedValue.padStart(12, '0');
			            rowData[j] = formattedValue;
			        } else if (j >= 7 && j <= 14) {
			            var floatValue = parseFloat(cellContent);
			            if (isNaN(floatValue)) {
			                rowData[j] = '70';
			                total += 70;
			            } else {
				                var formattedValue = Math.min(Math.max(Math.round(floatValue * 100) / 100, 70), 100).toFixed(2);
			                rowData[j] = formattedValue;

			                if (floatValue < 70) {
			                	floatValue = 70;
			                }
			                else if (floatValue > 100) {
			                	floatValue = 100;
			                }
			                total += floatValue;
			            }
			        } else {
			            rowData[j] = cellContent;
			        }
			    }

			    let average = (total / 8).toFixed(2);
			    rowData[15] = average;

			    data.push(rowData);
			}

		    var xhr = new XMLHttpRequest();
		    xhr.open("POST", "includes/save_table.php?section_id=" + buttonValueCurrent, true);
		    xhr.setRequestHeader("Content-Type", "application/json");
		    xhr.onreadystatechange = function () {
		        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
		            // console.log(xhr.responseText);
		            restoreTable();
		        }
		    };
		    xhr.send(JSON.stringify(data));

		}



		document.getElementById("remove-num").addEventListener("input", function(event) {
		    var input = event.target;
		    var inputValue = input.value;
		    var filteredValue = inputValue.replace(/[^\d-]/g, '');
		    filteredValue = filteredValue.replace(/-{2,}/g, '-');
		    var lastChar = filteredValue.charAt(filteredValue.length - 1);
		    if (lastChar === '-' && filteredValue.length === 1) {
		        filteredValue = '';
		    } else if (lastChar === '-' && filteredValue.charAt(filteredValue.length - 2) === '-') {
		        filteredValue = filteredValue.slice(0, -1);
		    }
		    input.value = filteredValue;
		});

		function clearRemoveInput() {
			document.getElementById('remove-num').value = "";
		}


		function removeStudent() {
		    var inputValue = document.getElementById("remove-num").value;

		    if (inputValue.trim() === "") {
		        alert("Input the # of the student to be archived!");
		        return;
		    }

		    var processedValue;
		    var pattern = /^(\d+)-(\d+)$/;
		    var match = inputValue.match(pattern);

		    var numRows = document.getElementById("table-body").rows.length;

		    if (match) {
		        var num1 = parseInt(match[1]);
		        var num2 = parseInt(match[2]);

		        if (num1 > numRows || num2 > numRows) {
		            alert("num1 or num2 cannot be greater than the number of rows.");
		            return; 
		        } else if (num1 === num2) {
		            processedValue = [num1]; 
		        } else if (num2 > num1) {
		            processedValue = []; 
		            for (var i = num1; i <= num2; i++) {
		                processedValue.push(i);
		            }
		        } else {
		            alert("num2 must be greater than num1.");
		            return;
		        }
		    } else {
		        var singleNum = parseInt(inputValue);
		        if (singleNum > numRows) {
		            alert("The number cannot be greater than the number of rows.");
		            return;
		        } else {
		            processedValue = [singleNum]; 
		        }
		    }
		    console.log("Processed value:", processedValue);
		    var xhr = new XMLHttpRequest();
		    xhr.open("POST", "includes/remove_student.php?section_id=" + buttonValueCurrent, true);
		    xhr.setRequestHeader("Content-Type", "application/json");
		    xhr.onreadystatechange = function () {
		        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
		            console.log(xhr.responseText);
		            clearRemoveInput();
		            // restoreTable();
		            viewStudents(buttonValueCurrent);
		        }
		    };
		    xhr.send(JSON.stringify(processedValue));
		}

	</script>
</body>
</html>