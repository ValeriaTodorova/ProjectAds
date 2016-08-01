<?php

$username = $this->session->userdata('username');
echo "Hello, ".$username;

echo "<p>".anchor('allads/insert_allads ', 'Insert new add')."</p>";

echo "<p>".anchor('home/do_logout', 'Log out')."</p>";