<?php  
    require_once './src/topo.php';
require 'autoload.php';

use Alfa\SGBD;
use Alfa\Produto;

$servidor = new SGBD('mysql');
$servidor->setEndereco('localhost');
$servidor->setPorta(3306);
$servidor->usuario = 'root';
$servidor->senha = '';

$base = new Alfa\BaseDeDados('alfa_oo', $servidor);

try {
	$base->conectar();
} catch (Exception $e) {
    
	echo $e->getMessage();
}

$produto = new Produto($base);
//$produto->setId(110);
$produto->nome = 'MOUSE EAGLE';
$produto->preco = 67.50;

//die($produto->getId());

try {
    
	$produto->create();
        
} catch (Exception $e) {
   
	echo $e->getMessage();
}

$base->desconectar();
?>


<?php  
    require_once './src/rodape.php';
?>
