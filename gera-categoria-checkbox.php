  <!---container do dropdown --->
  <div class="container-fluid d-flex">

      <!---Filtro de categorias -->




      <form action="produtos.php" method="post">
          <div class="input-group">
              <select name="FILTRO" class="custom-select">
                  <option value="">Todos</option>


                  <!-- algoritmo que procura todos os valores dentro do campo "categoria" e, sem repetir, insere no dropdownn -->
                  <?php 
                            $sql="SELECT DISTINCT categoria from produtos";
                            $result =$conn-> query($sql);

                            if($result->num_rows > 0) {
                            while($rows = $result -> fetch_assoc()) {
                            ?>

                  <option value="<?php echo $rows['categoria']?>">
                      <?php echo $rows['categoria']?>
                  </option>


                  <?php
                                                                    }
                                                    } else {
                                                         echo "Nenhuma categoria encontrada";
                                                            }
                    ?>
              </select>

              <div class="input-group-append">
                  <button class="btn-sm btn-outline-dark" type="submit"> Filtrar <i class="fas fa-filter"></i> </button>
              </div>
          </div>
      </form>
  </div>