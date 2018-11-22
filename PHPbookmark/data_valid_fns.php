<?php
/**
 * @author Vincent <caozheng618@163.com>
 * @copyright 2018
 * 检查用户的有效性
 */
    session_start();
    if (isset($_POST['userid']) && isset($_POST['password'])) {
        //if the user has just tried to log in
        $userid=$_POST['userid'];
        $password=$_POST['password'];
        $db_conn=new mysqli('localhost', 'vincent', 'Vince19910618...', 'bookmarks');
        if (mysqli_connect_errno()) {
            echo'Connection to database failed:'.mysqli_connect_error();
            exit();
        }
        $query='select * from user '
        ."where username='$userid' "
        ."and password=sha1('$password')";
        $result=$db_conn->query($query);
        if ($result->num_rows) {
            //if they are in the database register the user id
            $_SESSION['valid_user']=$userid;
        }
        $db_conn->close();
    }
