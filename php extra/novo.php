<!--- Gerador de produtos --->
<?php 

echo '<h1>'.$cat.'</h1>';

switch ($cat){
    case null:
        $sqll = "select * ";
    break;

    case 'Giz':
        $sqll = "select ".$cat;
    break;

    case 'canetas':
        $sqll = "select ".$cat;
    break;

    case 'Telas':
        $sqll = "select ".$cat;
    break;

    case 'Tintas':
        $sqll = "select ".$cat;
    break;

    case 'Pinceis':
        $sqll = "select ".$cat;
    break; 

    default:
        $sqll = "select * ";

}

    $sqll.= " from produtos";
   if ($conn->query($sqll)) {
        echo '<h1> busca concluida </h1>'; 
   }
echo $sqll;

if($result->num_rows > 0) {
    while($rows = $result -> fetch_assoc()) {
        ?>

<div class="product-container col-xs-12 col-sm-6 col-md-5 col-lg-3 col-xl-2">
    <div class=" container-fluid d-flex flex-wrap product-wrapper">
        <div class="product-wrapper">
            <img class="picture-tag img-fluid img-thumbnail" src="<?php echo $rows["imagem"] ?>"
                alt="<?php echo $rows["descricao"] ?>">
            <button type="button" class="btn btn-outline-dark btn-artsy">Comprar</button>
            <p class="product-tag"><?php echo $rows["descricao"] ?></p>
            <hr>
            <p class="pricing"> <?php echo $rows["preco"] ?> </p>
            <p class="pricing"> <?php echo $rows["precofinal"] ?> </p>

        </div>
    </div>
</div>

<?php
    }
} else {
     echo "Nenhum produto cadastrado";
}
?>