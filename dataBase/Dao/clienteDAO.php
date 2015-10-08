<?php
class clienteDAO {
	
	public function cadastroDAO(cliente $cliente) {
			try {
				$sql = "INSERT INTO cliente 
                    (razao_social
                	 cnpj
                	 email
                     endereco
                     cep
                     municipio
                     estado
                	 pessoa_contato
                     tel_fixo
                     tel_celular)
    			  VALUES
                    (:razao_social,
                     :cnpj,
                	 :email,
                     :enderecoCompleto,
                     :cep,
                     :municipio,
                	 :pessoa_contato,
                     :estado,
                     :tel_fixo,
                     :tel_celular)";
				
				$clienteDao_sql = Conexao::getInstance ()->prepare ( $sql );
				$clienteDao_sql->bindValue ( ":email", $cliente->getEmail () );
				$clienteDao_sql->bindValue ( ":razao_social", $cliente->getRazao_social () );
				$clienteDao_sql->bindValue ( ":cnpj", $cliente->getCnpj_cli () );
				$clienteDao_sql->bindValue ( ":endereco", $cliente->getEnderecoCompleto() );
				$clienteDao_sql->bindValue ( ":cep", $cliente->getCep () );
				$clienteDao_sql->bindValue ( ":municipio", $cliente->getMunicipio () );
				$clienteDao_sql->bindValue ( ":estado", $cliente->getEstado () );
				$clienteDao_sql->bindValue ( ":pessoa_contato", $cliente->getPesoa_contato () );
				$clienteDao_sql->bindValue ( ":tel_fixo", $cliente->getTel_fixo () );
				$clienteDao_sql->bindValue ( ":tel_celular", $cliente->getTel_celular () );
				
				return $clienteDao_sql->execute ();
				
			} catch ( Exception $e ) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
}
?>