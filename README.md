# Sistema_Empresa

Este projeto é um site que replica um gerenciamento de uma empresa. Ele utiliza PHP no Backend, HTML/CSS no Frontend e MySQL como banco de dados.

## Tecnologias Utilizadas

<p align="left">
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5" width="40" height="40"/>
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3" width="40" height="40"/>
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP" width="40" height="40"/>
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" width="40" height="40"/>
</p>

## Instruções de Uso

Itens necessário:

- [XAMPP](para rodar Apache + MySQL)
- Editor de código (VS Code recomendado)

---

Importar o Banco de Dados<br>
	1.	Acesse o phpMyAdmin:
http://localhost/phpmyadmin<br>
	2.	Clique em “Novo” e crie um banco de dados com o nome desejado (ex: empresa_db)<br>
	3.	Clique no banco criado > Aba “Importar”<br>
	4.	Selecione o arquivo script.sql localizado no diretório /database do projeto<br>
	5.	Clique em “Executar” para importar todas as tabelas<br>

---

 Conexão com o Banco de Dados:<br>
 Abra o arquivo conexao.php e edite os dados de acesso:<br><br>
 $host = "localhost";<br>
$usuario = "root"; <br>
$senha = "";      
$banco = "meubanco"; // depende do nome criado pelo usuário<br>
