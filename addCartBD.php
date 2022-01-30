<?php 
session_start();
$id = $_SESSION['id']; 
try {
    @$cartrq= $_GET['cart'];
	@$siz= $_GET['size'];
	@$elemento= $_GET['item'];
	@$quant= $_GET['quantity'];
} catch (\Throwable $e) { }
if ($cartrq)
    {		
		require_once 'fetchMongo.php';
		addCart($id,$elemento,$siz,$quant);
    }
    header("Location: product-detail.php?item=$elemento");
?>