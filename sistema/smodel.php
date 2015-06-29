<?php

/**
 * MODEL
 */
class Smodel {

    private $db;
    private $tabela;

    public function __construct() {
        $db = mysql_connect(HOST, DBUSER, DBPASS);
        if ($db) {
            mysql_select_db(DBNAME);
            return true;
        } else {
            echo "<div class='container'><div class='c16 colunas apperro'>" . mysql_error() . "</div></div>";
        }
    }

    //VER DADOS DA TABELA /  WHERE 
    public function verbd($tabela, $where = null, $order = null, $limite = null) {

        $sql = mysql_query("select * from " . $tabela . " " . $where . " " . $order . " " . $limite);
        $linhas = mysql_num_rows($sql);

        if ($linhas) {
            while ($return = mysql_fetch_object($sql)) {
                $pega[] = $return;
            }
            if ($pega) {
                return $pega;
            } else {
                echo "<div class='container'><div class='c16 colunas apperro'>" . mysql_error() . "</div></div>";
            }
        } else {
            return false;
        }
    }

    public function insertdb($tabela, $data) {
        $sql = "INSERT INTO " . $tabela;
        $sql .= " (`" . implode("`, `", array_keys($data)) . "`)";
        $sql .= " VALUES ('" . implode("', '", $data) . "') ";

        if ($sql) {
            return mysql_query($sql);
        } else {

            echo "<div class='container'><div class='c16 colunas apperro'>" . mysql_error() . "</div></div>";
        }
    }

    public function updatedb($tabela, $data, $where) {
        /*         * UPDATE nome_tabela
          /SET CAMPO = "novo_valor"
          /WHERE CONDIÃ‡ÃƒO
         */

        $sql = "UPDATE " . $tabela;
        $sql .= " SET " . $data;
        $sql .= $where;

        if ($sql) {

            print_r($sql);
            echo "<div class='container'><div class='c16 colunas apperro'></div></div>";
            return mysql_query($sql);
        } else {

            echo "<div class='container'><div class='c16 colunas apperro'>" . mysql_error() . "</div></div>";
        }
    }

    public function apaga($tabela, $where) {
        //WHERE ".implode("`, `", array_keys($where))." = '".implode("', '", $where)."'"
        $sql = "DELETE FROM " . $tabela . " WHERE " . implode("`, `", array_keys($where)) . " = '" . implode("', '", $where) . "'";
        if ($sql) {
            return mysql_query($sql);
        } else {

            echo "nao apagou";
            echo "<div class='container'><div class='c16 colunas apperro'>" . mysql_error() . "</div></div>";
        }
    }

}

?>