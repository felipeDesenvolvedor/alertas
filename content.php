<section class="content content_container">
    <?php 
        $ecommerce  = isset($_GET['ecommerce']) ? $_GET['ecommerce'] : "";
        $codPedido  = isset($_GET['CodPedido']) ? $_GET['CodPedido'] : "";
        $notaFiscal = isset($_GET['NotaFiscal']) ? $_GET['NotaFiscal'] : "";
        $serie      = isset($_GET['Serie']) ? $_GET['Serie'] : "";

        echo "
        <span class=\"content\">
            <p> 
                Pedido <strong> $codPedido </strong> recebido do ecommerce <strong> $ecommerce </strong> gerou a nota fiscal <strong> $notaFiscal </strong> e série <strong> $serie </strong> 
            </p>
        </span>
        ";
        require_once('./imagem_alerta.php')
    ?>
</section>