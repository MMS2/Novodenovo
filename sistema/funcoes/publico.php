<?php

/**
 * Publico
 */
class Publico {

    public $array = array();

//CSS
    static function css($data) {
        $css = strtolower($data);
        echo '<link rel="stylesheet" href="' . CSSPUBLIC . $css . '.css">' . "\n";
    }
      static function csslib($data) {
        $css = strtolower($data);
        echo '<link rel="stylesheet" href="' . CSSLIB . $css . '.css">' . "\n";
    }

    static function jslib($data) {
        $js = strtolower($data);
        echo '<script type="text/javascript" src="' . JSLIB . $js . '.js" ?>" ></script>' . "\n";
    }

    static function js($data) {
        $js = strtolower($data);
        echo '<script type="text/javascript" src="' . JSPUBLIC . $js . '.js" ?>" ></script>' . "\n";
    }

    

    static function slide(){


        
    }


 }




?>
