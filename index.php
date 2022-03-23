<?php
include_once 'app/user_repository.php';
$users = UserRepository::getUsers();
//count($users) . "<br/>";
$numUsers = UserRepository::countUsers();
echo $numUsers."<br/>";

?>
<?php
include 'templates/header.php';
?>


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