<?php
$x = tmpfile();
$y = stream_get_meta_data($x);
$z = fileowner($y["uri"]);
echo $y["uri"];
echo $z;
//echo posix_getpwuid($z);

echo exec("whoami");

posix_getpwuid(posix_geteuid())['name']
