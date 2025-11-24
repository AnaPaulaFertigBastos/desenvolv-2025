<?php 

    require_once 'conexaobd.php';

    class query {
        private $sql;
        private $registros;
        private $connection;
        private $queryResource;

        public function __construct($oConn) {
            $this->registros = 0;
            $this->connection = $oConn;
        }

        public function open() {
            $this->queryResource = pg_query($this->connection->getInternalConnection(), $this->sql);
            if($this->queryResource) {
                //Retorna a quantidade de linhas da query.
                $this->registros = pg_num_rows($this->queryResource);
                return true;
            }
            return false;
        }

        public function getNextRow() {
            $row = pg_fetch_assoc($this->queryResource);
            if($row) {
                return $row;
            }
            return false;
        }

        public function update($stabela, $aColunas, $aValores, $sWhere) {

            // Montar "col1 = $1, col2 = $2, col3 = $3 ..."
            $set = [];
            for ($i = 0; $i < count($aColunas); $i++) {
                $set[] = $aColunas[$i] . " = $" . ($i + 1);
            }

            $setSql = implode(", ", $set);

            $sql = "UPDATE $stabela SET $setSql WHERE $sWhere";

            return pg_query_params(
                $this->connection->getInternalConnection(),
                $sql,
                $aValores
            );
        }


        public function insert($sTabela, $aColunas, $aValores) {
            //TODO implementar método de insert
        }

        public function delete($sTabela, $sWhere) {
            //TODO implementar método de delete
        }

        public function getRegistros() {
            return $this->registros;
        }

        public function setSql($sSql) {
            $this->sql = $sSql;
        }

    }

?>