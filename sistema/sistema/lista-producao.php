<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';

$sql = 
'SELECT pr.ProducaoID AS ProducaoID, p.Nome AS Produto, p.ProdutoID AS ProdutoID, f.FuncionarioID AS FuncionarioID, c.ClienteID AS ClienteID, pr.DataProducao AS DataProducao, pr.DataEntrega AS DataEntrega
FROM Producao AS pr
INNER JOIN Produtos AS p ON p.ProdutoID = pr.ProdutoID
INNER JOIN Funcionarios AS f ON f.FuncionarioID = pr.FuncionarioID
INNER JOIN Clientes AS c ON c.ClienteID = pr.ClienteID';

$resultado = mysqli_query($conn, $sql);

?>
  <main>

    <div class="container">
        <h1>Lista de Produções</h1>
        <a href="./salvar-producao.php" class="btn btn-add">Incluir</a> 
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Produto</th>
              <th>ProdutoID</th>
              <th>FuncionárioID</th>
              <th>ClienteID</th>
              <th>Data de Produção</th>
              <th>Data de Entrega</th>
              <th>Ações</th>
              
            </tr>
          </thead>
          <tbody>
            <?php
            while ($dado = mysqli_fetch_assoc($resultado)){
              ?>
            <tr>
              <td><?php echo $dado['ProducaoID']?></td>
              <td><?php echo $dado['Produto']?></td>
              <td><?php echo $dado['ProdutoID']?></td>
              <td><?php echo $dado['FuncionarioID']?></td>
              <td><?php echo $dado['ClienteID']?></td>
              <td><?php echo $dado['DataProducao']?></td>
              <td><?php echo $dado['DataEntrega']?></td>
              <td>  
                <a href="#" class="btn btn-edit">Editar</a>
                <a href="#" class="btn btn-delete">Excluir</a>
              </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
      </table>
    </div>
  </main>
<?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>