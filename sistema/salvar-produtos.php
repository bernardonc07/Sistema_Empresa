
<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>
  
  <main>

    <div id="produtos" class="tela">
        <form class="crud-form" action="" method="post">
          <h2>Cadastro de Produtos</h2>
          <input type="hidden" name="acao" value="salvar">
          <input type="text" name="Nome" placeholder="Nome do Produto">
          <input type="number" name="Preco" placeholder="Preço">
          <input type="number" name="Peso" placeholder="Peso (g)">
          <textarea name="Descricao" placeholder="Descrição"></textarea>
          <select name="CategoriaID">
          <option value="">Categoria</option>
           <?php
            $query = "SELECT CategoriaID, Nome FROM categorias";
            $result = mysqli_query($conn, $query); // $conn é a variável de conexão vinda de 'conexao.php'

            if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value="' . $row['CategoriaID'] . '">' . htmlspecialchars($row['Nome']) . '</option>';
            }
             }
  ?>
</select>

          <button type="submit">Salvar</button>
        </form>
      </div>


   
  </main>

  <?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>