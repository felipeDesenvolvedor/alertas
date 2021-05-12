<section class="content">
    <?php 
        $ecommerce  = isset($_GET['ecommerce']) ? $_GET['ecommerce'] : "";
        $codPedido  = isset($_GET['CodPedido']) ? $_GET['CodPedido'] : "";
        $notaFiscal = isset($_GET['NotaFiscal']) ? $_GET['NotaFiscal'] : "";
        $serie      = isset($_GET['Serie']) ? $_GET['Serie'] : "";

        echo "
            <p> 
                Pedido <strong> $codPedido </strong> recebido do ecommerce <strong> $ecommerce </strong> gerou a nota fiscal <strong> $notaFiscal </strong> e série <strong> $serie </strong> 
            </p>
        ";
    ?>
</section>