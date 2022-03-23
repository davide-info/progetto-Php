<?php
include_once 'app/user_repository.php';
$users = UserRepository::getUsers();
//count($users) . "<br/>";
$numUsers = UserRepository::countUsers();
echo $numUsers."<br/>";

?>

<!DOCTYPE html>
<html>

<head>
	<title>

	</title>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />

	<script defer src="js/jquery-min.js" type="text/javascript"></script>

	<link rel="stylesheet" href="css/bootstrap_min.css" />

	<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script defer src="js/bootstrap-min.js"></script>

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>

				<div class="container">
					<div class="row">

						<div class="col-md-4"> Colonna misura 4</div>
					</div>
					<div class="col-md-8"> Colonna misura 8</div>
				</div>
		</div>
		<<div class="container">
			<h2>Basic Panel</h2>
			<div class="panel panel-default">
				<div class="panel-body">
					<?php




?>

				</div>
			</div>
			</div>


</body>

</html>

<?php



/*if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
 $uri = 'https://';
 } else {
 $uri = 'http://';
 }
 $uri .= $_SERVER['HTTP_HOST'];
 header('Location: '.$uri.'/dashboard/');
 exit;*/
echo "Entrato <br/>";
$urls = parse_url($_SERVER['REQUEST_URI']);
$path = $urls['path'];
$path_routes = explode("/", $path);

echo $path . "<br/>";
print_r($path_routes);
?>
Something is wrong with the XAMPP installation :-(