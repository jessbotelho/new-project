<?php
	
	/**
	 * @author Jhonas
	 *
	 */
	class Amostra{
		
		private $id_amostra
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


		public function getCalcio(){
			return $this->calcio;
		}

		public function setCalcio($calcio){
			$this->calcio = $calcio;
		}
		
		public function getMagnesio(){
			return $this->magnesio;
		}

		public function setMagnesio($magnesio){
			$this->magnesio = $magnesio;
		}

		public function getCalcio(){
			return $this->calcio;
		}

		public function setCalcio($calcio){
			$this->calcio = $calcio;
		}

		public function getFosforo(){
			return $this->fosforo;
		}

		public function setFosforo($fosforo){
			$this->fosforo = $fosforo;
		}

		public function getMateria_organica(){
			return $this->materia_organica;
		}
		
		public function setMateria_organica($materia_organica){
			$this->materia_organica = $materia_organica;
		}

		public function getPotencial_hidrogenionico(){
			return $this->potencial_hidrogenionico;
		}
		
		public function setPotencial_hidrogenionico($potencial_hidrogenionico){
			$this->potencial_hidrogenionico = $potencial_hidrogenionico;
		}

		public function getPotassio(){
			return $this->potassio;
		}

		public function setPotassio($potassio){
			$this->potassio = $potassio;
		}

		public function getPotassio(){
			return $this->potassio;
		}

		public function setPotassio($potassio){
			$this->potassio = $potassio;
		}
	}

?>