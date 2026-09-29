# Cadastro de Produtos em PHP

## Sobre o projeto

Este projeto foi desenvolvido em PHP com o objetivo de criar um sistema simples para cadastrar produtos em um banco de dados MySQL.

O sistema possui um formulário onde é possível informar o nome e o preço do produto. Antes de cadastrar, os dados passam por uma validação para evitar informações inválidas.

## Tecnologias utilizadas

- PHP
- MySQL
- HTML
- CMD
- Visual Studio Code

## Banco de dados

Foi utilizado o banco de dados `exercicio`.

A tabela criada foi a `produtos`, contendo os seguintes campos:

- `id`: identificador do produto, gerado automaticamente.
- `nome`: nome do produto.
- `preco`: preço do produto.

```sql
CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL
);
