<?php
    class Humano {
        public $idade = 29;

        public function falar(){
            echo "Olá Mundo! <br>";
        }

        private function gritar(){
            echo "PHP é legal <br>";
        }

        public function acessaGritar(){
            $this->gritar();
        }

        protected function falarBaixinho(){
            echo "falando Bairinho <br>";
        }

        public function acessarFalandoBaixinho(){
            $this->falarBaixinho();
        } 

    }

    class Programador extends Humano {
        public function acessarFalandoBaixinhoProgramador(){
            $this->falarBaixinho();
        }

    }

    $ze = new Humano;
    $ze->falar();
    $ze->acessaGritar();
    $ze->acessarFalandoBaixinho();

    $josue = new Programador;

    echo $josue->idade ."<br>";

    $josue->falar();
    $josue->acessaGritar();
    $josue->acessaFalarBaixinhoProgramador();




    