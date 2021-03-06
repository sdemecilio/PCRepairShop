<?php
	/**
	The MIT License (MIT)
	
	Copyright (c) 2017 Stacey Demecilio, Shimbey Assie, Axumawit Gebregorgis
	
	Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
	
	The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
	
	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
	
	 */
	
	require('../../../databaseConnect.php');
	
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	 //echo 'Connected to database';
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$id = $_GET['workOrderID'];
	$student_faculty = $_GET['student_faculty'];
	$first_name = $_GET['first_name'];
	$last_name = $_GET['last_name'];
	$greenriverID = $_GET['greenriverID'];
	$email = $_GET['email'];
	$phone_number = $_GET['phone_number'];
	$computer_language = $_GET['computer_language'];
	$computer_username = $_GET['computer_username'];
	$computer_password = $_GET['computer_password'];
	$ccleaner = $_GET['ccleaner'];
	$customer_initials = $_GET['customer_initials'];
	$issues = $_GET['issues'];
	
	try
	{
	
		//Selecting data 
		$stmt = $conn->query("SELECT * FROM workOrder WHERE workOrderID =" . $id);
	  
		$stmt->setFetchMode(PDO::FETCH_OBJ); 
	  //$stmt->execute();
		 
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	 catch(PDOException $e) {
	 echo "Error: " . $e->getMessage();	
	}
	

?>
<html>
	<head>
		<title>Green River Repair Shop</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="../assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="../assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="../assets/css/ie8.css" /><![endif]-->
		<link rel = "stylesheet" href = "https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" />
		<link rel = "stylesheet" href = "admin.css">
		<link rel = "stylesheet" href = "../css/background.css">
	</head>
	
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<span class="logo"><img src="../images/grcRepairLogo.jpg" alt="Repair Shop Logo" /></span>
						<h1>Green River PC Repair Shop</h1>
					</header>

				<!-- Nav -->
					<?php
						include ('adminMenu.php');
					?>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="intro" class="main">
								<div class="content">				
									<?php								
										
										foreach ($result as $row)
										{
											echo "Work ID: " . $row['workOrderID'] . "<br>";
										echo "First Name: " . $row['first_name'] . "<br>";
										echo "Last Name: " . $row['last_name'] . "<br>";
										echo "Green River ID" . $row['greenRiverID']  . "<br>";
										echo "Email: " . $row['email'] . "<br>";
										echo "Phone Number: " . $row['phone_number'] . "<br>";
										echo "English Computer Langugage: " . $row['computer_language'] . "<br>";
										echo "Computer Username: " . $row['computer_username'] . "<br>";
										echo "Computer Password: " . $row['computer_password'] . "<br>";
										echo "Ccleaner Removal: " . $row['ccleaner'] . "<br>";
										echo "Customer Initials: " . $row['customer_initials'] . "<br>";
										echo "Computer Issues: " . $row['issues'] . "<br>";
										}
										
										echo "<hr>";
										
									?>
					
									<form id = "office_use" method = "post" action = "">
										Date Recieved: <input type = "date" id = "date_recieve" name = "date_recieve"><br>
										Receipt Number: <input type = "text" id = "receipt_number" name = "receipt_number"><br>
										Receiving Technician: <input type = "text" id = "receiving_tech" name = "receiving_tech"><br>
										Manufacturer: <input type = "text" id = "manufacturer" name = "manufacturer"><br>
										Operating System: <input type = "text" id = "op_system" name = "op_system"><br>
										PC S/N: <input type = "text" id = "pc_sn" name = "pc_sn"><br>
										Model: <input type = "text" id = "model" name = "model"><br>
										OS Key: <input type = "text" id = "os_key" name = "os_key"><br>
										Ledger (Initialed) dropped off: <input type = "text" id = "ledger" name = "ledger"><br>
										Ledger (Initialed) picked up: <input type = "text" id = "ledger_pickup" name = "ledger_pickup"><br>
										Date Work Began: <input type = "date" id = "work_began" name = "work_began">
										Date Work Finished: <input type = "date" id = "work_finished" name = "work_finished"><br>
										
										<p>
											<input type = "submit" id = "submit-btn" name = "submit-btn" value = "Update Record">
										</p>
									</form>
								</div>
							</section>

					</div>

				<!-- Footer -->
				<footer id="footer">
					<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="../assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../assets/js/main.js"></script>
			<script src="//code.jquery.com/jquery-1.12.4.js"></script>
			<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
			<script src = "admin.js"></script>
</body>
</html>


