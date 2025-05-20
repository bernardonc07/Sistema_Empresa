<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>

  
  <main>

    <div id="funcionarios" class="tela">
        <form class="crud-form">
          <h2>Cadastro de Funcionários</h2>
          <input type="text" name="Nome" placeholder="Nome">
          <input type="date" name="DataNascimento" placeholder="Data de Nascimento">
          <input type="email" name="Email" placeholder="Email">
          <input type="number" name="Salario" placeholder="Salário">
          <select>
            <option value="sexo">Sexo</option>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
          </select>
          <input type="text" name="CPF" placeholder="CPF">
          <input type="text" name="RG" placeholder="RG">
          <select>
            <option value="Cargo">Cargo</option>
          </select>
          <select>
            <option value="Setor">Setor</option>
          </select>
          <button type="submit">Salvar</button>
        </form>
      </div>


   
  </main>

  <?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>
