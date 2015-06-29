<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="pt-BR">
	<!--<![endif]-->
	<head>

		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8">
		<title><?php echo TITULOAPP ?> Admin</title>
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- CSS
		================================================== -->
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
            
            <style>
                header{border-bottom: 1px solid #eee}
                header nav {}
                header nav ul{float:left}
                header nav ul li a {display:inline-block; float:left; margin:0px 3px}
                div.menu {}
                div.menu ul { float:left}
                div.menu ul li a {width:100%; float:left; display: block}
                
                div#conteudo {border-left: 1px solid #eee}
                div#conteudo div#lista {     -webkit-column-count: 4;
    -webkit-column-gap: 10px;
    -webkit-column-fill: auto;
    -moz-column-count: 4;
    -moz-column-gap: 10px;
    column-count: 4;
    column-gap: 10px;
    column-fill: auto;
               }
                div#conteudo aside.lista {    width: auto;
    -webkit-column-break-inside: avoid;
    -moz-column-break-inside: avoid;
    -ms-column-break-inside: avoid;
    column-break-inside: avoid;}
                div#conteudo aside.lista:hover {opacity: 0.5}
                
            </style>
        </head>
		

	
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=319521254818788&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>
<script>
	
	
		
	</script>
		<div id="fb-root"></div>
	
	</head>
	<body >
		
		<?php $this->ver('admin/t/header');
	
echo "<div class='linha'>";

   echo '<div class="clearfix"></div>';          
      echo "<div class='c3 col menu '>";
   $this->ver('admin/t/menu');
     echo "</div>";
   echo "<div class='c9 col' id='conteudo'>";
 $this->ver($conteudo);
  echo "</div>";
 echo "</div>";
			?>
	

<footer>
	<div class="linha">
		<div class="c12 col">
		<div class="clearfix"></div>
		Desenvolvido por Mídia Kitcomunicação.
			</div>


	</div>
</footer>
		<?php
		Publico::js('scripts');
		?>
            
            <script>
	$('.textarea').jqte();
	
	// settings of status
	var jqteStatus = true;
	$(".status").click(function()
	{
		jqteStatus = jqteStatus ? false : true;
		$('.textearea').jqte({"status" : jqteStatus})
	});
</script>
	</body>
</html>
