# mestre
## arquivos_servidor
arquivos PHP que recebem informações dos html do cliente
## index.php
arquivo html (com apenas um echo olá mundo em PHP - não precisava ser PHP, mas acabou que deixei o arquivo assim) que seleciona os htmls que o cliente vai usar para:
## na pasta if
inputform.html - pegar dados de um formulário, mandar para o script welcome_get.php e receber um echo com as variáveis "name" e "e-mail"
## na pasta wf
writefile.html - ao clicar no botão enviar, faz um request para o arquivo write_file.php, que grava strings pré definidas no arquivo ark/mestre.txt
wpalavra.html - pegar dados de um formulário, mandar para o script palavra_mestre.php e gravar a string no arquivo ark/mestre.txt
## arquivo mestre.txt
arquivo com as informações do mestre para ser lido pelos jogadores (ainda não implementado)
## arquivo ark/index do servidor
não é referente a este projeto, é um exemplo de como usar python dentro de uma aplicação web. Pyodide é um projeto de código aberto que combina o interpretador Python com a linguagem JavaScript, permitindo a execução de código Python diretamente no navegador da web. Ele utiliza a tecnologia WebAssembly para executar o interpretador Python em um ambiente de sandbox seguro dentro do navegador.

