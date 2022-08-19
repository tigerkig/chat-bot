<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_chat";
$conn = new mysqli($servername, $username, $password, $dbname);

session_start();
