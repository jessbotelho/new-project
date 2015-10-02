<?php
    class clienteDAO{

        public static  $instance;

    	private function __construct(){
            //
        }

        public static function getInstance(){
            if (!isset(self::$instance)) 
                self::$instance = new clienteDAO();                
            
            return self::$instance;
        }

        public function cadastroDAO(){

    		try {
                $sql = "INSERT INTO usuario 
                    (email
                     endereco
                     cep
                     municipio
                     estado
                     tel_fixo
                     tel_celular)
    			  VALUES(
                    (:email,
                     :endereco,
                     :cep,
                     :municipio,
                     :estado,
                     :tel_fixo,
                     :tel_celular)";

    			$p_sql = Conexao::getInstance()->prepare($sql); $p_sql->bindValue(":nome", $usuario->getNome());
    			$p_sql->bindValue(":email", $usuario->getEmail()); 
    			$p_sql->bindValue(":senha", $usuario->getSenha()); 
    			$p_sql->bindValue(":ativo", $usuario->getAtivo());
    			$p_sql->bindValue(":cod_perfil", $usuario->getPerfil()->getCod_perfil());
                return $p_sql->execute();
            } 
            catch (Exception $e) {
                print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde."; 
            }
        } 
    }
?>