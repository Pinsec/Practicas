<?php
	class Tablas {
		public $i;
		public $f;

		public function asigna_inicio($atrib){
			$this->i=$atrib;
		}

		public function asigna_cantidad($atrib){
			$this->f=$atrib;
		}

		public function muestra(){
			$limit = $this->i+$this->f;
			for($this->i; $this->i < $limit; $this->i++){
				for($o=1; $o<=12; $o++){
					echo $this->i, "*", $o, "=", $this->i*$o;
					echo '<br>';
				}
				echo '<br>';
			}
		}
 	}

	$objeto = new Tablas;
	$objeto -> asigna_inicio(1);
	$objeto -> asigna_cantidad(5);
	$objeto -> muestra();
?>
