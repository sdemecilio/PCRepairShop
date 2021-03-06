<?php
	/**
	The MIT License (MIT)
	
	Copyright (c) 2017 Stacey Demecilio, Shimbey Assie, Axumawit Gebregorgis
	
	Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
	
	The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
	
	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
	
	 */

	//including db connection
	require('../../databaseConnect.php');
	include('editConn.php');
	
	session_start();
	
	if ($_SESSION['username'] == null)
	{
		header('Location:login.php');
	}
	
	$id = $_GET['workOrderID'];

	try
	{
		//Selecting data 
		$stmt = $conn->query("SELECT * FROM workOrder WHERE workOrderID =" . $id);
		$stmtResult = $conn->query("SELECT accessType FROM logins WHERE username = '" . $_SESSION['username'] . " ' ");
	  
		$stmt->setFetchMode(PDO::FETCH_OBJ);
		$stmtResult->setFetchMode(PDO::FETCH_OBJ);

		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$accessResult = $stmtResult->fetchAll(PDO::FETCH_ASSOC);
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
		<link rel = "stylesheet" href = "../css/adminMenu.css">
		<link rel = "stylesheet" href = "../css/background.css">
	</head>
	
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1>Green River PC Repair Shop</h1>
					</header>

				<!-- Nav -->
					<?php
						foreach ($accessResult as $row)
						{
							if($row['accessType'] == 'tech')
							{
								include ('techMenu.php');
							}
							else
							{
								include ('adminMenu.php');
							}
						}
					?>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="intro" class="main">
								<div class="content">

                                    <!--selecting each row from the work order table from the database-->
									<?php								
										echo "<h3><a href = 'adminSelect.php'><< Back</a></h3>";
										foreach ($result as $row)
										{
											echo "First Name: " . $row['first_name'] . "<br>";
											echo "Last Name: " . $row['last_name'] . "<br>";
											echo "Green River ID: " . $row['greenriverID']  . "<br>";
											echo "Email: " . $row['email'] . "<br>";
											echo "Phone Number: " . $row['phone_number'] . "<br>";
											echo "English Computer Language: " . $row['computer_language'] . "<br>";
											echo "Computer Username: " . $row['computer_username'] . "<br>";
											echo "Computer Password: " . $row['computer_password'] . "<br>";
											echo "Ccleaner Removal: " . $row['ccleaner'] . "<br>";
											echo "Customer Initials: " . $row['customer_initials'] . "<br>";
											echo "Computer Issues: " . $row['issues'] . "<br>";
										}
										
										echo "<hr>";
										
									?>
					                <!--creating form editing the work order-->
									<form id = "office_use" method = "post" action = "">
										Date Recieved: <input type = "date" id = "date_recieve" name = "date_recieve">
										<div class = "error"><?php if (isset($_POST['date_recieve'])) {echo $errors['date_recieve'];} ?></div>
										Receipt Number: <input type = "text" id = "receipt_number" name = "receipt_number">
										<div class = "error"><?php if (isset($_POST['receipt_number'])) {echo $errors['receipt_number'];} ?></div>
										Receiving Technician: <input type = "text" id = "receiving_tech" name = "receiving_tech">
										<div class = "error"><?php if (isset($_POST['receiving_tech'])) {echo $errors['receiving_tech'];} ?></div>
										Manufacturer: <input type = "text" id = "manufacturer" name = "manufacturer">
										<div class = "error"><?php if (isset($_POST['manufacturer'])) { echo $errors['manufacturer'];} ?></div>
										Operating System: <input type = "text" id = "op_system" name = "op_system">
										<div class = "error"><?php if (isset($_POST['op_system'])) { echo $errors['op_system'];} ?></div>
										PC S/N: <input type = "text" id = "pc_sn" name = "pc_sn">
										<div class = "error"><?php if (isset($_POST['op_system'])) { echo $errors['op_system'];} ?></div>
										Model: <input type = "text" id = "model" name = "model">
										<div class = "error"><?php if (isset($_POST['model'])) { echo $errors['model'];} ?></div>
										OS Key: <input type = "text" id = "os_key" name = "os_key">
										<div class = "error"><?php if (isset($_POST['os_key'])) { echo $errors['os_key'];} ?></div>
										Ledger (Initialed) dropped off: <label><input type = "radio" name = "ledger_dropoff" id = "ledger_dropoff_yes" value="Yes" <?php if (isset($_POST['ledger_dropoff']) && $_POST['ledger_dropoff']=='Yes') {echo 'checked="checked"';}?> >Yes</label>
										<label><input type = "radio" name = "ledger_dropoff" id = "ledger_dropoff_no" value="No" <?php if (isset($_POST['ledger_dropoff']) && $_POST['ledger_dropoff']=='No') {echo 'checked="checked"';}?> >No</label>
										
										Ledger (Initialed) picked up:<label><input type = "radio" name = "ledger_pickup" value = "Yes" <?php if (isset($_POST['ledger_pickup']) && $_POST['ledger_pickup']=='Yes') {echo 'checked="checked"';}?> >Yes</label>
										<label><input type = "radio" name = "ledger_pickup" value = "No" <?php if (isset($_POST['ledger_pickup']) && $_POST['ledger_pickup']=='No') {echo 'checked="checked"';}?> >No</label>
										Date Work Began: <input type = "date" id = "work_began" name = "work_began">
										Date Work Finished: <input type = "date" id = "work_finished" name = "work_finished"><br><br>
										
										<p>
											<input type = "submit" id = "submit" name = "submit" value = "Submit">
										</p>
									</form>
								</div>
							</section>

					</div>

				<!-- Footer -->
				<footer id="footer">
                    <p class="copyright">&copy; 2017 Team SAS</p>
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
			<script src = "..js/admin.js"></script>
</body>
</html>


