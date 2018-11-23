<?php
	function db_connect() 
	{
		$result = new mysqli('localhost', 'vincent', 'Vince19910618...',
						'bookmarks');
		if (!$result) {
			$error_message = 'Could not connect to database server.';
			throw new Exception($error_message);
		} else {
			return $result;
		}
	}
?>