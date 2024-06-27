
---

# Sistema de Gerenciamento de Biblioteca

## Descrição

O Sistema de Gerenciamento de Biblioteca é uma aplicação web desenvolvida para facilitar a gestão de uma biblioteca. Ele permite o cadastro de livros, gerenciamento de usuários e controle de empréstimos e devoluções. Este sistema é ideal para pequenas bibliotecas que desejam organizar suas operações de forma eficiente e automatizada.

## Funcionalidades

- **Cadastro de Livros**: Permite adicionar, editar e remover livros do acervo da biblioteca.
- **Gerenciamento de Usuários**: Permite cadastrar e gerenciar os usuários da biblioteca.
- **Controle de Empréstimos**: Permite registrar, visualizar e controlar empréstimos e devoluções de livros.
- **Categorias de Livros**: Permite organizar os livros em categorias para facilitar a busca e o gerenciamento.

## Tecnologias Utilizadas

- **Front-End**: HTML, CSS, JavaScript
- **Back-End**: PHP
- **Banco de Dados**: MySQL

## Pré-requisitos

- Servidor local (XAMPP, WAMP, MAMP ou similar)
- Navegador web
- Editor de texto ou IDE (Visual Studio Code, Sublime Text, etc.)

## Instalação

1. **Clone o repositório**:
   ```sh
   git clone https://github.com/seu-usuario/sistema-biblioteca.git
   ```
2. **Configure o servidor local**:
   - Coloque os arquivos do projeto na pasta `htdocs` (para XAMPP) ou equivalente no seu servidor local.
3. **Crie o banco de dados**:
   - Abra o phpMyAdmin ou uma ferramenta similar.
   - Crie um banco de dados chamado `library`.
   - Importe o arquivo `library.sql` localizado na pasta `database` do projeto para criar as tabelas necessárias.
4. **Configure a conexão com o banco de dados**:
   - Edite o arquivo `config.php` e configure as credenciais do banco de dados:
     ```php
     <?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "library";

     $conn = new mysqli($servername, $username, $password, $dbname);

     if ($conn->connect_error) {
         die("Conexão falhou: " . $conn->connect_error);
     }
     ?>
     ```
5. **Inicie o servidor**:
   - Inicie o servidor local através do XAMPP, WAMP, MAMP ou similar.
6. **Acesse a aplicação**:
   - Abra o navegador e acesse `http://localhost/sistema-biblioteca`.

## Como Usar

### Cadastro de Livros

1. Navegue até a seção "Cadastro de Livros".
2. Preencha os campos necessários e clique em "Adicionar Livro".

### Gerenciamento de Usuários

1. Navegue até a seção "Gerenciamento de Usuários".
2. Adicione novos usuários ou edite as informações dos existentes.

### Controle de Empréstimos

1. Navegue até a seção "Empréstimos".
2. Selecione o usuário e o livro a serem emprestados.
3. Registre o empréstimo e acompanhe as devoluções.

## Contribuição

Se você quiser contribuir para o desenvolvimento deste projeto, sinta-se à vontade para abrir issues e enviar pull requests.

## Licença

Este projeto está licenciado sob a licença MIT - veja o arquivo `LICENSE` para mais detalhes.

## Contato

Para mais informações, entre em contato:
- **Nome:** Guilherme Braga Ferreira
- **Email:** guilhermebragaferreira40@gmail.com
- **LinkedIn:** https://www.linkedin.com/in/guilherme-braga-ferreira-3b4810290/

---
