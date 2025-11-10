<?php
    namespace Model;

    class Pessoa {
        private $nome;
        private $sobreNome;
        private $tipo;
        private $dataNascimento;
        private $dataInstancia;
        //Lista de Contatos da Pessoa
        private $contatos = array();
        //Lista de Endereços da Pessoa
        private $enderecos = array();

        public function __construct() {
            $this->tipo = 1;
            $this->dataInstancia = new \DateTime();
        }

        public function inicializaClasse() {
            $this->tipo = 1;
            $this->dataInstancia = new \DateTime();
        }

         // Representação como array (converte DateTime e objetos aninhados)
        public function toArray() {
            $data = get_object_vars($this);

            // Formata datas
            if (isset($data['dataNascimento']) && $data['dataNascimento'] instanceof \DateTimeInterface) {
                $data['dataNascimento'] = $data['dataNascimento']->format('Y-m-d');
            }
            if (isset($data['dataInstancia']) && $data['dataInstancia'] instanceof \DateTimeInterface) {
                $data['dataInstancia'] = $data['dataInstancia']->format('Y-m-d H:i:s');
            }

            // Converte contatos
            if (!empty($data['contatos']) && is_array($data['contatos'])) {
                $outCont = [];
                foreach ($data['contatos'] as $c) {
                    if (is_object($c) && method_exists($c, 'toArray')) {
                        $outCont[] = $c->toArray();
                    } else {
                        $outCont[] = is_object($c) ? (array)$c : $c;
                    }
                }
                $data['contatos'] = $outCont;
            }

            // Converte endereços
            if (!empty($data['enderecos']) && is_array($data['enderecos'])) {
                $outEnd = [];
                foreach ($data['enderecos'] as $e) {
                    if (is_object($e) && method_exists($e, 'toArray')) {
                        $outEnd[] = $e->toArray();
                    } else {
                        $outEnd[] = is_object($e) ? (array)$e : $e;
                    }
                }
                $data['enderecos'] = $outEnd;
            }

            return $data;
        }

        // Retorna JSON da instância
        public function toJson() {
            return json_encode($this->toArray(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        }
        
        public function getDataInstancia() {
            return $this->dataInstancia->format('d/m/Y H:i:s');
        }

        public function getIdade() {
            $dataAtual = new \DateTime();
            $idade = $dataAtual->diff($this->dataNascimento);
            return $idade->y;
        }

        public function addContato($contato) {
            //Adicionar um contato na lista de contatos
            array_push($this->contatos, $contato);
        }

        public function addEndereco($endereco) {
            //Adicionar um endereço na lista de endereços
            array_push($this->enderecos, $endereco);
        }

        public function getContatoPeloTipo($tipo) {
            //Retornar o contato pelo tipo
            foreach ($this->contatos as $contato) {
                if ($contato->getTipo() == $tipo) {
                    return $contato;
                }
            }
            return null;
        }

        public function getEnderecoArray() {
            return $this->enderecos;
        }

        public function getNomeCompleto() {
            return $this->nome . " " . $this->sobreNome;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getSobreNome() {
            return $this->sobreNome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setSobreNome($sobreNome) {
            $this->sobreNome = $sobreNome;
        }

        public function getDataNascimento() {
            return $this->dataNascimento;
        }   

        public function setDataNascimento($dataNascimento) {
            $this->dataNascimento = $dataNascimento;
        }
    }

?>