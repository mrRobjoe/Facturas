<?php
session_start();
include('control/control.php');


$ins = new control();
$ins->gestionar_procesos();

/*
include('header.php');

*/
?>
