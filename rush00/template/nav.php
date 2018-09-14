<nav>
	<ul>
		<li <?php if ($params["active"] == "home") {echo "class='active'";}?>><a href="home">Home</a></li>
		<li <?php if ($params["active"] == "shoes") {echo "class='active'";}?>><a href="shoes">Shoes</a></li>
		<li <?php if ($params["active"] == "tshirts") {echo "class='active'";}?>><a href="tshirts">T-Shirts</a></li>
		<li <?php if ($params["active"] == "pants") {echo "class='active'";}?>><a href="pants">Pants</a></li>
		<?php
			if (isset($_SESSION["logged"])) {
				echo "<li style='float:right'";
				if ($params["active"] == "login") {echo "class='active'";}
				echo"><a href='login'>Account</a></li>";
			}
			else {
				echo "<li style='float:right'";
				if ($params["active"] == "login") {echo "class='active'";}
				echo "><a href='login'>Log</a></li>";
			}
		?>
		<li <?php if ($params["active"] == "cart") {echo "class='active'";}?> style='float:right'><a href="cart">Cart</a></li>
	</ul>
</nav>
