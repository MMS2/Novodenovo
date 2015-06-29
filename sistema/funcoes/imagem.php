<?php
/**
* IMAGEMS
*/
class Imagem 
{
	   public $array = array();

	   
    static function imglib($img, $alt = null, $adicional = null) {
        echo "<span><img src='" . IMGLIB . $img . ".jpg' alt='" . $alt . "' " . $adicional . "/></span>";
    }
    static function jpg($img, $alt = null, $adicional = null) {
        echo "<span><img src='" . IMGPUBLIC . $img . ".jpg' alt='" . $alt . "' " . $adicional . "/></span>";
    }

    static function png($img, $alt = null, $adicional = null) {
        echo "<span><img src='" . IMGPUBLIC . $img . ".png' alt='" . $alt . "' " . $adicional . "/></span>";
    }
  static function svg($img, $alt = null, $adicional = null) {
        echo "<span><img src='" . IMGPUBLIC . $img . ".svg' alt='" . $alt . "' " . $adicional . "/></span>";
    }
    static function imgfora($img, $alt = null, $adicional = null) {
        echo "<span><img src='" . $img . "' alt='" . $alt . "' " . $adicional . "/></span>";
    }
    
        static function imgupload($img, $alt = null, $adicional = null) {
        echo "<span><img src='../". $img . "' alt='" . $alt . "' " . $adicional . "/></span>";
    }


//IMAGEM LINK
    static function linkimagempasta($a, $titulo, $img, $array1, $array2) {
        echo "<a href='" . strtolower(BASEURL . $a) . "' title='" . $titulo . "' ".$array1." >\n";
        echo "<img src='" . IMGPUBLIC . $img . "' $array2 />";
        echo "</a>\n";
    }

    static function linkimagemurl($a, $titulo, $img, $array) {
        echo "<a href='" . strtolower($a) . "' title='" . $titulo . "' target='new' >\n";
        echo "<img src='" . $img . "' $array />";
        echo "</a>\n";
    }


    //*IMAGEM CAPTION*//

    static function imgcaptionfora($a, $titulo, $img,  $conteudo, $class){
    echo " <figure class='".$class."' >\n";
    echo "<img src='" . $img . "' />\n";
    echo "<figcaption>\n";
    echo "<header><a href='" . strtolower($a) . "' title='" . $titulo . "'>".$titulo."</a></header>\n";
   echo "<span>".$conteudo."</span>\n";
    echo "</figcaption>\n";
    echo "</figure>\n";
    }

      static function imgcaptionup($a, $titulo, $img,  $conteudo, $class){
    echo " <figure class='".$class."' >\n";
    echo "<img src='" . $img . "' />\n";
    echo "<figcaption>\n";
    echo "<header><a href='" . strtolower(BASEURL.$a) . "' title='" . $titulo . "'>".$titulo."</a></header>\n";
   echo "<span>".$conteudo."</span>\n";
    echo "</figcaption>\n";
    echo "</figure>\n";
    }

    static function jpgcaption($a, $titulo, $img,  $conteudo, $class){
      echo " <figure class='".$class."' >\n";
 echo "<img src='" . IMGPUBLIC . $img . ".jpg' />\n";
    echo "<figcaption>\n";
    echo "<header><a href='" . strtolower($a) . "' title='" . $titulo . "'>".$titulo."</a></header>\n";
   echo "<span>".$conteudo."</span>\n";
    echo "</figcaption>\n";
    echo "</figure>\n";
    }

        static function pngcaption($a, $titulo, $img,  $conteudo, $class){
       echo " <figure class='".$class."' >\n";
 echo "<img src='" . IMGPUBLIC . $img . ".png' />\n";
    echo "<figcaption>\n";
    echo "<header><a href='" . strtolower($a) . "' title='" . $titulo . "'>".$titulo."</a></header>\n";
   echo "<span>".$conteudo."</span>\n";
    echo "</figcaption>\n";
    echo "</figure>\n";
    }

    

 //*IMAGEM ZOOM*//
    static function imgzoomfora($img, $alt = null) {
        echo "<img src='" . $img . "' alt='" . $alt . "'  class='zoom' />";
    }

   static function jpgzoom($img, $alt = null) {
        echo "<img src='" . IMGPUBLIC . $img . ".jpg'  alt='" . $alt . "'  class='zoom' />";
    }

       static function pngzoom($img, $alt = null) {
        echo "<img src='" . IMGPUBLIC . $img . ".png'  alt='" . $alt . "'  class='zoom' />";
    }


    /*SLIDE*/

static function slide($class , $i1= null, $i2= null, $i3= null, $i4 = null){
$arr =  array($i1, $i2, $i3, $i4);







   echo "<div id='slides' class='".$class."'> ";
foreach ($arr as $value) {
   echo "<img src='".$value."'>\n";
 }
  echo "</div>";
  }

}
?>