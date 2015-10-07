<?php

/**
 * 
 * @author Jhonas
 *
 */
class Conexao {
	private static $conexaoPDO = null;
	
	private function __construct() {
		
		try {
			
			if (! isset ( self::$conexaoPDO )) {
				self::$conexaoPDO = new PDO ( 'mysql:host=localhost;dbname=new-project', 'root', 'root', array (
						PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" 
				) );
				
				self::$conexaoPDO->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );				
				self::$conexaoPDO->setAttribute ( PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING );
			}
		} catch ( PDOException $e ) {
			print htmlentities ( 'Houve um erro de conexão com o banco de dados: ' . $e->getMessage () );
		}
	}

	protected function getConexaoPDO(){
		return $this->conexaoPDO;
	}
}

?>