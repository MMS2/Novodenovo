<?php

class Texto {

//HEADERS
    static function h1($h1) {
        echo "<h1>" . $h1 . "</h1>";
    }

    static function h2($h2) {
        echo "<h2>" . $h2 . "</h2>";
    }

    static function h3($h3) {
        echo "<h3>" . $h3 . "</h3>";
    }

    static function h4($h4) {
        echo "<h4>" . $h4 . "</h4>";
    }

    static function h5($h5) {
        echo "<h5>" . $h5 . "</h5>";
    }

    static function h6($h6) {
        echo "<h6>" . $h6 . "</h6>";
    }

//LINKS
    static function linkfora($a, $titulo, $adicional = null) {
        echo "<a href='" . strtolower($a) . "' title='" . $titulo . "' target='new'" . $adicional . ">" . $titulo . "</a>";
    }

    static function link($a, $titulo, $adicional = null) {
        echo "<a href='" . strtolower(BASEURL . $a) . "' title='" . $titulo . "'" . $adicional . ">" . $titulo . "</a>";
    }

//URI
    static function uri($i) {
        $pagina_url = explode("/", $_GET['url']);
        $pagina = $pagina_url[$i];
        return $pagina;
    }

// URL ATUAL


    static function urlatual() {

        $server = $_SERVER['SERVER_NAME'];
        $endereco = $_SERVER ['REQUEST_URI'];
        echo "http://" . $server . $endereco;
    }

//REDIRECT
    static function redireciona($a) {
        header('Location: ' . strtolower(BASEURL . $a));
    }

//LIMPAR ACENTOS

    static function limpar($string) {
        $a = 'àáâãäèéêëìíîïòóôõöùúûüÀÁÂÃÄÈÉÊËÌÍÎÒÓÔÕÖÙÚÛÜçÇñÑ ~°ºª%&$,';
        $b = 'aaaaaeeeeiiiiooooouuuuAAAAAEEEEIIIOOOOOUUUUcCnN_________';
        $string = utf8_decode($string);
        $string = strtr($string, utf8_decode($a), $b);
        $string = strtolower($string);
        return utf8_encode($string);
    }

//RESUMIR
    static function resumo($string, $chars) {

        if (strlen($string) > $chars) {
            while (substr($string, $chars, 1) <> ' ' && ($chars < strlen($string))) {
                $chars++;
            }
        }

        if ($chars > strlen($string)) {
            echo substr($string, 0, $chars);
        } else {
            echo substr($string, 0, $chars) . "...";
        }
    }

    static function erromysql() {

        echo "<div class='container'><div class='c16 colunas apperro'>" . mysql_error() . "</div></div>";
    }

// TITULO POSTAGENS


    static function titulopostagem($a, $headerps, $data = null, $adicional = null) {

        if ($a == "") {

            echo "<span class=\"lead\">";
            echo $headerps;
            echo "</span>";
            echo "<div class='data'>{$data}</div>";
        } else {

            echo "<a href='" . strtolower(BASEURL . $a) . "' title='" . $headerps . "'" . $adicional . "><span class=\"lead\">";
            echo $headerps;
            echo "</a>";
            echo "</span>";
            echo "<div class='clearfix'></div>";
            echo "<div class='data'>{$data}</div>";
        }
    }

    
        static function titulopostagem2($a, $headerps, $data = null, $adicional = null) {

        if ($a == "") {

            echo "<span class=\"lead\">";
            echo $headerps;
            echo "</span>";
            echo "<div class='data'>{$data}</div>";
        } else {

            echo "<a href='" . strtolower($a) . "' title='" . $headerps . "'" . $adicional . " target='new'><span class=\"lead\">";
            echo $headerps;
            echo "</a>";
            echo "</span>";
            echo "<div class='clearfix'></div>";
            echo "<div class='data'>{$data}</div>";
        }
    }
    
}

?>
