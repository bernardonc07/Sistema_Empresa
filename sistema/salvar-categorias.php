<?php
// Inclusão dos arquivos necessários
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>



<main>
    <div id="cargos" class="tela">
        <form class="crud-form" action="./action/categorias.php" method="post">
            <h2>Cadastro de Cargos</h2>

            <input type="hidden" name="acao" value="salvar">

            <input type="text" name="Nome" placeholder="Nome da Categoria" required>
            
            <input type="textarea" name="Descricao" placeholder="Descrição" required>

            <button type="submit">Salvar</button>
        </form>
    </div>
</main>

<?php
// Rodapé da página
include_once './include/footer.php';
?>
