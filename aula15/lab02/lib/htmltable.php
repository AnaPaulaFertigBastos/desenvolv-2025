<?php
    require_once 'htmlelement.php';

    class htmlTable extends htmlElement {
        private $numColunas;
        private $numLinhas;

        //Basicamente ele é um array de dados com a estrtura de colunas x linhas.
        private $dados;

        public function __construct() {
            //Esse será sempre o estilo inicial da nossa tabela
            $this->setStyle('border-style: dashed;border-color: blue;');
        }

        public function setDados($aDados) {
            $this->dados = $aDados;
            //Obter o tamanho da tabela (colunas e linhas) baseado na estrutura da matriz de dados.
            $this->setLinhas(sizeof($this->dados));
            $this->setColunas(sizeof($this->dados[0]));
        }

        public function renderHtml() {
            return '<table ' . $this->getStyle() . '> '. $this->getLinhas() . '</table>';
        }

        public function getLinhas() {
            //Renderizar as linhas
            $linhas = '';
            for ($ilinhas=0; $ilinhas<$this->numLinhas; $ilinhas++) { 
                $linhas .= '<tr>' . $this->getColunas($ilinhas) . '</tr>';
            }
            return $linhas;            
        }

        public function getColunas($iLinha) {
            //Renderizar as colunas
            $colunas = '';
            for ($icols=0; $icols<$this->numColunas; $icols++) { 
                $colunas .= '<td>'.$this->dados[$iLinha][$icols].'</td>';
            }
            return $colunas;
        }

        public function setColunas($iColunas) {
            $this->numColunas = $iColunas;
        }

        public function setLinhas($iLinhas) {
            $this->numLinhas = $iLinhas;
        }

    }

?>