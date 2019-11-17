<?php
echo 'Get data';

$url = "https://test-micro-2.herokuapp.com/index.php";

$homepage = file_get_contents($url);
echo $homepage;