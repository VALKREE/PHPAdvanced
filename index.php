<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="./CSS/index.css">
</head>
<body>
	<div class="wrapper">
		<?PHP
			include "Site.php";
			$page = new Site();
			$page->renderPage();
		?>
	</div>
</body>
</html>