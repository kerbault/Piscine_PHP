<?php
if (isset($_SERVER["REQUEST_URI"]))
{
	//print_r($_SERVER);

	$params = array('page' => "controllers/home.php",
					'active' => "home",
					'style' => "template/style.css",
					'script' => "script.js");

	//$uri = str_replace("/rush00/", "", $_SERVER["REQUEST_URI"]);
	$uri = $_SERVER["REQUEST_URI"];
	$uriExpl = explode("/", $uri);
	$uriExpl = array_filter($uriExpl, "strlen");
	$uriExpl = array_values($uriExpl);
	
	//var_dump($uriExpl);
	
	if (isset($uriExpl[0]) && !empty($uriExpl[0])) {
		if (file_exists("controllers/".$uriExpl[0].".php")) {
			$params["page"] = "controllers/".$uriExpl[0].".php";
			$params["active"] = $uriExpl[0];
			if (isset($uriExpl[1]))
				$params["product_name"] = $uriExpl[1];
		}
		else
			$params["page"] = "controllers/notfound.php";
	}
	$_SESSION["params"] = $params;
}
?>
