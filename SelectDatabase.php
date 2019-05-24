<html>
   <head>
      <title>Selecting MySQL Database</title>
   </head>
   <body>
      <?php
      // set up for using PDO
        $user = 'root';
        $pass = '';
        $host = 'localhost';
        $db_name = 'rentapetv3';
        
        // set up DSN
        $dsn = "mysql:host=$host;dbname=$db_name";
      
        //  $dbhost = 'localhost:3036';
        //  $dbuser = 'guest';
        //  $dbpass = 'guest123';
         //$conn = mysql_connect($dbhost, $dbuser, $dbpass);
         $conn = mysql_connect($user,$pass,$host,$db_name);
         if(!$conn ) {
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully';
         mysql_select_db( 'rentapetv3' );
         mysql_close($conn);
      ?>
   </body>
</html>