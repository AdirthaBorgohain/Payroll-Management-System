<?php
 $con_str = oci_connect("adirtha_csb16", "adirtha", "192.168.125.4/oracle10");
    if (!$con_str)
        {
       $err = oci_error();
       print("Coulnot connect");
	exit;
     }



?>
