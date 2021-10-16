</!DOCTYPE html>
<?php include('conn.php')?>
<?php include('verifyloggedinstatus.php')?>

<html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>ICT2206 ReviewBase Profile</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
		<!-- Custom styling -->
		<link href="assets/css/style.css?v=2.0" rel="stylesheet" />
	</head>
	<body>
		<?php
		include 'navbar.php';
		?>

		<section class="section-content padding-y bg">
			<div class="container">
				<div class="row">
					<aside class="col-md-6">
						<!-- ============================ COMPONENT MY PROFILE ================================= -->
						<div class="card">
						<article class="card-body">
						<header class="mb-4">
							<h4 class="card-title mb-4">Profile Picture upload for <?php echo $name; ?></h4>
							<?php
							$user_id = $_SESSION['user_id'];
							$sql = " SELECT * FROM user_accounts WHERE user_id='$user_id' ";
							if ($result = $conn->query($sql)) {
								while ($row = $result->fetch_assoc()) {
									$userid = $row["user_id"];
									$username = $row["username"];
									$password = $row["password"];
									$target_dir = "uploads/";
                                                                        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                                                                        $uploadOk =1;
									// Check file size
									if ($_FILES["fileToUpload"]["size"] > 500000) {
  										echo "Sorry, your file is too large. Please try again";
  										$uploadOk = 0;
									}
									// Check if $uploadOk is set to 0 by an error
									if ($uploadOk == 0) {
  										echo "Sorry, your file was not uploaded.";
									// if everything is ok, try to upload file
									}
									else {
  										if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    											echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
										}
										else {
    											echo "Sorry, there was an error uploading your file.";
  										}
									}
								}
							}
							?>
						</header>
						<hr>
						</article> <!-- card-body end .// -->
						</div> <!-- card.// -->
						<!-- ============================ COMPONENT MY PROFILE  END .// ================================= -->
					</aside>
				</div>
			</div>
		</section>
	</body>
</html>
