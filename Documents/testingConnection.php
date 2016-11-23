        <?php
            $dbhost = 'cursillo1.c9i44ninvskt.us-west-2.rds.amazonaws.com';
            $dbuser = 'User1';
            $dbpass = 'Sydneyaws1';

            $conn = mysql_connect($dbhost, $dbuser, $dbpass);

            if(! $conn ) {
                die('Could not connect: ' . mysql_error());
            }

            
            echo "Fetched data successfully\n";

            mysql_close($conn);
        ?>