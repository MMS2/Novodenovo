<?php

/**
 * Carrinho
 */
class Carrinho {

    static function addcart($cart) {

        // Sessao::apagasessao();
        $id = Texto::uri(2);
        if (!isset($_SESSION[$cart])) {
            $_SESSION[$cart] = array();
        }
        if (!isset($_SESSION[$cart][$id])) {
            $_SESSION[$cart][$id] = 1;
        } else {
            $_SESSION[$cart][$id] += 1;
        }
        //  Sessao::pre($cart);

        texto::redireciona(BASEURLAPP);
    }

    static function addcartdel($cart) {

        //  Sessao::apagasessao();
        $id = Texto::uri(2);
        if (!isset($_SESSION[$cart])) {
            $_SESSION[$cart] = array();
        }
        if ($_SESSION[$cart][$id] <= 1) {
            unset($_SESSION[$cart][$id]);
        } else {
            $_SESSION[$cart][$id] -= 1;
        }


        //Sessao::pre($cart);

        texto::redireciona(BASEURLAPP);
    }

    static function apagarcartid($cart) {
        $id = Texto::uri(2);
        if (isset($_SESSION[$cart][$id])) {
            unset($_SESSION[$cart][$id]);
        }
        texto::redireciona(BASEURLAPP);
    }

    static function recupera($session, $banco, $pageadd, $pagedelunit) {
        echo '<table width="100%"><tbody>';
        echo "     <tr>
                  <td>Produto</td>
                  <td>Valor</td>
                  <td>Quantidade</td>
                   <td>Subtotal</td>
                  <td>Adicionar</td>
                  <td>Remover</td>
                </tr>";

        foreach ($session as $cart => $qty) {
            $sql = "Select * from " . $banco . " where id = " . $cart;
            $query = mysql_query($sql);

            while ($listar_cart = mysql_fetch_object($query)) {

                $valor = number_format($listar_cart->price, 2, ",", ".");
                $total = $qty * $listar_cart->price;
                //$valor += $total;
                //$valortotal = number_format($valortotal,2,",",".");
                $vt += $total;
                echo " 
    <tr>
      <td>" . $listar_cart->name . "</td>
      <td>R$ " . $valor . "</td>
      <td>" . $qty . "</td>
      <td>R$ " . $v . "</td>
      <td>";
                TEXTO::link($pageadd . "/" . $listar_cart->id, "", "class='adiciona'");
                echo "</td>
      <td>";
                TEXTO::link($pagedelunit . "/" . $listar_cart->id, "", "class='remove'");
                echo "</td>

    </tr>";
            }
        }
        echo "    <tr>
                  <td colspan='5'></td>
                  <td> R$ " . number_format($vt, 2, ",", ".") . "</td>
                </tr>";
        echo '<tbody></table> ';
    }

}

?>