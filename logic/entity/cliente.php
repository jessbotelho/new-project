<?php

/**
 * @author Jhonas
 *
 */
class Cliente extends Usuario{

    private $id_cliente;
    private $razao_social;
    private $cnpj_cli;
    private $email;
    private $endereco;
    private $cep_cli;
    private $municipio_cli;
    private $estado;
    private $pessoa_contato;
    private $tel_fixo;
    private $tel_celular;
    
    public function getId_cliente() {
    	return $this->id_cliente;
    }
    
    public function setId_cliente($id_cliente) {
    	$this->id_cliente = $id_cliente;
    }
    
    public function getRazao_social() {
    	return $this->razao_social;
    }
    
    public function setRazao_social($razao_social) {
    	$this->razao_social = $razao_social;
    }
    
    public function getCnpj_cli() {
    	return $this->cnpj_cli;
    }
    
    public function setCnpj_cli($cnpj_cli) {
    	$this->cnpj_cli = $cnpj_cli;
    }
    

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getCep() {
        return $this->cep;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function getMunicipio() {
        return $this->municipio;
    }

    public function setMunicipio($municipio) {
        $this->municipio = $municipio;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }
    
    public function getPessoa_contato() {
    	return $this->pessoa_contato;
    }
    
    public function setPessoa_contato($pessoa_contato) {
    	$this->pessoa_contato = $pessoa_contat;
    }

    public function getTel_fixo() {
        return $this->tel_fixo;
    }

    public function setTel_fixo($tel_fixo) {
        $this->tel_fixo = $tel_fixo;
    }

    public function getTel_celular() {
        return $this->tel_celular;
    }

    public function setTel_celular($tel_celular) {
        $this->tel_celular = $tel_celular;
    }

}

?>