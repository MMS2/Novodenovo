<aside >
<div class="col c3" id="servicosMenu">
            <?php Texto::h1("Serviços");
              $arrmenu = array("Pastilhas e Porcelanato", "Drywall", "Iluminação", "Hidráulica e Esgoto");
              ?>
              <ul>
                    <?php foreach($arrmenu as $a): ?>
                              <li><?php Texto::link("web/".Texto::limpar($a), $a)?></li>
                    <?php 
                    endforeach;?>
    </ul>
    

    
  </div>
</aside>
