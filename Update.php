<?php  
    require_once './src/topo.php';


//$produto->setId(100);
$produto->nome = 'Mouse Razer';
$produto->preco = 299.90;


//die($produto->getId());

try {
    
	$result=$produto->update("id=115");
        echo '<table>';
        echo '<tr>';

        

        echo '</tr>';
        
        //$result = $produto->retrieve($colunas, "id = 110");
        
    
    echo '</table>';
        
} catch (Exception $e) {
    
	echo $e->getMessage();
}

$base->desconectar();

?>

<?php  
    require_once './src/rodape.php';
?>
