<?php

$link = mysqli_connect("35.162.48.100", "mem", "keen", "memhere0316");

//$link = mysqli_connect("127.0.0.1", "dev", "dev1", "allreptiles");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* check if server is alive */
if (mysqli_ping($link)) {
    printf ("Our connection is okroot!\n");
} else {
    printf ("Error: %s\n", mysqli_error($link));
}

/* close connection */
mysqli_close($link); 

?>