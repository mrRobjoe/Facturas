<?php
session_start();
include 'model/Invoice.php';
$invoice = new Invoice();
if($_POST['action'] == 'delete_invoice' && $_POST['id']) {
	$invoice->deleteInvoice($_POST['id']);
	$jsonResponse = array(
		"status" => 1
	);
	echo json_encode($jsonResponse);
}
if(isset($_GET['action'])){
	if($_GET['action'] == 'logout') {
	session_unset();
	session_destroy();
	header("Location:index.php");
	}
}
