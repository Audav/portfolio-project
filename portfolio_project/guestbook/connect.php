<?php

/* This file should be moved to your home directory on the
 * server and then deleted from your local directory
 *
 */

// Connect to DB
function connect()
{
    $username = 'adaviesg_grcuser';
    $password = ')EyiDNUP.NL,';
    $hostname = 'localhost';
    $database = 'adaviesg_grc';
    $cnxn = @mysqli_connect($hostname, $username, $password, $database)
    or die("Error connecting to database");
    return $cnxn;
}
