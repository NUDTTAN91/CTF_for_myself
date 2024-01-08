<?php

    highlight_file(__FILE__);
    error_reporting(0);

    $x=$_REQUEST['X'];

    if(isset($x))
    {
        include($x);
    }
    else
    {
        include('flag.php');
    }

?>

