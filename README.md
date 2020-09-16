# Gaudium Full Stack Developer Exam

Bem vindo(a) ao ambiente de desenvolvimento do processo seletivo para Desenvolvedor Full Stack da Gaudium!

Este ambiente será utilizado durante a prova prática do processo.

É necessário ter a versão estável mais recente do [Docker Desktop](https://www.docker.com/products/docker-desktop) instalado no seu computador.

## Verificação do ambiente

Uma vez que o Docker Desktop esteja funcionando no seu computador, você deve:

1. Fazer um fork deste repositório para um novo repositório na sua conta do Github.

2. Baixar o seu novo repositório para o seu computador, usando o o comando git clone ou um cliente git como o [GitHub Desktop](https://desktop.github.com/).

3. Verificar o funcionamento do ambiente. Para isto, abra um terminal de linha de comandos na pasta `gdfs-workspace` e digite o comando 

   `docker-compose up -d`

4. Após verificar que os containers foram ativados, abra o seu navegador no endereço

    [http://127.0.0.1:8123]( http://127.0.0.1:8123)

   Uma página com a mensagem **Ambiente instalado com sucesso!** deverá ser exibida.

## Estrutura do ambiente

- A pasta `www` conterá os arquivos php, html, javascript, css e imagens que você produzirá durante a prova prática.
- O servidor web responderá no endereço `127.0.0.1:8123` 
- O banco de dados MySQL 5.6 responderá na porta `8456`
- Os dados de conexão ao banco podem ser encontrados no código do script `index.php`.

## Ferramentas recomendadas

Durante a prova, você precisará acessar o banco de dados MySQL para criar tabelas e fazer outras consultas. Sugerimos que use um programa como o [SequelPro](https://sequelpro.com/) (para Mac) ou [HeidiSQL](https://www.heidisql.com/) (para Windows).

