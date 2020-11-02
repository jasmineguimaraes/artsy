  <!---container do dropdown --->
  <div class="container-fluid d-flex">

      <!---Filtro de categorias -->

      <div class="dropdown">
          <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Categorias
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <!-- algoritmo que procura todos os valores dentro do campo "categoria" e, sem repetir, insere no dropdownn -->
                  <?php 
                            $sql="SELECT DISTINCT categoria from produtos";
                            $result =$conn-> query($sql);

                            if($result->num_rows > 0) {
                            while($rows = $result -> fetch_assoc()) {
                            ?>

                  <a class="dropdown-item" href=""><?php echo $rows['categoria'] ?></a>


                  <?php
                                                                    }
                                                    } else {
                echo "Nenhuma categoria encontrada";
                                                            }
                    ?>
          </div>
      </div>

  </div>