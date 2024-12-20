<?php 
$bz = new mysqli('localhost', 'root', '', 'bd_zoo');
if ($bz->connect_error){
    echo 'erro';
    die();
}
$bz->query('set character_set_connection = utf8mb4');
$bz->query('set character_set_client = utf8mb4');
$bz->query('set character_set_results = utf8mb4');
?>