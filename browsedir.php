<html>
    <head>
        <title>Browse Directories</title>
    </head>
    <body>
        <h1>Browsing</h1>
        <?php
            define("Root", dirname(__FILE__));
            $currect_dir = Root.'/uploads/';
            $dir = opendir($currect_dir);
            echo"<p>Upload director is $currect_dir</p>";
            echo"<p>Directory Listing:</p><ul>";
            while(false !== ($file=readdir($dir))) {
                if($file !="." && $file !=="..") {
                    echo"<li>$file</li>";
                }
            }
            echo"</ul>";
            closedir($dir);
            ?>
    </body>
</html>