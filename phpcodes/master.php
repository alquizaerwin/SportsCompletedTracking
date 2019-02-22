<?php
$hostname = htmlspecialchars('localhost');
$database = htmlspecialchars('basketball');
$username = htmlspecialchars('basketball');
$password = htmlspecialchars('password');

pg_connect('$hostname', '$database', '$username', '$password');
