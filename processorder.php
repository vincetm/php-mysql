<html>
	<head>
		<title>Bob's order results</title>
	</head>
	<h1>Bob's Auto Parts</h1>
	<h2>
		Order Results
		<?php
			//create short variable names
			$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];
			$tireqty=$_POST['tireqty'];
			$oilqty=$_POST['oilqty'];
			$sparkqty=$_POST['sparkqty'];
			$find=$_POST['find'];
			$date=date('H:i,js F Y');
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
			$outputstring = $date."\t".$tireqty."tires\t".$oilqty."oil\t".$sparkqty."spark plugs\t\n";
			//open file for appending
			@$fp=fopen("$DOCUMENT_ROOT/orders/orders.txt",'ab');
			flock($fp,LOCK_EX);
			if (!$fp) {
				echo"<p><strong>Your order could not be processed at this time.Please try again later.</strong></p>";
				exit;
			}
			fwrite($fp, $outputstring, strlen($outputstring));
			flock($fp, LOCK_UN);
			fclose($fp);
			echo"<p>Written done</p>";
		?>
	</h2>
</html>