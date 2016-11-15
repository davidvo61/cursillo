<!DOCTYPE html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 
<?php
   $dbhost = '127.0.0.1';
   $dbuser = 'root';
   $dbpass = 'Sydneymysql1';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT * FROM Child';
   mysql_select_db('cursilloV3');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "Child's first name: {$row['firstName']}  <br> ";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>
     
 </body>
</html>