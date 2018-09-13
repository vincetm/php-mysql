<html>
	<head>
		<title>Bob's order results</title>
	</head>
	<h1>Bob's Auto Parts</h1>
	<h2>
		Order Results
		<?php
			$tireqty=$_POST['tireqty'];
			$oilqty=$_POST['oilqty'];
			$sparkqty=$_POST['sparkqty'];
			echo'<p>Your order is as follows:</p>';
			echo$tireqty.'tires<br/>';
			echo$oilqty.'bottles of oil<br/>';
			echo$sparkqty.'spark plugs<br/>';
		?>
	</h2>
</html>