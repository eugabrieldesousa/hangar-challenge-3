﻿# Desafio Hangar - Vendas por País

## Descrição

Este projeto consiste em uma página web que exibe o total de vendas por país e oferece um mecanismo de filtragem para visualizar as vendas de um país específico.

## Tecnologias Utilizadas

- HTML
- CSS (Bootstrap 4.5.2)
- JavaScript (jQuery)
- PHP
- MySQL

## Estrutura de Arquivos

- `index.php`: Arquivo HTML principal contendo a estrutura da página da web, incluindo o logotipo, formulário de filtro e tabela para exibir os dados de vendas.
- `fetch_countries.php`: Script PHP para buscar e preencher as opções de país no menu de filtro.
- `fetch_data.php`: Script PHP para buscar e exibir os dados de vendas agrupados por país.
- `db_connection.php`: Script PHP para estabelecer uma conexão com o banco de dados MySQL.
- `styles.css`: Arquivo CSS para estilos personalizados.

## Como Executar

1. Certifique-se de ter um ambiente de servidor web configurado com PHP e MySQL instalados.
2. Clone este repositório em sua máquina local.
3. Importe o esquema do banco de dados MySQL fornecido (`teste_hangar.sql`) para o seu servidor MySQL.
4. Atualize os detalhes da conexão com o banco de dados (`$host`, `$username`, `$password`, `$database`) em `db_connection.php` para corresponder às suas credenciais do MySQL.
5. Inicie seu servidor web.
6. Abra o arquivo `index.php` em um navegador da web.

## Utilização

- Ao abrir o arquivo `index.php`, você verá um logotipo na parte superior, um menu de filtro para selecionar um país e uma tabela exibindo as vendas totais para cada país.
- Utilize o menu de filtro para selecionar um país específico e visualizar suas vendas totais.
- A tabela será atualizada dinamicamente para exibir as vendas totais do país selecionado.
- Se nenhum país for selecionado ou se não houver dados de vendas disponíveis para o país selecionado, mensagens apropriadas serão exibidas.

## Observações

- Este projeto pressupõe a existência de um banco de dados MySQL com tabelas apropriadas (`user` e `orders`) contendo dados de vendas.
- Certifique-se de que seu ambiente de servidor web suporte PHP para que o script do lado do servidor funcione corretamente.

## Créditos

- Este projeto foi desenvolvido como solução para o Desafio Hangar.
- O esquema do banco de dados e os dados de exemplo foram fornecidos pela Hangar Digital.
