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
			$find=$_POST['find'];
			echo'<p>Your order is as follows:</p>';
			echo$tireqty.'tires<br/>';
			echo$oilqty.'bottles of oil<br/>';
			echo$sparkqty.'spark plugs<br/>';
			if($find=="a") {
				echo"<p>Regular customer.</p>";
			}elseif($find=="b"){
				echo"<p>Customer referred by TV advert.</p>";
			}elseif($find=="c"){
				echo"<p>Customer referred by phone directory</p>";
			}elseif($find=="d"){
				echo"<p>Customer referred by word of month</p>";
			}else {
				echo"<p>We do not know how the customer found us</p>";
			}
		?>
	</h2>
</html>