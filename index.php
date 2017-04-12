<!DOCTYPE html>
<html>

<head>
	<meta type="content" charset="utf-8" />
	<title>Connexion</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- CSS --><!-- 
  <link rel="stylesheet" href="assets/css/main.css" />  -->
</head>

<body id="body">
	<!-- Form -->


	<section id="form">


		<div class="container">
			<form action="formLogin.php" method="post">
				<!-- Name:  <input type="text" name="pseudo"><br>
				E-mail: <input type="text" name="password"><br>
				<input type="submit"> -->
			

			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<!-- <label for="nom">Nom:</label> -->
						<input type="text" class="form-control" placeholder="Pseudo" name="pseudo">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<!-- <label for="email">Email:</label> -->
						<input type="text" class="form-control" placeholder="Password" name="password" >
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary" onclick="document.getElementById('body').style.backgroundColor='green';">Login</button>
			<button class="btn btn-default" onclick="newAccount();" type="button">
				New Account</button>
</form>

			

			


			</div>

		</section>



		<!-- jQuery & JS -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/javascript.js"></script>

	</body>
	</html>