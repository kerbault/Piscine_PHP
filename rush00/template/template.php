<?php
//include ("cart_functions.php");
if (isset($_SESSION["params"]))
	$params = $_SESSION["params"];
//var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

	<head>
		<meta charset="utf-8">
		<title>rush00</title>
		<style media="screen">
		<?php include ($params["style"]); ?>
		</style>
	</head>

	<body id="body">

		<?php
		$nav = include("template/nav.php");
		echo $nav;
		?>
		<img id="img_logo" src="img/logo.png" alt="alt">
		<main>
			<img id="img_home" src="img/home.jpg" alt="alt">
			<?php
				//aside is the admin panel with rank == 0
				if (isset($_SESSION["rank"]) && $_SESSION["rank"] == 0) {
					$aside = include("template/aside.php");
					echo $aside;
				}
			?>
			<div class="content">
				<?php
				$content = include($params["page"]);
				// $content = include("forms/products.php");

				echo $content;
				?>
			</div>
		</main>
		<?php
		include("template/footer.php");
		?>
	</body>

	<script type="text/javascript" src="<?php echo $params["script"]; ?>">

	</script>

</html>
