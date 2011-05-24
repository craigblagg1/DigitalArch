<?php

/*Define constant to connect to database */
DEFINE('DATABASE_USER', 'XXXXXXXXXXXXXX');
DEFINE('DATABASE_PASSWORD', 'XXXXXXXXXXXXXXXX');
DEFINE('DATABASE_HOST', 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX');
DEFINE('DATABASE_NAME', 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXX');



// Make the connection:
$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME) or die ('Error'.mysql_error());
    
if (!$dbc) {
    trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
}

?>