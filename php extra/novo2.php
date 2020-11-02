  <!---container do dropdown --->
  <div class="container-fluid d-flex">

      <!---Filtro de categorias -->

      <div class="dropdown">
          <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Categorias
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">

              <form action='produtos.php' method='get'>
                  <button class="dropdown-item" type="text">

                      <a class="dropdown-item text-center" href="produtos.php?cat=Pinceis">Pincéis</a></button>

                  <a class="dropdown-item text-center" href="produtos.php?cat=Telas">Telas</a></button>

                  <a class="dropdown-item text-center" href="produtos.php?cat=Tintas">
                      Tintas</a></button>

                  <a class="dropdown-item text-center" href="produtos.php?cat=Giz">
                      Giz</a></button>

                  <a class="dropdown-item text-center" href="produtos.php?cat=canetas">
                      canetas</a></button>
              </form>





          </div>
      </div>

  </div>