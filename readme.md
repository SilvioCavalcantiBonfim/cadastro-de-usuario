# Projeto de Cadastro de Usuário

![php](https://img.shields.io/badge/-PHP-white?style=for-the-badge&logo=php&color=777BB4&logoColor=white)
![mysql](https://img.shields.io/badge/-MySQL-white?style=for-the-badge&logo=mysql&color=4479A1&logoColor=white)

Este projeto é uma aplicação simples de cadastro de usuários desenvolvida como parte da disciplina de Projeto Integrador do curso de Desenvolvimento de Software da Escola Técnica Estadual Jurandir Bezerra Lima.

## Descrição

A aplicação permite o cadastro de usuários com nome, e-mail e senha. Os dados dos usuários são armazenados em um banco de dados MySQL. A senha é criptografada usando SHA-256 antes de ser armazenada.

## Estrutura do Projeto

### Docker

- **`docker-compose.yml`** e **`docker-compose.development.yml`**: Arquivos de configuração do Docker Compose para criar e gerenciar os containers da aplicação e do banco de dados MySQL.
- **`Dockerfile`**: Define a imagem do Docker para a aplicação PHP.

### Banco de Dados

- **`docker/mysql/init/init.sql`**: Script SQL para criar a tabela `user` no banco de dados `register`.

### Frontend

- **`src/index.php`**: Página principal com o formulário de cadastro.
- **`src/style.css`**: Folha de estilos para a página de cadastro.

### Backend

- **`src/process.php`**: Script PHP que processa o formulário de cadastro e insere os dados no banco de dados.
- **`src/connection.php`**: Script PHP para conexão com o banco de dados MySQL.

## Requisitos

- Docker
- Docker Compose

## Instalação

1. Clone este repositório:

   ```sh
   git clone <URL_DO_REPOSITORIO>
   cd <NOME_DO_REPOSITORIO>
   ```

2. Construa e inicie os containers usando o Docker Compose:

   ```sh
   docker compose up --build
   ```

   ou, para ambiente de desenvolvimento:

   ```sh
   docker compose -f docker-compose.development.yml up --build
   ```

3. Acesse a aplicação em `http://localhost:8080`.

## Configuração

As variáveis de ambiente para a conexão com o banco de dados estão definidas no arquivo `docker-compose.yml`:

- `DB_HOST`: Nome do host do banco de dados (db)
- `DB_USER`: Usuário do banco de dados (root)
- `DB_PASSWORD`: Senha do banco de dados (root)
- `DB_NAME`: Nome do banco de dados (register)

## Contribuições

Contribuições são bem-vindas! Sinta-se à vontade para fazer um fork do projeto, enviar pull requests e relatar problemas.

## Licença

Este projeto está licenciado sob a [Licença MIT](LICENSE).