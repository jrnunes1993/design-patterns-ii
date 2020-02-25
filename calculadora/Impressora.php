<?php
	class Impressora implements Visitor {
		public function visitaSoma(Soma $soma) {
			echo "(";
			echo $soma->getEsquerdo()->aceita($this);
			echo ")";
			echo "+";
			echo "(";
			echo $soma->getDireito()->aceita($this);
			echo ")";
		}

		public function visitaSubtracao(Subtracao $subtracao) {
			echo "(";
			echo $subtracao->getEsquerdo()->aceita($this);
			echo ")";
			echo "-";
			echo "(";
			echo $subtracao->getDireito()->aceita($this);
			echo ")";
		}

		public function visitaNumero(Numero $numero){
			echo $numero->getNumero();
		}
	}