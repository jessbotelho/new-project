<?php

/**
 * @author Jhonas
 *
 */
class Amostra {

    private $id_amostra;
    private $fosforo;
    private $materia_organica;
    private $potencial_hidrogenionico;
    private $potassio;
    private $calcio;
    private $magnesio;
    private $acidez_total;
    private $boro;
    private $cobre;
    private $ferro;
    private $manganes;
    private $zinco;
    private $sodio;
    private $aluminio;
    private $argila;
    private $silte;
    private $areia;

    public function getId_amostra() {
        return $this->id_amostra;
    }

    public function setId_amostra($id_amostra) {
        $this->id_amostra = $id_amostra;
    }

    public function getAreia() {
        return $this->areia;
    }

    public function setAreia($areia) {
        $this->areia = $areia;
    }

    public function getSilte() {
        return $this->silte;
    }

    public function setSilte($silte) {
        $this->silte = $silte;
    }

    public function getArgila() {
        return $this->argila;
    }

    public function setArgila($argila) {
        $this->argila = $argila;
    }

    public function getAluminio() {
        return $this->aluminio;
    }

    public function setAluminio($aluminio) {
        $this->aluminio = $aluminio;
    }

    public function getSodio() {
        return $this->sodio;
    }

    public function setSodio($sodio) {
        $this->sodio = $sodio;
    }

    public function getZinco() {
        return $this->zinco;
    }

    public function setZinco($zinco) {
        $this->zinco = $zinco;
    }

    public function getMaganes() {
        return $this->maganes;
    }

    public function setMaganes($maganes) {
        $this->maganes = $maganes;
    }

    public function getFerro() {
        return $this->ferro;
    }

    public function setFero($ferro) {
        $this->ferro = $ferro;
    }

    public function getCobre() {
        return $this->cobre;
    }

    public function setCobre($cobre) {
        $this->cobre = $cobre;
    }

    public function getAcidez_total() {
        return $this->calcio;
    }

    public function setAcidez_total($acidez_total) {
        $this->acidez_total = $acidez_total;
    }

    public function getMagnesio() {
        return $this->magnesio;
    }

    public function setMagnesio($magnesio) {
        $this->magnesio = $magnesio;
    }

    public function getCalcio() {
        return $this->calcio;
    }

    public function setCalcio($calcio) {
        $this->calcio = $calcio;
    }

    public function getFosforo() {
        return $this->fosforo;
    }

    public function setFosforo($fosforo) {
        $this->fosforo = $fosforo;
    }

    public function getMateria_organica() {
        return $this->materia_organica;
    }

    public function setMateria_organica($materia_organica) {
        $this->materia_organica = $materia_organica;
    }

    public function getPotencial_hidrogenionico() {
        return $this->potencial_hidrogenionico;
    }

    public function setPotencial_hidrogenionico($potencial_hidrogenionico) {
        $this->potencial_hidrogenionico = $potencial_hidrogenionico;
    }

    public function getPotassio() {
        return $this->potassio;
    }

    public function setPotassio($potassio) {
        $this->potassio = $potassio;
    }

    public function getBoro() {
        return $this->potassio;
    }

    public function setBoro($boro) {
        $this->boro = $boro;
    }

}

?>