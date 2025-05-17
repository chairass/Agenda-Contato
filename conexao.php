<?php
$host = 'localhost';
$user = 'root';
$senha = '1327';
$banco = 'agendaContato';

$conn = new mysqli($host, $user, $senha, $banco);

if($conn->connect_error){
    die("Erro de conexão: " . $conn->connect_error);
}
    
echo "Conexão bem sucedida";
?>