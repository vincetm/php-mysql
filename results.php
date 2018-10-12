<html>
    <head>
        <title>Book-O-Rama Search Results</title>
    </head>
    <body>
        <h1>Book-O-Rama Search Results</h1>
        <?php
            //create short variable names
            $searchtype=$_POST['searchtype'];
            $searchterm=trim($_POST['searchterm']);
            if(!$searchtype || !$searchterm) {
                echo'You have not entered search details.Please go back and try again.';
                exit;
            }
            if(!get_magic_quotes_gpc()) {
                $searchtype=addslashes($searchtype);
                $searchterm=addslashes($searchterm);
            }
            @$db=new mysqli('localhost','vincent','Vince19910618...','books');
            if(mysqli_connect_errno()) {
                echo'Error:Could not connect to database.Please try again later.';
                exit;
            }
            $query="select*from books";
            $results=$db->query($query);
            $num_results=$results->num_rows;
            echo"<P>Number of books found:".$num_results."</P>";
            $results->free();
            $db->close();
        ?>
    </body>
</html>