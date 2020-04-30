<br/>
<br/>

![](https://img.shields.io/badge/License-GPLv3-blue.svg)

**Esse badge significa que a Licença de Projeto, Repositório ou Software é livre, aberta, pública e gratuita.**

<br/>
<br/>

![Grupo UDF](http://3.bp.blogspot.com/-RizzfGXtv10/T6FdxUrlE5I/AAAAAAAAAFE/9Ytah8msyt8/s1600/30276_114631768573823_114631328573867_83786_1421735_n.jpg)

### [Sistema Academia](https://b10f241d-81cc-4afe-909a-8399384f986d.ws-us02.gitpod.io/#/workspace/projetointerdisciplinar)
**Palavras-Chaves: Pool Service, SAS, Sistema Web, Progressive WebApp, Webware**

<br/>
<br/>

### Colaboradores e Componentes do Grupo
Mayro Almeida, Pablo Santos, Eudson Durães, Fábio Borbas, Pedro Guilherme 

### Dependências

Primeiramente deve-ser instalar composer: 

``https://getcomposer.org/download/``

Depois do composer instalado, é necessário instalar algumas depedências, para isso, vá ate a pasta onde encotra-se o sistema academia e execute o seguinte comando:

``comando:composer install``

Agora é preciso criar o banco de dados para a aplicação. O laravel transforma todas as tabelas do banco de dados em classes, portanto o bando já está salvo dentro da aplicação. Mas para cria-lo e necessário usar o comando do laravel, primeiramente deve-se instalar o laravel.

``composer global require laravel/installer``

Com o laravel instalado você terá acesso a varios comandos, mas o comando que importa agora é:

``php artisan migrate``

Esse comando irá criar o banco de dados com todas as tabelas (esse comando deve ser executado dentro da pasta do sistema). Pronto, se tudo ocorreu bem o sistemas está funcionando.
<br/>
<br/>
<br/>
