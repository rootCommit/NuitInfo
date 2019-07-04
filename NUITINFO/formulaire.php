<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	//<link rel="stylesheet" href="include/login.css" />
	
	<!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="coming-soon.min.css" rel="stylesheet">
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
    <meta name="author" content="">
	
	
	<title>Mon site !</title>
</head>
<body>

  <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="test.mp4" type="video/mp4">
    </video>

    <div class="masthead">
      <div class="masthead-bg"></div>
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-12 my-auto">
            <div class="masthead-content text-white py-5 py-md-0">
              <h1 class="mb-3">Connexion</h1>
              <div class="input-group input-group-newsletter">
                <form  method="POST" action="./include/TraitConnection.php">
					<h2>Login</h2> <input type="text" name="identifiant"/>
					<h2>Mot de passe</h2> <input type="password" name="password"/><br/><br/>
					
					<div class="input-group-append">
					<input type="submit" valeur="Valider"/>
					</div>
				</form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="social-icons">
      <ul class="list-unstyled text-center mb-0">
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
      </ul>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="jquery.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="coming-soon.min.js"></script>

  </body>
</html>
