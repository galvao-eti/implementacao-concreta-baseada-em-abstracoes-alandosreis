<?php
namespace Alfa;

class Produto
{
	use Traits\Create;
	use Traits\Update;
        use Traits\Delete;

	public static $id;
	public $nome;
	public $preco;
	public static $dependencia;

	public function __construct(BaseDeDados $base)
	{
		self::$dependencia = $base;
		var_dump($base);
	} 

	public function setId($id)
	{
		self::$id = $id;
	}

	public function getId()
	{
		return self::$id;
	}
}







