
### Dependências

Primeiramente deve-ser instalar composer: 

https://getcomposer.org/download/

Depois do composer instalado, é necessário instalar algumas depedências, para isso vá ate a pasta onde encotra-se o sistema academia e execute o seguinte comando:

``composer install``

Agora é preciso criar o banco de dados para a aplicação. O laravel transforma todas as tabelas do banco de dados em classes, portanto as tabelas já estão salvo dentro da aplicação. Mas para cria-lo e necessário usar o comando do laravel, mas primeiramente deve-se instalar o laravel.

``composer global require laravel/installer``

Com o laravel instalado você terá acesso a varios comandos, mas o comando que importa agora é o migrate. Mas antes de executa-lo lembre-se de criar um banco de dados vazio, para poder receber as tabelas geradas pelo comando:

``php artisan migrate``

**Obs: O mysql do xampp deve estar ligado para funcionar**

Esse comando irá criar o banco de dados com todas as tabelas (esse comando deve ser executado dentro da pasta do sistema). Agora resta apenas configura o banco de dados dentro do sistema, no arquivo .env.example. Primeiro renomeie o arquivo para somente .env, agora na linha 12 do arquivo, onde esta escrito "DB_DATABASE", coloque o nome do banco de dados criado acima.

Pronto, se tudo ocorreu bem o sistema está funcionando.
