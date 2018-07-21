## Aiqsede - Back End
#### Como instalar?

É facil!

Instale o [docker](https://goo.gl/JmnqnK) na sua máquina.

Agora o [docker compose](https://goo.gl/nzcP7q).

A seguir, na raiz do projeto execute o seguinte comando (*esse cara vai subir o PHP, o MySql tudo localmente*):
```
docker-compose up -d
```
Agora entre dentro da sua imagem PHP com o comando:
```
docker-compose exec app bash
```
Lá dentro, execute o composer para instalar as dependências e depois execute as migrations para criar as tabelas no seu banco:
```
composer install
php artisan migrate:fresh --seed
```
Pronto. A mágica está feita!

A API vai estar rodando localmente na porta 8081 (*localhost:8081/*).

Um usuário já está criado. Já tem login e senha. É esse aqui:

**E-mail** - *aiqsedeadm@aiqsede.com*

**Senha** - *aiqsede123*

*TODAS AS INFORMAÇÕES DO SEU CONTAINER ESTÃO NO ARQUIVO* **docker-compose.yml** *NA RAIZ DO PROJETO*

## Documentação da API
A mesma que essa aqui: *https://goo.gl/YXXKFv*

PS.: Substituir o **/desafio** por **/api** nas rotas :D
