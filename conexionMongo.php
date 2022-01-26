<?php
require_once __DIR__ . '/vendor/autoload.php';

$client = new MongoDB\Client(
    'mongodb+srv://Sancionados:123@pruebasgbd.r1k0l.mongodb.net/myFirstDatabase?retryWrites=true&w=majority');
$db = $client->Tienda_Sancionados->Productos;