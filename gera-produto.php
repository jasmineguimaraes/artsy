<!--- Gerador de produtos --->
<?php 

$sql = "select * from produtos";
$result = $conn->query($sql);

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
            <p class="current-pricing"> <?php echo $rows["precofinal"] ?> </p>

        </div>
    </div>
</div>

<?php
    }
} else {
     echo "Nenhum produto cadastrado";
}
?>