<?php

session_start();

$_SESSION['name'] = "Вася";

echo $_SESSION['name'];