<?php
	
	include '../logic/entity/cliente.php';
	include '../dataBase/connection.php';
	
    class clienteDAO{

        public static  $instance;

    	public function __construct(){
            //
        }

        public static function getInstance(){
            if (!isset(self::$instance)) 
                self::$instance = new clienteDAO();                
            
            return self::$instance;
        }

        public function cadastroDAO(){

    		try {
                $sql = "INSERT INTO cliente 
                    (email
                     endereco
                     cep
                     municipio
                     estado
                	 pessoa_contato
                     tel_fixo
                     tel_celular)
    			  VALUES(
                    (:email,
                     :endereco,
                     :cep,
                     :municipio,
                	 :pessoa_contato,
                     :estado,
                     :tel_fixo,
                     :tel_celular)";

    			$clienteDao_sql = Conexao::getInstance()->prepare($sql); $p_sql->bindValue(":email", $cliente->getEmail());
    			$clienteDao_sql->bindValue(":endereco", $cliente->getEndereco()); 
    			$clienteDao_sql->bindValue(":cep", $cliente->getCep()); 
    			$clienteDao_sql->bindValue(":municipio", $cliente->getMunicipio());
    			$clienteDao_sql->bindValue(":estado", $cliente->getEstado());
    			$clienteDao_sql->bindValue(":pessoa_contato", $cliente->getPesoa_contato());
    			$clienteDao_sql->bindValue(":tel_fixo", $cliente->getTel_fixo());
    			$clienteDao_sql->bindValue(":tel_celular", $cliente->getTel_celular());
    			    			
                return $clienteDao_sql->execute();
            } 
            catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde."; 
            }
        } 
    }
?>