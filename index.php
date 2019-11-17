<?php
//echo 'Get data';

$url = "https://test-micro-2.herokuapp.com";

$homepage = file_get_contents($url);
echo "Nota este: " . $homepage;