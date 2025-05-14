<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>
<main>
    <!-- Tela de cadastro de cargos -->
    <div id="setores" class="tela">
        <form class="crud-form" action="./action/setores.php" method="post">
            <h2>Cadastro de Setores</h2>
            
            <input type="hidden" name="acao" value="salvar">

            <input type="text" name="Nome" placeholder="Nome do Andar" required>

            <input type="number" name="Andar" placeholder="Andar" required>

            <input type="text" name="Cor" placeholder="Cor do Andar" required>

            <button type="submit">Salvar</button>
        </form>
    </div>
</main>

<?php
// Rodapé da página
include_once './include/footer.php';
?>
