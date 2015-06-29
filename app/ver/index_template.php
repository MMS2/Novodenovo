<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="pt-BR">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title><?php echo TITULOAPP ?></title>
        <meta name="description" content="">
        <meta name="author" content="">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            <!-- CSS ================================================== -->
            <?php
            Publico::csslib("jquery-te-1.4.0");
            Publico::csslib("reset");
            Publico::csslib("style");
            Publico::csslib("form");
            Publico::csslib("slide");
             Publico::csslib("top");
            ?>
            <!-- JS ================================================== -->
            <?php
            Publico::jslib('vendor/jquery-1.11.1.min');
            Publico::jslib('vendor/modernizr-2.8.0.min');
            Publico::jslib('vendor/jquery-te-1.4.0.min');
            Publico::jslib('vendor/html5shiv');
            Publico::jslib('vendor/css3-mediaqueries');
            Publico::jslib('vendor/ie8');
            Publico::jslib('vendor/ie8.min');
            Publico::jslib('slide');
            ?>
        </head>
        <body>
            <?php
            $this->ver('template/header');
       
     
            ?>
            <div id="slide" class="full">
    <div class=" linha">
    <div class="col c9">
<?php      $this->ver($conteudo);?>
          </div>

            <?php $this->ver('template/sidebar');?>
  </div>
        
<div class="clearfix"></div>
</div>
           <footer>
                
                <div class="linha">
                    footer
                </div>
                
                
            </footer>
            <a href="javascript:void(0)" class="cd-top">Top</a>
            <?php
            Publico::jslib('scripts');
            Publico::jslib('funcoes');
            ?>
            <script>
                $('.textarea').jqte();
                var jqteStatus = true;
                $(".status").click(function()
                {
                jqteStatus = jqteStatus ? false : true;
                $('.textearea').jqte({"status" : jqteStatus})
                });
         

   


    
  </script>
        </body>
    </html>